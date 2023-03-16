@extends('layout.app', [
    'title' => 'Forgot password'
    ])
    @section('content')
<div id="main">

		<section class="forgot-password-main-sec">
			<div class="container">
				<div class="forgot-password-inner">
					<div class="forgot-password-content">
						<h2>Forgotten Password?</h2>
						<p>Please enter your username below and your password will be emailed to you, or call 1300 558 169.</p>
						<div class="forgot-password-form-area">
							<form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">
								@csrf
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
								<div class="row">
									<div class="col-md-6">
										<div class="form-field">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-field">
											<button class="custom-btn">Submit <i class="fas fa-chevron-right"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

@endsection

