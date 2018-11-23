@extends('layouts.layouts')
@section('title', 'Appointments')
@section('style')
    <style>
        .row-striped:nth-of-type(odd){
            background-color: #efefef;
            border-left: 4px #000000 solid;
        }
        .row-striped:nth-of-type(even){
            background-color: #ffffff;
            border-left: 4px #efefef solid;
        }
        .row-striped {
            padding: 15px 0;
        }
    </style>
@endsection
@section('content')


    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Appintments</li>
            </ol>

            <div class="container" style="width: 100%">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="register"> Appointments</h2>
                        @if($appointments->isEmpty())
                            <p style="color: darkgray"> - There is no Appintments - </p>
                        @endif
                    </div>
                </div>
                <div class="fb-profile">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($appointments as $appointments1)

                                <div class="col-sm-6 col-md-4 col-lg-4 mt-4">
                                    <div class="card">
                                        <div class="card-block" style="height: 120px;">
                                            <div class="card-text" align="left" style="height: 90px;">
                                                {{ $appointments1->date }}<br><br>
                                                {{ $appointments1->user }}
                                            </div>
                                        </div>
                                        <div class="card-action small" style="height: 50px;">
                                            @if($appointments1->status=="pending")
                                                <a href="{{ url('/Client/'.$appointments1->id) }}" type="button" class="button">Accept</a>
                                                <a href="{{ url('/Client/cancel/'.$appointments1->id) }}" type="button" class="button">Cancel</a>
                                            @endif
                                            @if($appointments1->status=="accepted")
                                                <span style="padding: 10px;background-color: cornflowerblue;color: white;margin:15px;">Accepted</span>
                                            @endif
                                            @if($appointments1->status=="cancelled")
                                                <span style="padding: 10px;background-color: orangered;color: white;margin:15px;">Cancelled</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
        padding: 2px 16px;
    }
    .button {
        margin-left: 15px;
        margin-bottom: 15px;
        display: inline-block;
        padding: 5px 6px;
        font-size: 15px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: white;
        background-color: #4CAF50;
    }

    .button:hover {background-color: #3e8e41}

    .button:active {
        background-color: #3e8e41;
    }
</style>