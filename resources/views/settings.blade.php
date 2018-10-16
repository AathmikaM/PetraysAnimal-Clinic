@extends('layouts.layouts')


@section('title', 'Settings')



@section('style')

<style type="text/css">

    .material-switch > input[type="checkbox"] {
    display: none;
}

.material-switch > label {
    cursor: pointer;
    height: 0px;
    position: relative;
    width: 40px;
}

.material-switch > label::before {
    background: rgb(0, 0, 0);
    box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    content: '';
    height: 16px;
    margin-top: -8px;
    position:absolute;
    opacity: 0.3;
    transition: all 0.4s ease-in-out;
    width: 40px;
}
.material-switch > label::after {
    background: rgb(255, 255, 255);
    border-radius: 16px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    content: '';
    height: 24px;
    left: -4px;
    margin-top: -8px;
    position: absolute;
    top: -4px;
    transition: all 0.3s ease-in-out;
    width: 24px;
}
.material-switch > input[type="checkbox"]:checked + label::before {
    background: inherit;
    opacity: 0.5;
}
.material-switch > input[type="checkbox"]:checked + label::after {
    background: inherit;
    left: 20px;
}

</style>


@endsection



@section('content')
 


<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Settings</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
 
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row" style ="background: #fff; padding: 15px;">
                   <div class="col-md-6">
                    <div class="card card-body">
                            <h3 class="box-title mb-0">Change Password</h3>

                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Old Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">New Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                                        </div>

                                        <button type="submit" class="btn btn-success waves-effect waves-light mr-2">Submit</button>
                                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>

                    <div class="col-md-6">
                          <div class="row">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <h3 class="box-title mb-0">Manage Users</h3>

                <!-- List group -->
                <ul class="list-group">

                    <li class="list-group-item">
                        User 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox" checked="checked" />
                            <label for="someSwitchOptionPrimary" class="label-info"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        User 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary1" name="someSwitchOption001" type="checkbox" checked="checked"/>
                            <label for="someSwitchOptionPrimary1" class="label-info"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        User 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary2" name="someSwitchOption001" type="checkbox" checked="checked"/>
                            <label for="someSwitchOptionPrimary2" class="label-info"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        User 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary3" name="someSwitchOption001" type="checkbox" checked="checked"/>
                            <label for="someSwitchOptionPrimary3" class="label-info"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        User 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary4" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionPrimary4" class="label-info"></label>
                        </div>
                    </li>

                </ul>

        </div>
    </div>
                    </div>



                </div>
                <!-- Row -->
                <!-- Row -->
  
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>



            @endsection


            @section('scripts')


            @endsection