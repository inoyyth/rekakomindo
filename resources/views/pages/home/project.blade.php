@extends('layouts.default')
@section('content')
@push('styles')
    <link href="{{ URL::asset('themes/css/simpleLightbox.css') }}" rel="stylesheet" type="text/css" />
@endpush
<!-- gallery -->
<div class="banner-bottom">
    <div class="container">
        <h3 class="wthree_head">Projects</h3>
            <p class="agileits_w3layouts_para w3_agile_para">Our projects.</p>
        <div class="w3ls_gallery_grids">
            <div class="col-md-4 w3_agile_gallery_grid">
                <div class="agile_gallery_grid">
                    <a title="Griya Adhiyaksa Kedoya" href="{{ URL::asset('themes/images/project/project1.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project1.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Griya Adhiyaksa Kedoya</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_gallery_grid">
                    <a title="Sekolah Alam Alfa Omega" href="{{ URL::asset('themes/images/project/project2.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project2.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Sekolah Alam Alfa Omega</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_gallery_grid">
                    <a title="PKG Group Head Office" href="{{ URL::asset('themes/images/project/project3.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project3.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>PKG Group Head Office</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 w3_agile_gallery_grid">
                <div class="agile_gallery_grid">
                    <a title="PSW Tower" href="{{ URL::asset('themes/images/project/project4.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project4.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>PSW Tower</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_gallery_grid">
                    <a title="Rusunawa Pasar Rumput" href="{{ URL::asset('themes/images/project/project5.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project5.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Rusunawa Pasar Rumput</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_gallery_grid">
                    <a title="Pabrik Baja Waskita Karya Infrastructure" href="{{ URL::asset('themes/images/project/project7.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project7.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Pabrik Baja Waskita Karya Infrastructure</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 w3_agile_gallery_grid">
                <div class="agile_gallery_grid">
                    <a title="Sekolah Atlet PPOP Ragunan Dispora Jakarta" href="{{ URL::asset('themes/images/project/project6.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project6.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Sekolah Atlet PPOP Ragunan Dispora Jakarta</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_gallery_grid">
                    <a title="Rumah Isolasi Covid-19 RSUP Fatmawati" href="{{ URL::asset('themes/images/project/project8.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project8.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Rumah Isolasi Covid-19 RSUP Fatmawati</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="agile_gallery_grid">
                    <a title="Revitalisasi Masjid Istiqlal Jakarta" href="{{ URL::asset('themes/images/project/project9.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project9.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Revitalisasi Masjid Istiqlal Jakarta</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 w3_agile_gallery_grid">
                <div class="agile_gallery_grid">
                    <a title="Waskita Politeknik Negeri Malang" href="{{ URL::asset('themes/images/project/project10.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project10.jpg') }}" alt=" " class="img-responsive" style="width:350px;height:232px;" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Waskita Politeknik Negeri Malang</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="agile_gallery_grid">
                    <a title="Ruang Perawatan Gedung Anggrek RSUP Fatmawati lt. 4 dan 5" href="{{ URL::asset('themes/images/project/project11.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project11.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Ruang Perawatan Gedung Anggrek RSUP Fatmawati lt. 4 dan 5</h3>
                            </div>
                        </div>
                    </a>
                </div> -->
                <!-- <div class="agile_gallery_grid">
                    <a title="Revitalisasi Masjid Istiqlal Jakarta" href="{{ URL::asset('themes/images/project/project9.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project9.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Revitalisasi Masjid Istiqlal Jakarta</h3>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
            <div class="col-md-4 w3_agile_gallery_grid">
                <div class="agile_gallery_grid">
                    <a title="Ruang Perawatan Gedung Anggrek RSUP Fatmawati lt. 4 dan 5" href="{{ URL::asset('themes/images/project/project11.jpg') }}">
                        <div class="agile_gallery_grid1">
                            <img src="{{ URL::asset('themes/images/project/project11.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3layouts_gallery_grid1_pos">
                                <h3>Ruang Perawatan Gedung Anggrek RSUP Fatmawati lt. 4 dan 5</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //gallery -->
@endsection()
