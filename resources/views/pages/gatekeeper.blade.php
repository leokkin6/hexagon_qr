@extends('main')

@section('has_class','has class')
@section('title','| Gatekeeper')
@section('content_header','Gatekeeper')
@section('content_subheader','Monitoring and Entry Surveillance ')
@section('breadcrumb','Gatekeeper')

@section('content')
    <div class="card">
        <div class="card-block">
            <!-- Tab panes -->
            <div class="row">
                <div class="col-xs-9 col-md-6">
                    <!-- Header LSection -->
                    <h4 class="sub-title"><i class="icofont icofont-ui-user"></i></i> Employee Information</h4>
                    <!-- Information Forms -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID Number:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="00150-1702" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Leoner Nikko F. Bautista" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Department:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Information and Communication Technology" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Position:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Software Support Specialist" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-bg-success" placeholder="Active" >
                        </div>
                    </div>
                    <!-- End of Information Forms -->
                </div>

                <div class="col-xs-3 col-md-6">
                    <!-- Header RSection -->
                    <h4 class="sub-title"><i class="icofont icofont-id-card"></i> Identification Photo</h4>
                <!-- Profile Card -->
                    <div class="col">
                        <div class="card rounded-card user-card">
                            <div class="card-block">
                                <div class="img-hover">
                                    <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round2.jpg')}}" alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                          <a href="{{ URL::asset('assets/images/user-card/img-round2.jpg') }}" class="btn btn-sm btn-primary" data-popup="lightbox"><i class="icofont icofont-plus"></i></a>
                                          <a href="" class="btn btn-sm btn-primary"><i class="icofont icofont-link-alt"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h5>Entry History</h5>
            <div class="card-header-right">
                <i class="icofont icofont-rounded-down"></i>
                <i class="icofont icofont-refresh"></i>
                <i class="icofont icofont-close-circled"></i>
            </div>
        </div>

        <div class="card-block">
            <div class="row users-card">
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round1.jpg') }}" alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                            <a href="assets/images/user-card/img-round1.jpg" class="btn btn-sm btn-primary" data-popup="lightbox">
                                                <i class="icofont icofont-plus"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="icofont icofont-link-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="user-content">
                                    <h4 class="">Michael Fariolen</h4>
                                    <h5 class="">Business Analyst</h5>
                                </div>
                                <ul class="icons-list mt-15">
                                    <li>
                                        <a href="#" data-popup="tooltip" data-original-title="Google Drive">
                                            <i class="icon-google-drive"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-popup="tooltip" data-original-title="Twitter">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-popup="tooltip" data-original-title="Github">
                                            <i class="icon-github"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round2.jpg') }} " alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                            <a href="assets/images/user-card/img-round2.jpg" class="btn btn-sm btn-primary" data-popup="lightbox">
                                                <i class="icofont icofont-plus"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="icofont icofont-link-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="user-content">
                                    <h4 class="">Kim Domingo</h4>
                                    <h5 class="">System Administrator</h5>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round3.jpg') }}" alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                            <a href="assets/images/user-card/img-round3.jpg" class="btn btn-sm btn-primary" data-popup="lightbox">
                                                <i class="icofont icofont-plus"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="icofont icofont-link-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                            </div>
                            <div class="user-content">
                                <h4 class="">Nikko Bautista</h4>
                                <h5 class="">Software Support Specialist</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" src="{{ URL::asset('assets/images/user-card/img-round4.jpg') }}" alt="round-img">
                                    <div class="img-overlay">
                                        <span>
                                            <a href="assets/images/user-card/img-round4.jpg" class="btn btn-sm btn-primary" data-popup="lightbox">
                                                <i class="icofont icofont-plus"></i>
                                            </a>
                                            <a href="" class="btn btn-sm btn-primary">
                                                <i class="icofont icofont-link-alt"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="user-content">
                                    <h4 class="">Allan Valenciano</h4>
                                    <h5 class="">Software Support Specialist</h5>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

@endsection
