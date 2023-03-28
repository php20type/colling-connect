@extends('layout.app2', [
'title' => 'Connection'
])
@section('content')
<div id="main">
    <section class="dashboard-menu-main-sec">
        <div class="dashboard-menu-inner">
            <div class="dashboard-menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}"><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('connection.index') }}"><span>Create A Connection</span></a>
                    </li>
                    <li>
                        <a href="{{ route('connection.connection-tracker') }}" class="active"><span>Connection Tracker</span></a>
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

    <section class="tracker-search-main-sec">
        <div class="container">
            <div class="tracker-search-inner">
                <form class="tracker-search-form" action="{{ route('connection.connection-tracker') }}" method="get">
                    <h3>Find a connection using <span>any</span> of the options below:</h3>
                    <div class="tracker-search-form-block">
                        <div class="form-row row">
                            <div class="form-col col-sm-6 col-md-4 col-lg-2">
                                <div class="form-field">
                                    <label>Address</label>
                                    <input type="text" name="Address">
                                </div>
                            </div>
                            <div class="form-col col-sm-6 col-md-4 col-lg-2">
                                <div class="form-field">
                                    <label>First Name</label>
                                    <input type="text" name="First-Name">
                                </div>
                            </div>
                            <div class="form-col col-sm-6 col-md-4 col-lg-2">
                                <div class="form-field">
                                    <label>Last Name</label>
                                    <input type="text" name="Last-Name">
                                </div>
                            </div>
                            <div class="form-col col-sm-6 col-md-4 col-lg-2">
                                <div class="form-field">
                                    <label>Submitted by</label>
                                    <input type="text" name="Submitted-by">
                                </div>
                            </div>
                            <div class="form-col col-sm-6 col-md-4 col-lg-2">
                                <div class="form-field">
                                    <label>Connections filter</label>
                                    <div class="select-field">
                                        <select>
                                            <option value="">All</option>
                                            <option value="Open">Open</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Finalised">Finalised</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-col col-sm-6 col-md-4 col-lg-2">
                                <div class="form-field tracker-search-btn">
                                    <button type="submit" class="custom-btn">Search <i class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="tracker-accordion-main-sec">
        <div class="tracker-accordion-inner">
            <div class="tracker-accord-filter-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="tracker-filter-left">
                                <h4>Showing 10 Out Of 10 Results</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tracker-filter-right">
                                <a href="javascript:void(0)" class="tracker-clear-search">Clear search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($connections as $connection)
                <div class="tracker-accordion-area">
                    <div class="tracker-accord-item">
                        <div class="tracker-accord-head">
                            <div class="container">
                                <div class="row tracker-accord-head-inner">
                                    <div class="col-md-6 tracker-accord-head-left">
                                        <span>{{ $connection->application_id }} Submitted by: {{ $connection->movers[0]['first_name'] }}</span>
                                        <h3>{{ $connection->movers[0]['first_name'] }} {{ $connection->movers[0]['last_name'] }}</h3>
                                        <p>{{ $connection->movers[0]['address'] }}</p>
                                    </div>
                                    <div class="col-md-6 tracker-accord-head-right">
                                        <h3>Connection status <span class="in-progress">In Progress</span></h3>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tracker-accord-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="tracker-accord-con-left">
                                            <h3>Applicant Details</h3>
                                            <ul>
                                                <li>
                                                    <p><span>Applicant ID:</span> {{ $connection->application_id }}</p>
                                                </li>
                                                <li>
                                                    <p><span>Application Creation Date:</span> {{  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $connection->created_at)->format('d M Y')}}</p>
                                                </li>
                                                <li>
                                                    <p><span>Move To Address:</span> Unit 301301 30 Paper Trl, ALPHINGTON VIC 3078</p>
                                                </li>
                                                <li>
                                                    <p><span>List of Services:</span></p>
                                                    @foreach (explode(",",$connection->services) as $service)
                                                        @if($service == 1)
                                                            <p>Electricity Connection(Starts on 23.01.23)</p>
                                                        @elseif($service == 2)
                                                            <p>Gas Connection (Starts on 23.01.23)</p>
                                                        @elseif($service == 3)
                                                            <p>Phone & Internet Connections (Starts on 23.01.23)</p>
                                                        @else
                                                            <p>Water Connection (Starts on 23.01.23)</p>
                                                        @endif
                                                    @endforeach
                                                </li>
                                                <li>
                                                    <p><span>Submitted By:</span> Jake Peters</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tracker-accord-con-right">
                                            <form class="tracker-accord-form">
                                                <h3>Raise An Issue</h3>
                                                <div class="form-field">
                                                    <input type="text" name="Issue-Description" placeholder="Issue Description">
                                                </div>
                                                <div class="form-field">
                                                    <textarea name="issue-details" placeholder="Comments"></textarea>
                                                </div>
                                                <div class="form-field submit-field">
                                                    <button type="submit" class="custom-btn">Submit <i class="fas fa-chevron-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
@section('script')


@endsection