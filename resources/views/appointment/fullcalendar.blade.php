@extends('layouts.layouts') {{--app--}}

@section('style')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('content')

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <h3>Calendar</h3>
    {{--@foreach($tasks as $task)
        {{$task}}
    @endforeach--}}
    <div id='calendar' style="width: 80%;margin: 20px;"></div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                events : [
                        @foreach($tasks as $task)
                    {
                        title : '{{ $task->petOwnerName }}',
                        start : '{{ $task->dateAndTime }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>
@endsection

