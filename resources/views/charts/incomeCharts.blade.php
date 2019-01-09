@extends('layouts.layouts')


@section('title', 'Total income')


@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


@endsection

@section('content')

<form method="post" action="{{ route('getData')}}">
	Year:<input type="number" name="year">
	<button type="submit">submit</button>
	{{ csrf_field()}}
</form>
<div class="content">
    <div style="position: relative; height:10%; width:100%; border: solid 5px">
        <canvas id="abce"></canvas>
    </div>
    <div class="footer">
        <hr>
        <div class="stats">
            <i class="ti-reload"></i> Updated 3 minutes ago
        </div>
    </div>
</div>

<script type="text/javascript">
var transactionPerMonth = document.getElementById("abce"); // canvas id
var data = <?php echo json_encode($totalIncome);?>;
var transactionPerMonthChart = new Chart(transactionPerMonth, { // generate graph
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June","July","August","September","October","November","December"],
        datasets: [{
            label: 'Total amount in USD',
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


