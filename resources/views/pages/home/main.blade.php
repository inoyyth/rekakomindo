@extends('layouts.default')
@section('content')
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">Welcome to Rekakomindo</h3>
            <p class="agileits_w3layouts_para w3_agile_para">Our best services</p>
        </div>

        <div class="agileits_banner_bottom_grid_three">
            <div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
                <div class="wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{ URL::asset('themes/images/s5.jpg') }}" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3>Electrical Installation</h3>
                            <p>service system operates using electricity</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
                <div class="wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{ URL::asset('themes/images/s7.jpg') }}" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3>Electronic Installation</h3>
                            <p>Electronic Installation consists of many subsystem</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
                <div class="wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{ URL::asset('themes/images/s2.jpg') }}" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3>Mechanical & Electrical Consultant</h3>
                            <p>we now ready to also serve you as a consultant and planner</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<!-- //services -->

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">Build A Better Life by Installing a Better Future</h3>
            <p class="agileits_w3layouts_para w3_agile_para">
                Established in 1997 PT Aneka Rekakomindo Kencana also known as REKAKOMINDO,
                is a company engaged in the mechanical electrical which focusing in the field of
                materials and  electrical system, such as panels, Public Addresses, Fire Alarms,
                Telephone, UPS, MATV, CCTV, Multi Media. For information, our company has experience
                handling various development projects in various cities in Indonesia.
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
