@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>

                <div class="panel-body">
                    <div class="panel panel-default">
                        <label class="col-md-4 control-label">Name:         </label>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </div>
                    <div class="panel panel-default">
                        <label class="col-md-4 control-label">Gender:       </label>{{ Auth::user()->gender }}
                    </div>
                    <div class="panel panel-default">
                        <label class="col-md-4 control-label">Profession:   </label>{{ Auth::user()->profession }}
                    </div>
                    <div class="panel panel-default">
                        <label class="col-md-4 control-label">E-mail:       </label>{{ Auth::user()->email }}
                    </div>
                    <div class="panel panel-default">
                        <label class="col-md-4 control-label">Phone Number: </label>{{ Auth::user()->phone }}
                    </div>
                </div>

                <div class="panel-heading">More Info</div>
            </div>
        </div>
    </div>
</div>
@endsection