@extends('komponen.app')
@section('title', 'Home Page')
@section('konten')
    {{-- title konten --}}
    <div class="body-title py-3">
        <div class="row">
            <div class="col-md-3">
                <h1 class="text-uppercase mt-2">List Produk</h1>
            </div>
            <div class="col-md-9">
                <div class="search-bar mt-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search-input" placeholder="Cari Produk">
                        <button type="button" class="btn btn-secondary" id="search-button">
                            <i class="fas fa-search"></i> Cari
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- card --}}
    {{-- <div class="body-container">
        <div class="row">
            @foreach ($data as $item)
                <div class="col-sm-3 mb-4">
                    <div class="card fw-bolder">
                        <a href="{{ route('home', $item->id) }}" class="text-center">
                            <div class="card-header">
                                <h5 class="card-title text-uppercase mt-2">{{ $item->nama }}</h5>
                            </div>
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top"
                                alt="{{ $item->nama_produk }}">
                            <div class="card-body text-start">
                                <p class="card-text">Harga Rp.{{ number_format($item->harga, 0, ',', '.') }}</p>
                                <p class="card-text"><small class="text-muted">Stock {{ $item->qty }}</small></p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="body-container">
        <div class="row" id="produk-container"></div>
    </div>
@endsection
@push('scripts')
    <script>
        const SHEET_ID = "1eRWG17R7CAeY9q6x47nY5fqM-O05aSfnHeH1hQL91hk";
        const SHEET_NAME = "Harga";
        const SHEET_URL = `https://docs.google.com/spreadsheets/d/${SHEET_ID}/gviz/tq?tqx=out:json&sheet=${SHEET_NAME}`;

        let produkData = [];

        fetch(SHEET_URL)
            .then(res => res.text())
            .then(rep => {
                const json = JSON.parse(rep.substr(47).slice(0, -2));

                produkData = json.table.rows.map(row => {
                    let namaProduk = row.c[1]?.v || "";
                    return {
                        nomer: row.c[0]?.v || "",
                        nama: namaProduk,
                        harga: row.c[2]?.v || 0,
                        qty: row.c[3]?.v || 0,
                        gambar: `storage/${namaProduk}.jpg` || "default.jpg"
                    };
                });

                renderProduk(produkData);
            })
            .catch(err => console.error("Error mengambil data:", err));

        function renderProduk(data) {
            let html = "";
            data.forEach(item => {
                html += `
      <div class="col-sm-3 mb-4">
        <div class="card fw-bolder">
          <a href="produk.html?id=${item.nomer}" class="text-center">
            <div class="card-header">
              <h5 class="card-title text-uppercase mt-2">${item.nama}</h5>
            </div>
            <img src="${item.gambar}" class="card-img-top" alt="${item.nama}">
            <div class="card-body text-start">
              <p class="card-text">Harga Rp.${item.harga.toLocaleString("id-ID")}</p>
              <p class="card-text"><small class="text-muted">Stock ${item.qty}</small></p>
            </div>
          </a>
        </div>
      </div>
    `;
            });
            document.getElementById("produk-container").innerHTML = html;
        }

        // Event listener untuk search
        document.getElementById("search-button").addEventListener("click", () => {
            filterProduk();
        });

        document.getElementById("search-input").addEventListener("keyup", (e) => {
            if (e.key === "Enter") filterProduk();
        });

        function filterProduk() {
            const keyword = document.getElementById("search-input").value.toLowerCase();
            const hasil = produkData.filter(item => item.nama.toLowerCase().includes(keyword));
            renderProduk(hasil);
        }
    </script>
@endpush
