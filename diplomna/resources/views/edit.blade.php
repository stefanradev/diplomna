@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit') }}">
                        {!! csrf_field() !!}
<!--Age-->

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="age" value="{{ old('age') }}">

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!--Hair Color-->
                        <div class="form-group{{ $errors->has('hair_color') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> Hair Color</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="hair_color" value="{{ old('hair_color') }}">

                                @if ($errors->has('hair_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hair_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!--Gender-->
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!--Hair Lenght-->
                        <div class="form-group{{ $errors->has('hair_lenght') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Hair Lenght</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="hair_lenght" value="{{ old('hair_lenght') }}">

                                @if ($errors->has('hair_lenght'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hair_lenght') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!--Eye Color-->
                        <div class="form-group{{ $errors->has('eye_color') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Eye color</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="eye_color" value="{{ old('eye_color') }}">

                                @if ($errors->has('eye_color'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('eye_color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!--Height -->
                        <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Height</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="height" value="{{ old('height') }}">

                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!--Weight-->
                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Weight</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="weight" value="{{ old('weight') }}">

                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection