<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="theme_ocean" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Update News Pages</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/logo-abbr.png') }}" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/vendors/css/daterangepicker.min.css') }}" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/theme.min.css') }}" />
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        @yield('css')
</head>

<body>
    {{-- Sidebar --}}
    @include('include.backend.sidebar')
    {{-- Header --}}
    @include('include.backend.header')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Berita</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">Update</li>
                        <li class="breadcrumb-item">Berita</li>
                    </ul>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Edit Data Brand</div>
                                    <div class="card-body">
                                        <form action="{{route('berita.update', $berita->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="gambar">gambar</label>
                                                    @if ($berita->cover)
                                                        <p><img src="{{ asset('img/berita/' . $berita->cover) }}" alt="cover" width="100px">
                                                        </p>
                                                    @endif
                                                    <input type="file" name="cover"
                                                        class="form-control @error('cover') is-invalid @enderror">
                                                    @error('cover')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                            @enderror

                                                <label class="form-label">Judul Berita</label>
                                                <input type="text" class="form-control" name="judul" value="{{$berita->judul}}">

                                                <label for="exampleInputEmail1">Pengguna</label>
                                                <select class="form-control" name="id_user">
                                                    @foreach($user as $data)
                                                        <option value="{{$data->id}}"
                                                            {{$data->id == $berita->id_user ? 'selected' : ''}}>
                                                            {{$data->name}}</option>
                                                    @endforeach
                                                </select>

                                                <label for="exampleInputEmail1">Kategori</label>
                                                <select class="form-control" name="id_kategori">
                                                    @foreach($kategori as $data)
                                                        <option value="{{$data->id}}"
                                                            {{$data->id == $berita->id_kategori ? 'selected' : ''}}>
                                                            {{$data->nama}}</option>
                                                    @endforeach
                                                </select>

                                                <label class="form-label">Isi Berita</label>
                                                <textarea type="text" class="form-control" name="isi" value="{{$berita->isi}}"></textarea>

                                            </div>
                                            <div class="d-flex flex-column">
                                              <button type="submit" class="btn btn-primary btn-sm mb-2">Save</button>
                                               <a href="{{ url('berita') }}" class="btn btn-primary btn-sm">Back</a>
                                             </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        {{-- Footer --}}
        @include('include.backend.footer')
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="{{ asset('backend/assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ asset('backend/assets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/js/circle-progress.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('backend/assets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('backend/assets/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->
    @yield('js')
    @stack('script')
</body>

</html>
