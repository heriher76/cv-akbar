@extends('layouts.admin')

@section('contents')
	<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h1>
                        Create Skill
                    </h1>
                </div>
                <div class="body">
                    <form action="{{ url('admin/skill') }}" id="willSubmit" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="name" class="form-control" form="willSubmit" value="">
                                <label class="form-label">Name</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="color" class="form-control" form="willSubmit" value="">
                                <label class="form-label">Color</label>
                            </div>
                        </div>    

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="percentage" class="form-control" form="willSubmit" value="">
                                <label class="form-label">Percentage</label>
                            </div>
                        </div>    

                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create</button>
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection