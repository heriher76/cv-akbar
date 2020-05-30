@extends('layouts.admin')

@section('contents')
	<div class="row clearfix">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        Edit Address
                    </h1>
                </div>
                <div class="body">
                    <!-- <form action="{{ url('admin/my-profile') }}" id="myForm" class="willSubmit" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('put') }} -->
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="line_one" class="form-control" form="willSubmit" value="{{ $address->line_one }}">
                                <label class="form-label">Baris Pertama</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="line_two" class="form-control" form="willSubmit" value="{{ $address->line_two }}">
                                <label class="form-label">Baris Kedua</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="line_three" class="form-control" form="willSubmit" value="{{ $address->line_three }}">
                                <label class="form-label">Baris Ketiga</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="line_four" class="form-control" form="willSubmit" value="{{ $address->line_four }}">
                                <label class="form-label">Baris Keempat</label>
                            </div>
                        </div>

                    <!-- </form> -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
              		<form action="{{ url('admin/address') }}" id="willSubmit" method="POST" enctype="multipart/form-data">
              			{{ csrf_field() }}
                    	{{ method_field('put') }}
                    
	                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
              		</form>
                </div>
            </div>
        </div>
    </div>
@endsection