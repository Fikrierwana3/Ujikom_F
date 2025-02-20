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
    <title>News Pages</title>
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
                        <li class="breadcrumb-item">Home</li>
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"><strong><h4>Kumpulan Berita</h4></strong>
                                        <a href="{{ route('berita.create') }}" class="btn btn-primary"><small>Tambah Berita</small></a>
                                    </div>
                                    @if (session('success'))
                                        <div class="alert alert-success fade show" role="alert">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <table class="table">        
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($berita as $data)
                                                <tr align="center">
                                                <td scope="row">
                                                    <img src="{{asset('/img/berita/' . $data->cover)}}" width="70">
                                                </td>
                                                <td style="text-align: left">{{ $data->judul }}</td>
                                                <td>{{ $data->user->name }}</td>
                                                <td>{{ $data->kategori->nama }}</td>
                                                <td style="text-align: left">{{ Str::limit($data->isi, 80) }}</td>
                                                <td>
                                                <form action="{{route('berita.destroy', $data->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                        <td align="center">
                                                        <div class="dropdown mt-2">
                                                            <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                                                <div data-bs-toggle="tooltip" title="Options">
                                                                    <i class="feather-more-vertical"></i>
                                                                </div>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{ route('berita.edit', $data->id) }}"><i
                                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                <button href="{{ route('berita.destroy', $data->id) }}" class="dropdown-item"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bx bx-trash-alt me-1"></i>
                                                                    Delete</button>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                    </form>
                                                </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
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