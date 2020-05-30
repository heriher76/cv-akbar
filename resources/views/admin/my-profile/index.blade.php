@extends('layouts.admin')

@section('contents')
	<div class="row clearfix">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        Edit My Profile
                    </h1>
                </div>
                <div class="body">
                    <!-- <form action="{{ url('admin/my-profile') }}" id="myForm" class="willSubmit" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }} -->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="study" class="form-control" form="willSubmit" value="{{ $myBio->study }}">
                                <label class="form-label">Study</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="hobby" class="form-control" form="willSubmit" value="{{ $myBio->hobby }}">
                                <label class="form-label">Hobby</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Photo Profile</label>
                            @if(isset($myBio->photo_profile))
                                <br>
                                <img class="img-responsive" style="max-width: 30vw; max-height: 30vh;" src="{{ url('mybio/'.$myBio->photo_profile) }}">
                            @endif
                            <input type="file" name="photo_profile" class="form-control" form="willSubmit" value="">
                            <br />
                            <label>Photo Background</label>
                            @if(isset($myBio->photo_background))
                                <br>
                                <img class="img-responsive" style="max-width: 30vw; max-height: 30vh;" src="{{ url('mybio/'.$myBio->photo_background) }}">
                            @endif
                            <input type="file" name="photo_background" class="form-control" form="willSubmit" value="">
                        </div>

                    <!-- </form> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
              		<p>Sosmed = </p>
              		<form action="{{ url('admin/my-profile') }}" id="willSubmit" method="POST" enctype="multipart/form-data">
              			{{ csrf_field() }}
                    	{{ method_field('put') }}
	              		<div class="form-group form-float">	
	              			<div class="form-line">
	              				<input type="text" name="ig" class="form-control" value="{{ $myBio->ig }}">
	              				<label class="form-label">Instagram</label>
	              			</div>
	              		</div>
                    
                    <div class="form-group form-float"> 
                      <div class="form-line">
                        <input type="text" name="twitter" class="form-control" value="{{ $myBio->twitter }}">
                        <label class="form-label">Twitter</label>
                      </div>
                    </div>
                    
	                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
              		</form>
                </div>
            </div>
        </div>
    </div>
@endsection
