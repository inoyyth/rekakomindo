@extends('layouts.default')
@section('content')
<!-- services -->
<div class="agile-prod">
    <div class="container">
        <h3 class="wthree_head">Services</h3>
        <p class="agileits_w3layouts_para w3_agile_para">Our best services.</p>
		<div class="agile-prod1">
			<div class="col-md-6 agile-img">
				<img src="{{ URL::asset('themes/images/g2.jpg') }}" alt="image">
			</div>
			<div class="col-md-6 agile-sub">
				<h4>Mechanical Plumbing</h4>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Start from Main Equipment</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Plumbing installation clean water</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Hot water pipeline installation</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Installation of piping Dirty air</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Installation of piping File air</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Installation of plumbing vents</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">The installation of piping rain air</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Valves and accessories works</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Package wells work</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Work package swimming pool</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Work package sewage treatment plant</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="agile-prod1">
			<div class="col-md-6 agile-sub">
				<h4>Electrical Installation</h4>
				<p>Almost all parts in a building service system operates using electricity. Because of this reason, we strive to ensure a safe and trustable electrical installation.</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Low or Medium Electrical Voltage Construction</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Transformator Installation</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">LVMDP, MCD Box, TB, and Accessories</a></li>

                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Cable Feeder, Cable Ladder, Cable Tray</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Lighting and Power Solutions</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Testing and Maintenance Electrical System</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Grounding and Lightning Protection System</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Design and Built an Alternative Power Generation</a></li>
				</ul>
			</div>
			<div class="col-md-6 agile-img">
				<img src="{{ URL::asset('themes/images/g3.jpg') }}" alt="image">
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="agile-prod1">
			<div class="col-md-6 agile-img">
				<img src="{{ URL::asset('themes/images/s7.jpg') }}" alt="image">
			</div>
			<div class="col-md-6 agile-sub">
				<h4>Electronic Installation</h4>
				<p>Electronic Installation consists of many subsystem that need delicate handling because of their frail characteristic.</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Sound System</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Master Antenna Television (MATV)</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">CCTV / IP TV System</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Telephone PABX (Analog / IP)</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Data (Wired and Wireless)</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Building Automation System (BAS)</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Access Control System</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
        </div>
        <div class="agile-prod1">
			<div class="col-md-6 agile-sub">
				<h4>Mechanical & Electrical Consultant</h4>
				<p>Based on our experience over the past 15 years as ME Contractor, we now ready to also serve you as a consultant and planner for all your projects.</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Design and Planning ME System</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Calculate needs and requirement</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Specification Finding</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Estimate Cost</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">2D CAD Drawing</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Value Engineering</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Maintaining and Upgrading ME System</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Troubleshooting and Repairing</a></li>
				</ul>
			</div>
			<div class="col-md-6 agile-img">
				<img src="{{ URL::asset('themes/images/s1.jpg') }}" alt="image">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //services -->
@endsection()
