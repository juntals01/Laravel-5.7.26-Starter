@extends('layouts.app')

{{-- Define Page Title  --}}
@section('title', 'Show Application')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    
                    <input type="text" class="datepicker" />

                    <div class="form-group">
                        <div class='input-group date' id='datetimedpicker1'>
                            <input type='text' class="form-control" id="datetimepicker1"/>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
