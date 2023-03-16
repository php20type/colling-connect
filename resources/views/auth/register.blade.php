@extends('layout.app', [
'title' => 'Register'
])
@section('content')

<div id="main">

		<section class="custom-banner-sec account-login-title-sec">
			<div class="container">
				<div class="custom-banner-inner account-login-title-inner">
					<div class="custom-banner-content">
						<span>Let’s have a chat</span>
						<h2>Talk To One Of Our <br>staff About Joining <br>direct Connect</h2>
					</div>
				</div>
			</div>
		</section>

		<section class="signup-main-sec">
			<div class="container">
				<div class="signup-inner-area">
					<div class="signup-top-content">
						<p>For more information on how Direct Connect can work with you in the future, then please fill out the form below and one of our Account Managers will be in touch shortly.</p>
						<p>If you are already a Direct Connect member, please login with your Username and Password at the top of the screen.</p>
					</div>
					<form class="signup-form" action="{{ route('register') }}" method="post">
                        @csrf
						<div class="form-block">
							<h2>Your Details</h2>
							<div class="form-row row">
								<div class="form-col col-lg-6">
                                <div class="form-field">
                                    <input type="text" name="first_name" placeholder="First name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" >
                                </div>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-col col-lg-6">
                                <div class="form-field">
                                    <input type="text" name="last_name" placeholder="Last name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
                                </div>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-col col-lg-6">
									<div class="form-field">
										<input type="text" name="company" placeholder="Company">
									</div>
								</div>
								<div class="form-col col-lg-6">
									<div class="form-field select-field">
										<select name="state">
											<option value="">State</option>
		                                    <option value="ACT">Australian Capital Territory</option>
		                                    <option value="NSW">New South Wales</option>
		                                    <option value="NT">Northern Territory</option>
		                                    <option value="QLD">Queensland</option>
		                                    <option value="SA">South Australia</option>
		                                    <option value="TAS">Tasmania</option>
		                                    <option value="VIC">Victoria</option>
		                                    <option value="WA">Western Australia</option>
										</select>
										<i class="fas fa-chevron-down"></i>
									</div>
								</div>
								<div class="form-col col-lg-6">
                                <div class="form-field">
                                    <input type="tel" name="phone_number" placeholder="Phone number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror">
                                </div>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-col col-lg-6">
                                <div class="form-field">
                                    <input type="email" name="email" placeholder="Email address" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ Request::get('reg_email') }}">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
                                <div class="form-col col-lg-6">
                                    <div class="form-field">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="new-password">
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                           
                                <div class="form-col col-lg-6">
                                    <div class="form-field">
                                        <input  id="password-confirm" type="password" class="form-control" placeholder="Confirm-password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
								<div class="form-col col-lg-6">
									<div class="form-field checkbox-field checkbox-terms-onditions">
										<input type="checkbox" name="Terms-And-Conditions">
										<label><p>I Agree To The <a href="javascript:void(0)">Terms And Conditions</a></p></label>
									</div>
								</div>
								<div class="form-col col-lg-6">
									<div class="form-field signup-submit-btn">
										<button type="submit" class="custom-btn">Submit <i class="fas fa-chevron-right"></i></button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

	</div>


@endsection