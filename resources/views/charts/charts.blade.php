@extends('layouts.layouts')


@section('title', 'Client List')


@section('style')

<div>
    <canvas id="myChart" style="background-color: #fff"></canvas>
</div>

	<script type="text/javascript">
        var ctx = document.getElementById("myChart");
        var lab =  <?php echo json_encode($memarray); ?>;
        var dt = <?php echo json_encode($countarray); ?>;

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: lab,
                datasets: [{
                    label: 'Number of Tasks',
                    data: dt,
                    backgroundColor: [
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


@section('content')


@endsection
