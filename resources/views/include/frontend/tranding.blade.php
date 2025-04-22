<!-- Trending Area Start -->
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- Add CSS for zoom effect directly here -->
                        <style>
                            .trend-top-img, .trand-right-img {
                                position: relative;
                                overflow: hidden;
                            }

                            .trend-top-img img, .trand-right-img img {
                                transition: transform 0.5s ease;
                                width: 100%;
                                height: auto;
                                display: block;
                                will-change: transform;
                            }

                            .trend-top-img:hover img, .trand-right-img:hover img {
                                transform: scale(1.1);
                            }
                        </style>
                    </div>
                </div>
            </div>
            <?php
            $berita = \DB::table('beritas as a')
                        ->join('kategoris as k', 'k.id', '=', 'a.id_kategori')
                        ->select('a.judul', 'a.isi', 'a.cover', 'a.created_at', 'k.nama as kategori')
                        ->orderby('created_at', 'desc')->get();
            ?>
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending-top mb-30">
                         @foreach ($tranding as $data)
                        <div class="trend-top-img">
                            <img src="{{asset('/img/berita/' . $data->cover)}}" alt="">
                            <div class="trend-top-cap">
                                <span>{{$data->kategori->nama}}</span>
                                <h2><a href="details.html">{{$data->judul}}</a></h2>
                                <b style="color: white">{{ substr($data->isi,0,70) }} ...</b>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Trending Bottom -->
                </div>
                <!-- Right content -->
                <div class="col-lg-4">
                    @foreach ($recent as $data)
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img src="{{asset('/img/berita/' . $data->cover)}}" alt="" width="160px">
                        </div>
                        <div class="trand-right-cap">
                            <span class="color1">{{$data->kategori->nama}}</span>
                            <h4><a href="details.html">{{ substr($data->isi,0,30) }} ...</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
