@extends('layouts.default')
@section('content')
<!-- services -->
<div class="services">
    <div class="container">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">Welcome to Rekakomindo</h3>
            <p class="agileits_w3layouts_para w3_agile_para">Our Best Services.</p>
        </div>
        <div class="w3layouts_skills_grids w3layouts_featured_services_grids">
        <div class="col-md-6 w3_featured_services_right">
                <img src="{{ URL::asset('themes/images/2.jpg') }}" alt=" " class="img-responsive">
            </div>
            <div class="col-md-6 w3_featured_services_left">
                <div class="w3_featured_services_left_grid">
                    <div class="col-xs-4 w3_featured_services_left_gridl">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <i class="hi-icon fa-plug"> </i>
                        </div>
                    </div>
                    <div class="col-xs-8 w3_featured_services_left_gridr">
                        <h4>Electrical Instalation</h4>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="w3_featured_services_left_grid">
                    <div class="col-xs-4 w3_featured_services_left_gridl">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <i class="hi-icon fa-cubes"> </i>
                        </div>
                    </div>
                    <div class="col-xs-8 w3_featured_services_left_gridr">
                        <h4>Electronic Instalation</h4>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="w3_featured_services_left_grid">
                    <div class="col-xs-4 w3_featured_services_left_gridl">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                            <i class="hi-icon fa-share-alt"> </i>
                        </div>
                    </div>
                    <div class="col-xs-8 w3_featured_services_left_gridr">
                        <h4>Mechanical & Electrical Consultant (Design & Build)</h4>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">Build A Better Life by Installing a Better Future</h3>
            <p class="agileits_w3layouts_para w3_agile_para">
                Established in Jakarta at 2006 named Rekakomindo. We developed not only at Jakarta,
                but also in Surabaya, Riau and Denpasar. Today we are not just a contractor, but we can also be your consultant, and designer for
                your mechanical and electrical needs. With experiences of more than 15 years, we believe that we can give you the best service
                and quality. Our philosophy since Alkonusa’s establishment has been based on the idea that we should serve our clients,
                and work for the best with a great way for the excellence result.
                <p>
                Best Regards,
                </p>
                <p>
                PT Rekakomindo
                </p>
            </p>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
@endsection()
