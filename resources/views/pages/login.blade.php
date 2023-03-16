@extends('layout.app', [
'title' => 'Login'
])
@section('content')

<div id="main">

    <section class="account-login-title-sec">
        <div class="container">
            <div class="account-login-title-inner">
                <div class="account-login-title">
                    <h4>Login to access your account details and more</h4>
                    <h2>Login Or Join Now</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="account-login-main-sec">
        <div class="container">
            <div class="account-login-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="account-login-form-area">
                            <div class="account-login-form-inner">
                                <h2><span>Existing Agent?</span>Log In Now</h2>
                                <form class="account-login-form">
                                    <div class="form-field col-md-6">
                                        <input type="text" name="name" placeholder="Username">
                                    </div>
                                    <div class="form-field col-md-6">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-field col-md-12">
                                        <button class="login-btn">Log In <i class="fas fa-chevron-right"></i></button>
                                    </div>
                                </form>
                                <div class="forgot-password-con">
                                    <h3>Forgot your Password?</h3>
                                    <a href="javascript:void(0)">Reset your Password now <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="join-now-form-area">
                            <div class="join-now-form-inner">
                                <h2><span>New Agent?</span>Join Now</h2>
                                <form class="join-now-form">
                                    <div class="form-field">
                                        <input type="email" name="email" placeholder="Email address">
                                    </div>
                                    <div class="form-field col-md-12">
                                        <button class="lets-go-btn">Let's Go <i class="fas fa-chevron-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection