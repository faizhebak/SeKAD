@extends('layouts.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_3') Widgets @endslot
            @slot('title') Widgets @endslot
        @endcomponent

                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Sessions</p>
                                        <h3 class="m-0">24k</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="users" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Avg.Sessions</p>
                                        <h3 class="m-0">00:18</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Bounce Rate</p>
                                        <h3 class="m-0">$2400</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-danger"><i class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="activity" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <p class="text-dark mb-0 fw-semibold">Goal Completions</p>
                                        <h3 class="m-0">85000</h3>
                                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="report-main-icon bg-light-alt">
                                            <i data-feather="briefcase" class="align-self-center text-muted icon-sm"></i>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="card report-card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-dark mb-0 fw-semibold">New Tickets</p>
                                                <h3 class="m-0">155</h3>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div class="report-main-icon bg-light-alt">
                                                    <i data-feather="tag" class="align-self-center text-muted icon-sm"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="text-center">
                                            <h6 class="text-primary bg-soft-primary p-2 m-0 font-11 rounded">
                                                <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                                01 Jan 2020 to 31 Jun 2020
                                            </h6>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3">
                                <div class="card report-card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-dark mb-0 fw-semibold">Open Tickets</p>
                                                <h3 class="m-0">101</h3>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div class="report-main-icon bg-light-alt">
                                                    <i data-feather="package" class="align-self-center text-muted icon-sm"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="text-center">
                                            <h6 class="text-primary bg-soft-primary p-2 mb-0 font-11 rounded">
                                                <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                                01 Jan 2020 to 31 Jun 2020
                                            </h6>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3">
                                <div class="card report-card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-dark mb-0 fw-semibold">On Hold</p>
                                                <h3 class="m-0">15</h3>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div class="report-main-icon bg-light-alt">
                                                    <i data-feather="zap" class="align-self-center text-muted icon-sm"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="text-center">
                                            <h6 class="text-primary bg-soft-primary p-2 mb-0 font-11 rounded">
                                                <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                                01 Jan 2020 to 31 Jun 2020
                                            </h6>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                            <div class="col-md-6 col-lg-3">
                                <div class="card report-card">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <p class="text-dark mb-0 fw-semibold">Unassigned</p>
                                                <h3 class="m-0">88</h3>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div class="report-main-icon bg-light-alt">
                                                    <i data-feather="lock" class="align-self-center text-muted icon-sm"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="hr-dashed">
                                        <div class="text-center">
                                            <h6 class="text-primary bg-soft-primary p-2 mb-0 font-11 rounded">
                                                <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                                01 Jan 2020 to 31 Jun 2020
                                            </h6>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div><!-- end col-->
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Support Status</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-sm btn-outline-light d-inline-block">View All</a>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col support-tickets">
                                        <h4 class="fw-semibold">1530</h4>
                                        <h5>Tickets</h5>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <ul class="list-inline url-list mb-0">
                                            <li class="list-inline-item mb-2">
                                                <i class="fas fa-circle text-primary font-10"></i>
                                                <span>Open Tickets</span>
                                            </li>
                                            <li class="list-inline-item mb-2">
                                                <i class="fas fa-circle text-info font-10"></i>
                                                <span>Resolved Tickets</span>
                                            </li>
                                            <li class="list-inline-item mb-3">
                                                <i class="fas fa-circle text-success font-10"></i>
                                                <span>Unresolved Tickets</span>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="progress mt-4">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7 align-self-center">
                                        <div class="timer-data">
                                            <div class="icon-info mt-1 mb-3">
                                                <i class="dripicons-phone bg-soft-dark"></i>
                                            </div>
                                            <h3 class="mt-0 text-dark">0m:27s</h3>
                                            <h4 class="mt-0 header-title text-truncate font-15 mb-0">Avg.Speed of answer</h4>
                                            <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-5 align-self-center">
                                        <div class="apexchart-wrapper">
                                            <div id="dash_spark_1" class="chart-gutters"></div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7 align-self-center">
                                        <div class="timer-data">
                                            <div class="icon-info mt-1 mb-3">
                                                <i class="dripicons-clock bg-soft-dark"></i>
                                            </div>
                                            <h3 class="mt-0 text-dark">4m:30s</h3>
                                            <h4 class="mt-0 header-title text-truncate font-15 mb-0">Time to Resolved Complaint</h4>
                                            <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-5 align-self-center">
                                        <div class="apexchart-wrapper">
                                            <div id="dash_spark_2" class="chart-gutters"></div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Pages View by Users</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <ul class="list-group custom-list-group">
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-2.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Dastone - Admin Dashboard</h6>
                                                <a href="#" class="font-12 text-primary">analytic-index</a>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">4.3k</span>
                                            <div class="apexchart-wrapper w-30 align-self-center">
                                                <div id="dash_spark_1" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-1.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Dastone Simple- Admin Dashboard</h6>
                                                <a href="#" class="font-12 text-primary">sales-index</a>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">3.7k</span>
                                            <div class="apexchart-wrapper w-30 align-self-center">
                                                <div id="dash_spark_2" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-4.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Crovex - Admin Dashboard</h6>
                                                <a href="#" class="font-12 text-primary">helpdesk-index</a>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">2.9k</span>
                                            <div class="apexchart-wrapper w-30 align-self-center">
                                                <div id="dash_spark_3" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-5.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Annex - Admin Dashboard</h6>
                                                <a href="#" class="font-12 text-primary">calendar</a>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">1.2k</span>
                                            <div class="apexchart-wrapper w-30 align-self-center">
                                                <div id="dash_spark_4" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img src="{{ URL::asset('assets/images/small/img-6.jpg') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0">Dastone Simple- Admin Dashboard</h6>
                                                <a href="#" class="font-12 text-primary">sales-index</a>
                                            </div><!--end media body-->
                                        </div>
                                        <div class="align-self-center">
                                            <span class="text-muted mb-n2">3.7k</span>
                                            <div class="apexchart-wrapper w-30 align-self-center">
                                                <div id="dash_spark_2" class="chart-gutters"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Activity</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                All<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Purchases</a>
                                                <a class="dropdown-item" href="#">Emails</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="help-activity-height" data-simplebar>
                                    <div class="activity">
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-user-clock bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                        updated the status of <a href="">Refund #1234</a> to awaiting customer response
                                                    </p>
                                                    <small class="text-muted">10 Min ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                        was added to the group, group name is <a href="">Overtake</a>
                                                    </p>
                                                    <small class="text-muted">50 Min ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="" class="rounded-circle thumb-md">
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                        opened new showcase <a href="">Mannat #112233</a> with theme market
                                                    </p>
                                                    <small class="text-muted">10 hours ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                        updated the status of <a href="">Refund #1234</a> to awaiting customer response
                                                    </p>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                        was added to the group, group name is <a href="">Overtake</a>
                                                    </p>
                                                    <small class="text-muted">14 Nov 2019</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="" class="rounded-circle thumb-md">
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                        opened new showcase <a href="">Mannat #112233</a> with theme market
                                                    </p>
                                                    <small class="text-muted">15 Nov 2019</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end activity-->
                                </div><!--end analytics-dash-activity-->
                            </div>  <!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Order by Channel</h4>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="border-bottom-dashed mb-4">
                                    <div class="media mb-3">
                                        <img src="{{ URL::asset('assets/images/brand-logo/amazon.png') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="media-body align-self-center">
                                            <h6 class="mt-0 mb-1">Amazon</h6>
                                            <p class="text-muted mb-1"><span class="text-success">+4.8%</span> From Yesterday</p>
                                            <small class="float-end text-muted ms-3 font-11">42%</small>
                                            <div class="progress mt-2" style="height:4px;">
                                                <div class="progress-bar bg-warning-50" role="progressbar" style="width: 42%; border-radius:5px;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end media body-->
                                    </div>
                                </div>
                                <div class="border-bottom-dashed mb-4">
                                    <div class="media mb-3">
                                        <img src="{{ URL::asset('assets/images/brand-logo/flipcart.png') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="media-body align-self-center">
                                            <h6 class="mt-0 mb-1">Flipcart</h6>
                                            <p class="text-muted mb-1"><span class="text-danger">-0.8%</span> From Yesterday</p>
                                            <small class="float-end text-muted ms-3 font-11">28%</small>
                                            <div class="progress mt-2" style="height:4px;">
                                                <div class="progress-bar bg-warning-50" role="progressbar" style="width: 28%; border-radius:5px;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end media body-->
                                    </div>
                                </div>
                                <div class="border-bottom-dashed mb-4">
                                    <div class="media mb-3">
                                        <img src="{{ URL::asset('assets/images/brand-logo/facebook.png') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="media-body align-self-center">
                                            <h6 class="mt-0 mb-1">Facebook</h6>
                                            <p class="text-muted mb-1"><span class="text-success">+2.1%</span> From Yesterday</p>
                                            <small class="float-end text-muted ms-3 font-11">18%</small>
                                            <div class="progress mt-2" style="height:4px;">
                                                <div class="progress-bar bg-warning-50" role="progressbar" style="width: 18%; border-radius:5px;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end media body-->
                                    </div>
                                </div>
                                <div class="">
                                    <!-- <div id="Order_channel" class="apex-charts"></div> -->
                                    <div class="media mb-1">
                                        <img src="{{ URL::asset('assets/images/brand-logo/insta.png') }}" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="media-body align-self-center">
                                            <h6 class="mt-0 mb-1">Instagram</h6>
                                            <p class="text-muted mb-1"><span class="text-danger">-1.1%</span> From Yesterday</p>
                                            <small class="float-end text-muted ms-3 font-11">12%</small>
                                            <div class="progress mt-2" style="height:4px;">
                                                <div class="progress-bar bg-warning-50" role="progressbar" style="width: 12%; border-radius:5px;" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div><!--end media body-->
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!-- end col-->
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Earning Reports</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                This Week<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Mont</a>
                                                <a class="dropdown-item" href="#">This Year</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body border-bottom-dashed">
                                <div class="earning-data text-center">
                                    <img src="{{ URL::asset('assets/images/money-beg.png') }}" alt="" class="money-bag my-3" height="60">
                                    <h5 class="earn-money mb-1">$51,255</h5>
                                    <p class="text-muted font-15 mb-4">Total Revenue</p>
                                    <div class="text-center my-2">
                                        <h6 class="text-primary bg-soft-primary p-3 mb-0 font-11 rounded">
                                            <i data-feather="target" class="align-self-center icon-xs me-1"></i>
                                            Target $90,000
                                            <span class="mx-2">/</span>
                                            <i data-feather="dollar-sign" class="align-self-center icon-xs me-1"></i>
                                            Last Month $68,550
                                        </h6>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                            <div class="card-body my-1">
                                <div class="row">
                                    <div class="col">
                                        <div class="media">
                                            <i data-feather="shopping-cart" class="align-self-center icon-md text-secondary me-2"></i>
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0 font-24">128</h6>
                                                <p class="text-muted mb-0">Today's New Order</p>
                                            </div><!--end media body-->
                                        </div>
                                    </div><!--end col-->
                                    <div class="col">
                                        <div class="media">
                                            <i data-feather="dollar-sign" class="align-self-center icon-md text-secondary me-2"></i>
                                            <div class="media-body align-self-center">
                                                <h6 class="m-0 font-24">$5,335</h6>
                                                <p class="text-muted mb-0">Today's Revenue</p>
                                            </div><!--end media body-->
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!-- end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Opportunities</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-sm btn-outline-light px-3">+ Add New</button>
                                    </div>
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body p-0">
                                <form class="row row-cols-lg-auto g-0 align-items-center p-3 mb-1 bg-light-alt">
                                    <div class="col-12 mt-0 me-1">
                                        <div class="input-group">
                                            <input type="search" class="form-control form-control-sm" id="inlineFormSearch" placeholder="Search">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12 mt-0 me-1">
                                        <label class="visually-hidden" for="status-select">Sort By</label>
                                        <select class="form-select form-select-sm" id="status-select">
                                            <option selected="">All</option>
                                            <option value="1">Hot</option>
                                            <option value="2">Cold</option>
                                            <option value="3">In Progress</option>
                                            <option value="4">Lost</option>
                                            <option value="5">Won</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class="col-12 mt-0">
                                        <button type="button" class="btn btn-soft-primary btn-sm">
                                            <i class="fas fa-search me-1"></i>search
                                        </button>
                                    </div><!--end col-->
                                </form><!--end form/row-->
                            </div><!--end card-body-->
                            <div class="card-body">
                                <ul class="list-group custom-list-group mb-n1">
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-1.png') }}" alt="" height="36">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Starbucks coffee</h6>
                                                <ul class="list-inline mb-0 text-muted">
                                                    <li class="list-inline-item me-2"><span><i class="fas fa-map-marker-alt me-2 text-secondary font-14"></i></span>Seattle, Washington</li>
                                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-2 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                                </ul>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                        <div class="align-self-center">
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-2.png') }}" alt="" height="36">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Mac Donald</h6>
                                                <ul class="list-inline mb-0 text-muted">
                                                    <li class="list-inline-item me-2"><span><i class="fas fa-map-marker-alt me-2 text-secondary font-14"></i></span>Seattle, Washington</li>
                                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-2 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                                </ul>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                        <div class="align-self-center">
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-3.png') }}" alt="" height="36">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Life Good</h6>
                                                <ul class="list-inline mb-0 text-muted">
                                                    <li class="list-inline-item me-2"><span><i class="fas fa-map-marker-alt me-2 text-secondary font-14"></i></span>Seattle, Washington</li>
                                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-2 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                                </ul>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                        <div class="align-self-center">
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center d-flex justify-content-between">
                                        <div class="media">
                                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{ URL::asset('assets/images/widgets/opp-1.png') }}" alt="" height="36">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Starbucks coffee</h6>
                                                <ul class="list-inline mb-0 text-muted">
                                                    <li class="list-inline-item me-2"><span><i class="fas fa-map-marker-alt me-2 text-secondary font-14"></i></span>Seattle, Washington</li>
                                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-2 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                                </ul>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                        <div class="align-self-center">
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                        </div><!--end  card-->
                    </div><!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Most Commonly Asked Questions</h4>
                                <p class="text-muted mb-0">Anim pariatur cliche reprehenderit,
                                    enim eiusmod high life accusamus terry richardson ad squid.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="accordion" id="accordionExample-faq">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mt-0" id="headingOne">
                                            <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is Dastone?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample-faq">
                                            <div class="accordion-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                            3 wolf moon officia aute, non cupidatat life accusamus terry richardson ad squid.
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mt-0" id="headingTwo">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How buy Dastone on coin?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample-faq">
                                            <div class="accordion-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high
                                                life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                3 wolf moon officia aute, non cupidatat life accusamus terry richardson ad squid.
                                                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header mt-0" id="headingThree">
                                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What cryptocurrency can i use to buy Dastone?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample-faq">
                                            <div class="accordion-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                            3 wolf moon officia aute, non cupidatat life accusamus terry richardson ad squid.
                                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end accordion-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Traffic Sources</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Direct<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Email</a>
                                                <a class="dropdown-item" href="#">Referral</a>
                                                <a class="dropdown-item" href="#">Organic</a>
                                                <a class="dropdown-item" href="#">Campaign</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="my-5">
                                    <div id="ana_1" class="apex-charts d-block w-90 mx-auto"></div>
                                    <hr class="hr-dashed w-25 mt-0">
                                </div>
                                <div class="text-center">
                                    <h4>76% Direct Visitors</h4>
                                    <p class="text-muted mt-2">This is a simple hero unit, a simple jumbotron-style component</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary px-3 mt-2">More details</button>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Customer Satisfaction</h4>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="happiness-score">
                                    <h2 class="mb-0">94.5%</h2>
                                    <p class="mb-0 text-uppercase">Happiness</p>
                                </div>
                                <div id="ana_device" class="apex-charts mb-2"></div>
                                <ul class="list-inline mb-0 text-center">
                                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold-alt">
                                        <i class="far fa-grin-stars text-primary me-2"></i>Excellent
                                    </li>
                                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold-alt">
                                        <i class="far fa-smile me-2 mb-lg-0" style="color: #fdb5c8;"></i>Very Good
                                    </li>
                                    <li class="list-inline-item mb-2 fw-semibold-alt">
                                        <i class="far fa-meh text-info me-2"></i>Good
                                    </li>
                                    <li class="list-inline-item fw-semibold-alt">
                                        <i class="far fa-frown  me-2" style="color: #c693ff;"></i>Fair
                                    </li>
                                </ul>
                                <hr class="hr-dashed">
                                <div class="media">
                                    <div class="avatar-box thumb-sm align-self-center me-2">
                                        <span class="avatar-title bg-soft-primary rounded-circle">JR</span>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available...
                                            <a href="#" class="text-primary">Read more</a>
                                        </p>
                                    </div><!--end media-body-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Tasks Performance</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="more-horizontal" class="align-self-center text-muted icon-xs"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Purchases</a>
                                                <a class="dropdown-item" href="#">Emails</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="text-center">
                                    <div id="task_status" class="apex-charts"></div>
                                    <h6 class="text-primary bg-soft-primary p-3 mb-0">
                                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                        01 January 2020 to 31 June 2020
                                    </h6>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Sessions Device</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="more-horizontal" class="align-self-center text-muted icon-xs"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Purchases</a>
                                                <a class="dropdown-item" href="#">Emails</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="text-center">
                                    <div id="ana_device2" class="apex-charts"></div>
                                    <h6 class="text-primary bg-soft-primary p-3 mb-0 mt-3">
                                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                        01 January 2020 to 31 June 2020
                                    </h6>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.widgets.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection



