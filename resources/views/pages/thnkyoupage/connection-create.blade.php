@extends('layout.app2', [
'title' => 'Connection'
])
@section('content')
<div id="main">

    <section class="create-connection-banner-sec">
        <div class="container">
            <div class="create-connection-banner-inner">
                <div class="create-connection-banner-content">
                    <div class="header-email-name"> <p>Thank you</p> </div>
                    <h2>CONNECTION HAS BEEN CREATED</h2>
                </br>
                    <p>Reference number:# {{ $application_id }}</p>
                </br>
                    <p>Additional mover information is no longer needed, e.g. drivers licence details, as our Customer Services Representative will confirm all application details when contacting the mover.</p>
                </div>

                <div class="form-field submit-btn-field">
                </br>
                    <a href="{{ route('connection.index') }}" type="submit" id="submitbtn" disabled class="btn custom-btn">Create Another connection <i class="fas fa-chevron-right"></i></a>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection    