@extends('layout.app2', [
'title' => 'Connection'
])
@section('content')
<div id="main">

    <section class="create-connection-banner-sec">
        <div class="container">
            <div class="create-connection-banner-inner">
                <div class="create-connection-banner-content">
                    <span>New Connection</span>
                    <h2>Create A Connection</h2>
                    <p>Fill in your mover details below and get them connected.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dashboard-menu-main-sec">
        <div class="dashboard-menu-inner">
            <div class="dashboard-menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}"><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('connection.index') }}" class="active"><span>Create A Connection</span></a>
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

    <section class="create-connection-main-sec">
        <div class="container">
            <div class="create-connection-inner">
                <form class="create-connection-form" action="{{ route('connection.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="connection-form-left-area">
                                <div class="form-block mover-details-form">
                                    <h3>Mover details</h3>
                                    <div class="form-row row">
                                        <div class="form-col col-lg-6">
                                            <div class="form-field">
                                                <input type="text" name="first_name" id="first_name" placeholder="First name*">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-6">
                                            <div class="form-field">
                                                <input type="text" name="last_name" id="last_name" placeholder="Last name*">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-12">
                                            <div class="form-row-inner date-birth-field">
                                                <label>Date of birth</label>
                                                <div class="form-row-inner">
                                                    <div class="form-field select-field">
                                                        <input type="date" name="date_of_birth" id="date_of_birth">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-12">
                                            <div class="form-field">
                                                <input type="email" name="email" id="email" placeholder="E-mail address (optional)">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-12">
                                            <div class="form-field">
                                                <input type="tel" name="mobile_number" id="mobile_number" placeholder="Mobile number*">
                                            </div>
                                            <!-- <span>OR</span>
                                                <div class="form-field">
                                                    <input type="tel" name="phone-number" placeholder="Phone number*">
                                                </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="form-block second-mover-form">
                                    <div class="second-mover-form-link second-mover-data">
                                        <a href="javascript:void(0)">Second mover <span>(optional)</span></a>
                                    </div>
                                    <div class="second-mover-form-dropdown">
                                        <div class="form-row row">
                                            <div class="form-col col-lg-6">
                                                <div class="form-field">
                                                    <input type="hidden" id="second_mover_status" name="second_mover_status">
                                                    <input type="text" name="sm_first_name" id="sm_first_name" placeholder="First name*">
                                                </div>
                                            </div>
                                            <div class="form-col col-lg-6">
                                                <div class="form-field">
                                                    <input type="text" name="sm_last_name" id="sm_last_name" placeholder="Last name*">
                                                </div>
                                            </div>
                                            <div class="form-col col-lg-12">
                                                <div class="form-row-inner date-birth-field">
                                                    <label>Date of birth</label>
                                                    <div class="form-row-inner">
                                                        <div class="form-field select-field">
                                                                <input type="date" name="sm_date_of_birth" id="sm_date_of_birth">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-col col-lg-12">
                                                <div class="form-field">
                                                    <input type="email" name="sm_email" id="sm_email" placeholder="E-mail address (optional)">
                                                </div>
                                            </div>
                                            <div class="form-col col-lg-12">
                                                    <div class="form-field">
                                                        <input type="tel" name="sm_mobile_number" placeholder="Mobile number*">
                                                    </div>
                                                    <!-- <span>OR</span>
                                                    <div class="form-field">
                                                        <input type="tel" name="phone-number" placeholder="Phone number*">
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-block company-details-form">
                                    <h3>Company details</h3>
                                    <p>Complete these fields if the billing will be in a company name.</p>
                                    <div class="form-row row">
                                        <div class="form-col col-lg-6">
                                            <div class="form-field">
                                                <input type="text" name="company_name" id="company_name" placeholder="Company name (optional)">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-6">
                                            <div class="form-field">
                                                <input type="text" name="company_abn" id="company_abn" placeholder="Company ABN (optional)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-block notes-form">
                                    <h3>Notes</h3>
                                    <div class="form-row row">
                                        <div class="form-col col-lg-12">
                                            <div class="form-field">
                                                <textarea type="text" name="notes" id="notes" placeholder="Notes/Comments/ID (optional) FOR VIC ONLY - provide ID Number, Type (Drivers Licence, Medicare, Passport), State (if Drivers Licence) and Expiry Date"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="connection-form-right-area">
                                <div class="form-block quick-address-form">
                                    <h3>Quick address look up</h3>
                                    <p>To make your life a little easier, simply begin typing your address below and we"ll help fill in all your details.</p>
                                    <div class="form-row row">
                                        <div class="form-col col-lg-12">
                                            <div class="form-field">
                                                <input type="text" name="quick-address" id="quick-address" placeholder="i.e 1 Main Street, Coolville, Victoria, 3065 (optional)">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-block new-address-form">
                                    <h3>New address details</h3>
                                    <div class="form-row row">
                                        <div class="form-col col-lg-6">
                                            <div class="form-field">
                                                <input type="text" name="unit_no" id="unit_no" placeholder="Unit no. (optional)">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-6">
                                            <div class="form-field">
                                                <input type="text" name="street_no" id="street_no" placeholder="Street no.*">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-8">
                                            <div class="form-field">
                                                <input type="text" name="street_name" id="street_name" placeholder="Street name*">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-4">
                                            <div class="form-field">
                                                <input type="text" name="street_type" id="street_type" placeholder="Street type (optional)">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-8">
                                            <div class="form-field">
                                                <input type="text" name="suburb" id="suburb" placeholder="Suburb*">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-4">
                                            <div class="form-field">
                                                <input type="text" name="postcode" id="postcode" placeholder="Postcode*">
                                            </div>
                                        </div>
                                        <div class="form-col col-lg-12">
                                            <div class="form-field select-field">
                                                <select name="state" id="state">
                                                    <option value="" disabled="" selected="">State</option>
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
                                    </div>
                                </div>

                                <div class="form-block second-mover-form">
                                    <div class="second-mover-form-link second-mover-postal">
                                        <a href="javascript:void(0)">Postal address <span>(if different from moving address)</span></a>
                                    </div>
                                    <div class="second-mover-form-dropdown">
                                        <input type="hidden" name="postal_address_status" id="postal_address_status">
                                        <div class="form-row-inner po-box-row">
                                            <label>Is this a PO Box?</label>
                                            <div class="form-field radio-field">
                                                <input type="radio" name="postbox" value="yes">
                                                <label>Yes</label>
                                            </div>
                                            <div class="form-field radio-field">
                                                <input type="radio" name="postbox" checked="" value="no">
                                                <label>No</label>
                                            </div>
                                        </div>

                                        <div class="po-box-tab" id="po-box-no-tab">
                                            <div class="form-row row">
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_unit_no" id="ps_unit_no" placeholder="Unit no. (optional)">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_street_no" id="ps_street_no"  placeholder="Street no.*">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-8">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_street_name" id="ps_street_name"  placeholder="Street name*">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-4">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_street_type" id="ps_street_type" placeholder="Street type (optional)">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-8">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_suburb" id="ps_suburb"  placeholder="Suburb*">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-4">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_postcode" id="ps_postcode"  placeholder="Postcode*">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-12">
                                                    <div class="form-field select-field">
                                                        <select name="ps_state" id="ps_state">
                                                            <option value="" disabled="" selected="">State</option>
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
                                            </div>
                                        </div>
                                        <div class="po-box-tab" id="po-box-yes-tab" style="display: none;">
                                            <div class="form-row row">
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field select-field">
                                                        <select name="ps_box_type" id="ps_box_type">
                                                            <option disabled="" selected="">PO Box type</option>
                                                            <option value="PO Box">PO Box (Post Office Box)</option>
                                                            <option value="GPO Box">GPO Box (General Post Office Box)</option>
                                                            <option value="CARE PO">CARE PO (Care Post Office)</option>
                                                            <option value="RMB">RMB (Roadside Mail Bag/Box)</option>
                                                            <option value="RSD">RSD (Roadside Delivery)</option>
                                                            <option value="CMA">CMA (Community Mail Agent)</option>
                                                            <option value="CPA">CPA (Community Postal Agent)</option>
                                                            <option value="Private Bag">Private Bag</option>
                                                            <option value="Locked Bag">Locked Bag</option>
                                                            <option value="MS">MS (Mail Service)</option>
                                                            <option value="CMB">CMB (Community Mail Bay)</option>
                                                            <option value="RMS">RMS (Roadside Mail Service)</option>
                                                        </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_box_no" id="ps_box_no"  placeholder="PO Box no.*">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_suburb" id="ps_suburb"  placeholder="Suburb*">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field">
                                                        <input type="text" name="ps_postcode" id="ps_postcode"  placeholder="Postcode*">
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field select-field">
                                                        <select name="ps_state" id="ps_state">
                                                            <option value="" disabled="" selected="">State</option>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="connection-details-form-area">
                                <div class="form-block connection-details-form">
                                    <h3>Connection details</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-row row">
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field select-field">
                                                        <select name="mover_status" id="mover_status">
                                                            <option value="" selected="" disabled="">Select Mover Status*</option>
                                                            <option value="tenant">Tenant</option>
                                                            <option value="owner">Owner Occupier</option>
                                                            <option value="landlord">Landlord</option>
                                                            <option value="agent">Agency</option>
                                                        </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field select-field">
                                                        <select name="lease_length" id="lease_length">
                                                            <option value="" disabled="" selected="">Lease length (optional)</option>
                                                            <option value="3">3 months</option>
                                                            <option value="6">6 months</option>
                                                            <option value="12">12 months</option>
                                                            <option value="18">18 months</option>
                                                            <option value="24">24 months</option>
                                                            <option value="30">30 months</option>
                                                            <option value="36">36 months</option>
                                                            <option value="42">42 months</option>
                                                            <option value="48">48 months</option>
                                                            <option value="54">54 months</option>
                                                            <option value="60">60 months</option>
                                                        </select>
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </div>
                                                <div class="form-col col-lg-6">
                                                    <div class="form-field date-field">
                                                        <input type="date" name="moving_date" id="moving_date" placeholder="Select moving date*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-row row">
                                                <div class="form-col col-md-6 col-lg-6">
                                                    <div class="form-field checkbox-field">
                                                        <input type="checkbox" name="services[]">
                                                        <label>Electricity</label>
                                                    </div>
                                                </div>
                                                <div class="form-col col-md-6 col-lg-6">
                                                    <div class="form-field checkbox-field">
                                                        <input type="checkbox" name="services[]">
                                                        <label>Gas</label>
                                                    </div>
                                                </div>
                                                <div class="form-col col-md-6 col-lg-6">
                                                    <div class="form-field checkbox-field">
                                                        <input type="checkbox" name="services[]">
                                                        <label>Phone & Internet Connections</label>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-col col-md-6 col-lg-4">
                                                    <div class="form-field checkbox-field">
                                                        <input type="checkbox" name="Pay-TV">
                                                        <label>Pay TV</label>
                                                    </div>
                                                </div>
                                                <div class="form-col col-md-6 col-lg-4">
                                                    <div class="form-field checkbox-field">
                                                        <input type="checkbox" name="Removalists">
                                                        <label>Removalists</label>
                                                    </div>
                                                </div>
                                                <div class="form-col col-md-6 col-lg-4">
                                                    <div class="form-field checkbox-field">
                                                        <input type="checkbox" name="">
                                                        <label>Truck Hire</label>
                                                    </div>
                                                </div>
                                                <div class="form-col col-md-6 col-lg-4">
                                                    <div class="form-field checkbox-field">
                                                        <input type="checkbox" name="Cleaning-Services">
                                                        <label>Cleaning Services</label>
                                                    </div>
                                                </div> -->
                                                <div class="form-col col-md-6 col-lg-6">
                                                    <div class="form-field checkbox-field">
                                                        <input type="checkbox" name="services[]">
                                                        <label>Water</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="connection-terms-submit-form-area">
                                <div class="form-row row">
                                    <div class="form-col col-lg-6">
                                        <div class="form-field checkbox-field">
                                            <input type="checkbox" name="Terms-And-Conditions" id="terms-and-conditions">
                                            <label>
                                                <p>I confirm the customer has signed the application form for direct connect’s service, agreeing to direct connect’s <a href="javascript:void(0)">Terms And Conditions</a>*</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-col col-lg-6">
                                        <div class="form-field submit-btn-field">
                                            <button type="submit" id="submitbtn" disabled class="btn custom-btn">Submit new connection <i class="fas fa-chevron-right"></i></button>
                                        </div>
                                    </div>
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
@section('script')
<script>
    $('#terms-and-conditions').change(function() {
        if ($(this).prop('checked') == true) {
            $('#submitbtn').prop("disabled", false);
        } else {
            $('#submitbtn').prop("disabled", true);
        }
    })
    $('#mover_status').change(function(){
        if($(this).val()=='tenant'){
        $('#lease_length').show();
        }else{
            $('#lease_length').hide();
        }
    })
    $('input[type=radio][name=postbox]').change(function() {
        var selected=$(this).val();
        $('.po-box-tab').hide();
        $('#po-box-'+selected+'-tab').show();
    });
    function initMap() {
        var input = document.getElementById('quick-address');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            Object.values(place.address_components).forEach(val => {
                console.log(val.types[0]);
                if(val.types[0] == "administrative_area_level_1"){
                    $("#state").val(val.long_name);
                }
                if(val.types[0] == "locality"){
                    $("#suburb").val(val.long_name);
                }
                if(val.types[0] == "postal_code"){
                    $("#postcode").val(val.long_name);
                }
                
            });
        });

    }
    $(".second-mover-data").click(function(){
        if($(this).hasClass("active")){
            $("#second_mover_status").val(0);
        }else{
            $("#second_mover_status").val(1);
        }
    });

    $(".second-mover-postal").click(function(){
        if($(this).hasClass("active")){
            $("#postal_address_status").val(0);
        }else{
            $("#postal_address_status").val(1);
        }
    });

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7_oD7KASFMpVuJP4yfRgNd3WY7iDJyo&libraries=places&callback=initMap"></script>

@endsection