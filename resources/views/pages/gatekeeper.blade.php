@extends('main')

@section('has_class','has class')
@section('title','| GATEKEEPER')
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
                    <div class="row">
                        <div class="form-group col">
                            <label class="col-form-label">Unit:</label>
                        </div>
                        <div class="form-group col-sm-9">
                            <div class="form-control rowalert alert-secondary" role="alert" id="unit"> Fetching data... </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="col-form-label">ID Number:</label>
                        </div>
                        <div class="form-group col-sm-9">
                            <div class="form-control rowalert alert-secondary" role="alert" id="idnumber"> Fetching data...  </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="col-form-label">Full Name:</label>
                        </div>
                        <div class="form-group col-sm-9">
                            <div class="form-control rowalert alert-secondary" role="alert" id="fullname"> Fetching data...  </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="col-form-label">Position:</label>
                        </div>
                        <div class="form-group col-sm-9">
                            <div class="form-control rowalert alert-secondary" role="alert" id="position"> Fetching data... </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="col-form-label">Department:</label>
                        </div>
                        <div class="form-group col-sm-9">
                            <div class="form-control rowalert alert-secondary" role="alert" id="department"> Fetching data...  </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="col-form-label">Last Entry:</label>
                        </div>
                        <div class="form-group col-sm-9">
                            <div class="form-control rowalert alert-info" role="alert" id="lastentry"> Fetching data...  </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="col-form-label">Status:</label>
                        </div>
                        <div class="form-group col-sm-9">
                            <div class="form-control rowalert alert-success" role="alert" id="status"> Fetching data...  </div>
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
                                    <img class="img-fluid img-circle" id="centerImage" alt="round-img">
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
                                <img class="img-fluid img-circle" id="cardimage1" alt="round-img">
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
                                    <h4 class="" id="card2Name">Fetching Data... </h4>
                                    <h5 class="" id="card2Position">Fetching Data... </h5>
                                    <h6 class="" id="card2Time">Fetching Data... </h6>
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
                                <img class="img-fluid img-circle" id="cardimage2" " alt="round-img">
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
                                    <h4 class="" id="card3Name">Fetching Data... </h4>
                                    <h5 class="" id="card3Position">Fetching Data... </h5>
                                    <h6 class="" id="card3Time">Fetching Data... </h6>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" id="cardimage3" " alt="round-img">
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
                                <h4 class="" id="card4Name">Fetching Data... </h4>
                                <h5 class="" id="card4Position">Fetching Data... </h5>
                                <h6 class="" id="card4Time">Fetching Data... </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Card -->
                <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-circle" id="cardimage4" alt="round-img">
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
                                    <h4 class="" id="card5Name">Fetching Data... </h4>
                                    <h5 class="" id="card5Position">Fetching Data... </h5>
                                    <h6 class="" id="card5Time">Fetching Data... </h6>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('custom_page_script')

<script type="text/javascript">
    $(document).ready(function (){
        function updateGatekeeper(data){
            $.ajax({
            url: '/monitoring/gatekeeper/fetchData',
            success: function(data){
                var img1 = data.imageFileName1;
                var img2 = data.imageFileName2;
                var img3 = data.imageFileName3;
                var img4 = data.imageFileName4;
                var img5 = data.imageFileName5;
                var location = '/uploads/';
                $('#unit').html(data.unit1);
                $('#idnumber').html(data.empid1);
                $('#fullname').html(data.fullname1);
                $('#position').html(data.position1);
                $('#department').html(data.department1);
                $('#lastentry').html(data.lastentry1);
                $('#status').html(data.status1);
                document.getElementById('centerImage').src = location+img1;

                $('#card2Name').html(data.fullname2);
                $('#card2Position').html(data.position2);
                $('#card2Time').html(data.lastentry2);
                document.getElementById('cardimage1').src = location+img2;

                $('#card3Name').html(data.fullname3);
                $('#card3Position').html(data.position3);
                $('#card3Time').html(data.lastentry3);
                document.getElementById('cardimage2').src = location+img3;

                $('#card4Name').html(data.fullname4);
                $('#card4Position').html(data.position4);
                $('#card4Time').html(data.lastentry4);
                document.getElementById('cardimage3').src = location+img4;

                $('#card5Name').html(data.fullname5);
                $('#card5Position').html(data.position5);
                $('#card5Time').html(data.lastentry5);
                document.getElementById('cardimage4').src = location+img5;

            }
            });


            {{-- $('#unit').load('{{action('GatekeeperController@fetchUnit')}}')
            $('#idnumber').load('{{action('GatekeeperController@fetchEmpId')}}') --}}
        }

        setInterval(updateGatekeeper, 1000); 
    });
</script>

@endsection
