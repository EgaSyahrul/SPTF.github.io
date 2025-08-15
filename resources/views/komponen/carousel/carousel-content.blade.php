<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($slide as $index => $slider)
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}"
                class="{{ $index == 0 ? 'active' : '' }}" style="color: transparent;"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach ($slide as $index => $slider)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $slider->gambar) }}" class="d-block w-100"
                    alt="{{ $slider->nama_slider }}">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
