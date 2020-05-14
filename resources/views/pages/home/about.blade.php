@extends('layouts.default')
@section('content')
<!-- gallery -->
<div class="banner-bottom">
    <div class="container">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">About Us</h3>
            <p class="agileits_w3layouts_para w3_agile_para">
                Established in Jakarta at 2006 named Rekakomindo. We developed not only at Jakarta,
                but also in Surabaya, Riau and Denpasar. Today we are not just a contractor, but we can also be your consultant, and designer for
                your mechanical and electrical needs. With experiences of more than 15 years, we believe that we can give you the best service
                and quality. Our philosophy since Alkonusa’s establishment has been based on the idea that we should serve our clients,
                and work for the best with a great way for the excellence result.
            </p>
            <p style="text-align:center;">
                <b>Our Mission</b>
                <br>
                With Passion and Knowledge of Engineering expertise
                <br>
                We are determined to realize the ideas and Providing the best
                <br>
                for our customers satisfaction
            </p>
            <p style="text-align:center;">
                <b>Our Vision</b>
                <br>
                To develop the best ideas into reality to all our customers
            </p>
            <p style="text-align:center;">
                <b>Our Commitment</b>
                <br>
                We are committed to focus on to the function<br>
                and needs of customers satisfaction<br>
                by upholding the value of excellence and strong<br>
                cooperation to achieve highest result.
            </p>
            Best Regards,
            </p>
            <p>
            PT Rekakomindo
            </p>
        </div>
    </div>
    <div class="container">
        <div class="w3ls_banner_bottom_grids">
            <div class="col-md-3 agile_team_grid">

            </div>
            <div class="col-md-3 agile_team_grid">
                <div class="agileits_w3layouts_team_grid">
                    <img src="{{ URL::asset('themes/images/amon1.jpeg') }}" style="width:400px;height:300px;" alt=" " class="img-responsive">
                </div>
                <h4>Taufik Pambudi</h4>
                <p>Director</p>
            </div>
            <div class="col-md-3 agile_team_grid">
                <div class="agileits_w3layouts_team_grid">
                    <img src="{{ URL::asset('themes/images/t3.jpg') }}" style="width:400px;height:300px;" alt=" " class="img-responsive">
                </div>
                <h4>David Gideon</h4>
                <p>Manager</p>
            </div>
            <div class="col-md-3 agile_team_grid">

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //gallery -->
@endsection()
