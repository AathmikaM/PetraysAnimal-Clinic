

@section('content')

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <h3 class="text-center"><strong>Calendar</strong></h3>
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

