@extends('layouts.layouts')


@section('title', 'Client Base')


@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


@endsection

@section('content')
<div style="padding-top: 20px; margin-left: 20px;">
<form method="post" action="{{ route('getData1')}}">
    Year:<input type="number" name="year">
    <button type="submit">submit</button>
    {{ csrf_field()}}
</form>
</div>
<div class="content">
    <div style="margin-top :20px; margin-left: 40px ; position: relative; height:8%; width:80%; border: solid 3px">
        <canvas id="client"></canvas>
    </div>
    <!-- <div class="footer">
        <hr>
        <div class="stats">
            <i class="ti-reload"></i> Updated 3 minutes ago
        </div>
    </div> -->
</div>

<script type="text/javascript">
var clientPerMonth = document.getElementById("client"); // canvas id
var data = <?php echo json_encode($totalclients);?>;
var clientsPerMonthChart = new Chart(clientPerMonth, { // generate graph
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June","July","August","September","October","November","December"],
        datasets: [{
            label: 'Total Clients',
            data: data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

 </script>
@endsection


