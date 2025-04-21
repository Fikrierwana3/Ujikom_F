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
                <!-- Trending Top - Bagian Kiri -->
                <div class="col-lg-8">
                    <div class="trending-top mb-30">
                        @foreach ($tranding as $data)
                        <div class="trend-top-img">
                            <a href="{{ route('berita.detail', $data->id) }}" class="clickable-block">
                                <img src="{{ asset('/img/berita/' . $data->cover) }}" alt="{{ $data->judul }}">
                                <div class="trend-top-cap">
                                    <span>{{ $data->kategori->nama }}</span>
                                    <h2>{{ $data->judul }}</h2>
                                    <p>{{ Str::limit($data->isi, 70) }}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Recent News - Bagian Kanan -->
                <div class="col-lg-4">
                    @foreach ($recent as $data)
                    <div class="trand-right-single d-flex">
                        <a href="{{ route('berita.detail', $data->id) }}" class="trand-right-img">
                            <img src="{{ asset('/img/berita/' . $data->cover) }}" alt="{{ $data->judul }}" width="160">
                        </a>
                        <a href="{{ route('berita.detail', $data->id) }}" class="trand-right-cap">
                            <span class="color1">{{ $data->kategori->nama }}</span>
                            <h4>{{ Str::limit($data->judul, 30) }}</h4>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->

<style>
    /* CSS untuk memastikan link bisa diklik dengan benar */
    .clickable-block {
        display: block;
        position: relative;
        text-decoration: none;
        color: inherit;
    }

    .trend-top-img a,
    .trand-right-single a {
        z-index: 1;
    }

    .trand-right-img {
        display: block;
        margin-right: 15px;
    }

    .trand-right-cap {
        display: block;
        text-decoration: none;
        color: inherit;
    }
</style>
