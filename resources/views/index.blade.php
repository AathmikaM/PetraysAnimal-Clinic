@extends('layouts.layouts')


@section('title', 'PETRAYS')



@section('style')
    <style>

    /**
    * ALL the UI design credit goes to:
    * https://www.sketchappsources.com/free-source/2676-calendar-template-sketch-freebie-resource.html
    */


    /* WRAPPER */

    .wrapper {
    display: grid;
    grid-template-rows: 70px 1fr 70px;
    grid-template-columns: 1fr;
    grid-template-areas: "sidebar"
    "content";
    width: 100vw; /* unnecessary, but let's keep things consistent */
    height: 100vh;
    }

    @media screen and (min-width: 850px) {
    .wrapper {
    grid-template-columns: 200px 5fr;
    grid-template-rows: 1fr;
    grid-template-areas: "sidebar content";
    }
    }



    /* SIDEBAR */

    main {
    grid-area: content;
    padding: 48px;
    }

    sidebar {
    grid-area: sidebar;
    display: grid;
    grid-template-columns: 1fr 3fr 1fr;
    grid-template-rows: 3fr 1fr;
    grid-template-areas: "logo menu avatar"
    "copyright menu avatar";
    }
    .logo {
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .copyright {
    text-align: center;
    }
    .avatar {
    grid-area: avatar;
    display: flex;
    align-items: center;
    flex-direction: row-reverse;
    }
    .avatar__name {
    flex: 1;
    text-align: right;
    margin-right: 1em;
    }
    .avatar__img > img {
    display: block;
    }

    .copyright {
    grid-area: copyright;
    }
    .menu {
    grid-area: menu;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    }
    .logo {
    grid-area: logo;
    }
    .menu__text {
    display: none;
    }

    @media screen and (min-width: 850px) {
    sidebar {
    grid-template-areas: "logo"
    "avatar"
    "menu"
    "copyright";
    grid-template-columns: 1fr;
    grid-template-rows: 50px auto 1fr 50px;
    }

    .menu {
    flex-direction: column;
    align-items: normal;
    justify-content: flex-start;
    }
    .menu__text {
    display: inline-block;
    }
    .avatar {
    flex-direction: column;
    }
    .avatar__name {
    margin: 1em 0;
    }
    .avatar__img > img {
    border-radius: 50%;
    }
    }




    /* MAIN */

    .toolbar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
    }
    .calendar{}

    .calendar__week,
    .calendar__header {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    }
    .calendar__week {
    grid-auto-rows: 100px;
    text-align: right;
    }

    .calendar__header {
    grid-auto-rows: 50px;
    align-items: center;
    text-align: center;
    }

    .calendar__day {
    padding: 16px;
    }




    /* COSMETIC STYLING */

    :root {
    --red: #ED5454;
    }

    body {
    font-family: Montserrat;
    font-weight: 100;
    color: #A8B2B9;
    }

    sidebar {
    background-color: white;
    box-shadow: 5px 0px 20px rgba(0, 0, 0, 0.2);
    }

    main {
    background-color: #FCFBFC;
    }

    .avatar__name {
    font-size: 0.8rem;
    }

    .menu__item {
    text-transform: uppercase;
    font-size: 0.7rem;
    font-weight: 500;
    padding: 16px 16px 16px 14px;
    border-left: 4px solid transparent;
    color: inherit;
    text-decoration: none;
    transition: color ease 0.3s;
    }

    .menu__item--active .menu__icon {
    color: var(--red);
    }
    .menu__item--active .menu__text {
    color: black;
    }

    .menu__item:hover {
    color: black;
    }


    .menu__icon {
    font-size: 1.3rem;
    }

    @media screen and (min-width: 850px) {
    .menu__icon {
    font-size: 0.9rem;
    padding-right: 16px;
    }
    .menu__item--active {
    border-left: 4px solid var(--red);
    box-shadow: inset 10px 0px 17px -13px var(--red);
    }
    }

    .copyright {
    font-size: 0.7rem;
    font-weight: 400;
    }

    .calendar {
    background-color: white;
    border: 1px solid #e1e1e1;
    }

    .calendar__header > div {
    text-transform: uppercase;
    font-size: 0.8em;
    font-weight: bold;
    }

    .calendar__day {
    border-right: 1px solid #e1e1e1;
    border-top: 1px solid #e1e1e1;
    }

    .calendar__day:last-child {
    border-right: 0;
    }

    .toggle{
    display: grid;
    grid-template-columns: 1fr 1fr;

    text-align: center;
    font-size: 0.9em;
    }
    .toggle__option{
    padding: 16px;
    border: 1px solid #e1e1e1;
    border-radius: 8px;
    text-transform: capitalize;
    cursor: pointer;
    }
    .toggle__option:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    }
    .toggle__option:last-child {
    border-left: 0;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    }
    .toggle__option--selected{
    border-color: white;
    background-color: white;
    color: var(--red);
    font-weight: 500;
    box-shadow: 1px 2px 30px -5px var(--red);
    }

</style>

@endsection



@section('content')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->




            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            @endsection
@section('scripts')

    @endsection

