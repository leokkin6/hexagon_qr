@extends('main')

@section('content')

<div class="card">
    <div class="card-block">
        <!-- Tab panes -->
        <div class="row">

        	<div class="col-xs-9 col-md-7">
            <!-- Header LSection -->
				<h4 class="sub-title"><i class="icofont icofont-ui-user"></i></i> General Information</h4>
                <!-- Information Forms -->
					<div class="form-group row">
                        {{-- {!! Form::open(['route' => 'user_registration.store']) !!}
                            {{ Form::label('FirstName', 'Title:') }}
                            {{ Form::text('FirstName', null, array('class' => 'form-control')) }}
                        {!! Form::close() !!} --}}
                        
                        {!! Form::open(array('url' => 'foo/bar')) !!}
                            {{ Form::label('FirstName', 'Title:') }}
                        {!! Form::close() !!}

                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Middle Name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                	<div class="form-group row">
	                    <div class="col">
	                        <input type="text" class="form-control" placeholder="Department">
	                    </div>
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control" placeholder="Unit/Division">
	                    </div>
	                    <div class="col">
	                        <input type="text" class="form-control" placeholder="Position">
	                    </div>
                	</div>
                    
                	<h4 class="sub-title"><i class="icofont icofont-lock"></i> Authentication</h4>
                    <div class="form-group row">
                        <label class="col col-form-label">User Type :</label>
                        <div class="col-sm-4">
                            <select name="select" class="form-control">
                                <option value="opt1">Select User Type</option>
                                <option value="opt2">User</option>
                                <option value="opt3">Gatekeeper</option>
                                <option value="opt4">Administrator</option>
                                <option value="opt5">Web Master</option>
                            </select>
                        </div>

                        <label class="col col-form-label">User Role :</label>
                        <div class="col-sm-4">
                            <select name="select" class="form-control">
                                <option value="opt1">Select User Role</option>
                                <option value="opt2">Employee</option>
                                <option value="opt3">Manager</option>
                                <option value="opt4">CEO</option>
                            </select>
                        </div>
                    </div>

                	<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username :</label>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Input Username">
                        </div>
                    </div>
                    
                	<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password :</label>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Input Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">E-mail :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Input Email">
                        </div>
                    </div>
                <!-- End of Information Forms -->
        	</div>

            <!-- Header RSection -->
    		<div class="col-xs-3 col-md-5">
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
                                <div class="user-content">
                                    <h4 class="">Howard Hatfield</h4>
                                    <h5 class="">UX/UI designer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
    		</div>

        </div>
    </div>
</div>

@endsection