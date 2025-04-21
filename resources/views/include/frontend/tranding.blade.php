<!-- Trending Area Start -->
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Trending Top -->
                <div class="col-lg-8">
                    <div class="trending-top mb-30">
                        @foreach ($tranding as $data)
                        <div class="trend-top-img">
                            <img src="{{ asset('/img/berita/' . $data->cover) }}" alt="{{ $data->judul }}">
                            <div class="trend-top-cap">
                                <span>{{ $data->kategori->nama }}</span>
                                <h2><a href="{{ route('berita.detail', $data->id) }}">{{ $data->judul }}</a></h2>
                                <p>{{ Str::limit($data->isi, 70) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Recent News -->
                <div class="col-lg-4">
                    @foreach ($recent as $data)
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="{{ asset('/img/berita/' . $data->cover) }}" alt="{{ $data->judul }}" width="160">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">{{ $data->kategori->nama }}</span>
                            <h4><a href="{{ route('berita.detail', $data->id) }}">{{ Str::limit($data->judul, 30) }}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
