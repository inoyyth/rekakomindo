@extends('layouts.default')
@section('content')
<!-- services -->
<div class="agile-prod">
    <div class="container">
        <h3 class="wthree_head">Services</h3>
        <p class="agileits_w3layouts_para w3_agile_para">Our best services.</p>
		<div class="agile-prod1">
			<div class="col-md-6 agile-sub">
				<h4>Electrical Installation</h4>
				<p>Almost all parts in a building service system operates using electricity. Because of this reason, we strive to ensure a safe and trustable electrical installation.</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Low or Medium Electrical Voltage Construction</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Transformator Installation</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> LVMDP, MCD Box, TB, and Accessories</li>

                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Cable Feeder, Cable Ladder, Cable Tray</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Lighting and Power Solutions</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Testing and Maintenance Electrical System</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Grounding and Lightning Protection System</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Design and Built an Alternative Power Generation</li>
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
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Sound System</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Master Antenna Television (MATV)</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> CCTV / IP TV System</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Telephone PABX (Analog / IP)</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Data (Wired and Wireless)</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Building Automation System (BAS)</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Access Control System</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
        </div>
        <div class="agile-prod1">
			<div class="col-md-6 agile-sub">
				<h4>Mechanical & Electrical Consultant</h4>
				<p>Based on our experience over the past 15 years as ME Contractor, we now ready to also serve you as a consultant and planner for all your projects.</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Design and Planning ME System</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Calculate needs and requirement</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Specification Finding</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Estimate Cost</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> 2D CAD Drawing</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Value Engineering</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Maintaining and Upgrading ME System</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Troubleshooting and Repairing</li>
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
