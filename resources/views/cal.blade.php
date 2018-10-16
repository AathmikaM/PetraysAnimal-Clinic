@extends('layouts.layouts')


@section('title', 'HRM')



@section('style')



    <link href="https://wrappixel.com/demos/admin-templates/monster-admin/assets/plugins/calendar/dist/fullcalendar.css" id="theme" rel="stylesheet">


@endsection



@section('content')







<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">Icon</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Icon</li>
            </ol>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle btn-sm float-right ml-2"><i class="ti-settings text-white"></i></button>
            <button class="btn float-right hidden-sm-down btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
            <div class="dropdown float-right mr-2 hidden-sm-down">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2017 </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2017</a> <a class="dropdown-item" href="#">March 2017</a> <a class="dropdown-item" href="#">April 2017</a> </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Drag and Drop Your Event</h4>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div id="calendar-events" class="mt-3">
                                <div class="calendar-events ui-draggable ui-draggable-handle" data-class="bg-info" style="position: relative;"><i class="fa fa-circle mb-3 text-info"></i> My Event One</div>
                                <div class="calendar-events ui-draggable ui-draggable-handle" data-class="bg-success" style="position: relative;"><i class="fa fa-circle mb-3 text-success"></i> My Event Two</div>
                                <div class="calendar-events ui-draggable ui-draggable-handle" data-class="bg-danger" style="position: relative;"><i class="fa fa-circle mb-3 text-danger"></i> My Event Three</div>
                                <div class="calendar-events ui-draggable ui-draggable-handle" data-class="bg-warning" style="position: relative;"><i class="fa fa-circle mb-3 text-warning"></i> My Event Four</div>
                            </div>
                            <!-- checkbox -->
                            <div class="checkbox mb-3">
                                <input id="drop-remove" type="checkbox">
                                <label for="drop-remove">
                                    Remove after drop
                                </label>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#add-new-event" class="btn btn-danger btn-block waves-effect waves-light">
                                <i class="ti-plus"></i> Add New Event
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>October 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 505px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 84px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-09-30"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-01"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-02"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-03"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-04"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-05"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-09-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-10-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-10-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-10-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-10-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-10-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-purple fc-draggable"><div class="fc-content"><span class="fc-time">2:43a</span> <span class="fc-title">your meeting with john</span></div></a></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-warning fc-draggable"><div class="fc-content"><span class="fc-time">6:30a</span> <span class="fc-title">your meeting with john</span></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 84px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-07"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-10-08"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-10-09"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-10-10"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-10-11"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-10-12"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-10-13"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-10-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-10-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-10-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-10-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-10-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-10-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-10-13"><span class="fc-day-number">13</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable"><div class="fc-content"><span class="fc-time">8:57a</span> <span class="fc-title">your meeting with john</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 84px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-10-14"></td><td class="fc-day fc-widget-content fc-mon fc-today fc-state-highlight" data-date="2018-10-15"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-16"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-17"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-18"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-19"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-10-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-mon fc-today fc-state-highlight" data-date="2018-10-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-tue fc-future" data-date="2018-10-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-10-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-thu fc-future" data-date="2018-10-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-fri fc-future" data-date="2018-10-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-sat fc-future" data-date="2018-10-20"><span class="fc-day-number">20</span></td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"><div class="fc-content"><span class="fc-time">11:47p</span> <span class="fc-title">This is today check date</span></div></a></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable"><div class="fc-content"><span class="fc-time">12:27a</span> <span class="fc-title">Like it?</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 84px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-21"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-22"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-23"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-24"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2018-10-25"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2018-10-26"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2018-10-27"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2018-10-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-mon fc-future" data-date="2018-10-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-tue fc-future" data-date="2018-10-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-10-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-thu fc-future" data-date="2018-10-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-fri fc-future" data-date="2018-10-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-sat fc-future" data-date="2018-10-27"><span class="fc-day-number">27</span></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable"><div class="fc-content"><span class="fc-time">8:33p</span> <span class="fc-title">Released Ample Admin!</span></div></a></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-info fc-draggable"><div class="fc-content"><span class="fc-time">7:20p</span> <span class="fc-title">This is your birthday</span></div></a></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"><div class="fc-content"><span class="fc-time">12:53a</span> <span class="fc-title">Hanns birthday</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 84px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2018-10-28"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2018-10-29"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2018-10-30"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2018-10-31"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-11-01"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-11-02"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-11-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2018-10-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-mon fc-future" data-date="2018-10-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-tue fc-future" data-date="2018-10-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-wed fc-future" data-date="2018-10-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2018-11-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-11-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-11-03"><span class="fc-day-number">3</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 85px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2018-11-04"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2018-11-05"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2018-11-06"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2018-11-07"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-11-08"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-11-09"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-11-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2018-11-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2018-11-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2018-11-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2018-11-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2018-11-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-11-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-11-10"><span class="fc-day-number">10</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN MODAL -->
    <div class="modal none-border" id="my-event">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add Event</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Category -->
    <div class="modal fade none-border" id="add-new-event" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Add</strong> a category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Category Name</label>
                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Choose Category Color</label>
                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                    <option value="success">Success</option>
                                    <option value="danger">Danger</option>
                                    <option value="info">Info</option>
                                    <option value="primary">Primary</option>
                                    <option value="warning">Warning</option>
                                    <option value="inverse">Inverse</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="slimscrollright" style="overflow: hidden; width: auto; height: 100%;">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="mt-3">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block mt-4"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="mt-3 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>


@endsection