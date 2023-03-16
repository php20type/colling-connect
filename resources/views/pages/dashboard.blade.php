@extends('layout.app2', [
    'title' => 'dashboard'
    ])
    @section('content')

<div id="main">

		<section class="dashboard-banner-sec">
			<div class="dashboard-banner-inner">
				<div class="dashboard-banner-img">
					<img src="images/dashboard-banner-img.jpg">
				</div>
				<div class="dashboard-banner-content">
					<div class="container">
						<h2>Agent Dashboard</h2>
					</div>
				</div>
			</div>
		</section>

		<section class="dashboard-menu-main-sec">
			<div class="dashboard-menu-inner">
				<div class="dashboard-menu">
					<ul>
						<li>
							<a href="{{ route('home') }}" class="active"><span>Dashboard</span></a>
						</li>
						<li>
							<a href="{{ route('connection.index') }}"><span>Create A Connection</span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><span>Connection Tracker</span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><span>FAQ's</span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><span>Contact Us</span></a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="tiles-panel-main-sec">
			<div class="container">
				<div class="tiles-panel-inner">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="tiles-panel-item">
								<a href="javascript:void(0)">
									<div class="tiles-panel-img">
										<img src="images/tiles-panel-img-1.jpg">
									</div>
									<div class="tiles-panel-con">
										<h3>Create a new connection</h3>
										<i class="fas fa-chevron-right"></i>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="tiles-panel-item">
								<a href="javascript:void(0)">
									<div class="tiles-panel-img">
										<img src="images/tiles-panel-img-2.jpg">
									</div>
									<div class="tiles-panel-con">
										<h3>News and promotions</h3>
										<i class="fas fa-chevron-right"></i>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="tiles-panel-item">
								<a href="javascript:void(0)">
									<div class="tiles-panel-img">
										<img src="images/tiles-panel-img-3.jpg">
									</div>
									<div class="tiles-panel-con">
										<h3>Direct Connect benefits</h3>
										<i class="fas fa-chevron-right"></i>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="tiles-panel-item">
								<a href="javascript:void(0)">
									<div class="tiles-panel-img">
										<img src="images/tiles-panel-img-4.jpg">
									</div>
									<div class="tiles-panel-con">
										<h3>My resources</h3>
										<i class="fas fa-chevron-right"></i>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="marketing-material-main-sec">
			<a href="javascript:void(0)">
				<div class="container">
					<div class="marketing-material-inner">
						<div class="marketing-material-con">
							<span>Do you need marketing material?</span>
							<h3>Request Marketing Material</h3>
						</div>
						<div class="marketing-material-arrow">
							<i class="fas fa-chevron-down"></i>
						</div>
					</div>
				</div>
			</a>
		</section>

		<section class="custom-cta-main-sec">
			<div class="container">
				<div class="custom-cta-inner">
					<div class="custom-cta-con">
						<h3>Create A Connection</h3>
						<p>Connect your customer's utilities quickly and easily with Direct Connect</p>
					</div>
					<div class="custom-cta-btn">
						<a href="javascript:void(0)" class="custom-btn">Create Now <i class="fas fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</section>

	</div>
    @endsection