@extends('index')

@section('content')

    <!-- /. START PAGE CONTENT  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Diagram <small>Data Tangki D</small>
                    </h1>
                </div>
            </div>

            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tinggi Minyak
                        </div>
                        <div class="panel-body">
                            <div>
                                <canvas id="tinggiChart"><canvas>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Volume Minyak
                        </div>
                        <div class="panel-body">
                            <div>
                                <canvas id="volumeChart"><canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Suhu Minyak
                        </div>
                        <div class="panel-body">
                            <canvas id="suhuChart"><canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kapasitas Maksimum Tangki
                        </div>
                        <div class="panel-body">
                            Tinggi Maksimum : 200 M <br>
                            <h4><b>Kapasistas Maksimum : 550 M3</b></h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /. Footer  -->
            <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. END PAGE CONTENT  -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script type="text/javascript">

           var ctx = document.getElementById("tinggiChart").getContext('2d');
            var barChart = new Chart (ctx,{
                type: 'bar',
                data:{
                    labels: <?php echo json_encode( $tinggi->keys()); ?>,
                    datasets:[
                        {
                            label:'Tinggi Cairan',
                            data: <?php echo json_encode( $tinggi->values()); ?>,

                        }
                    ]
                },
                option:{
                    scales:{
                        yAxes:[{
                            ticks:{beginAtZero:true}
                        }]
                    }
                }
            });

    </script>
    <script type="text/javascript">

        var ctx = document.getElementById("volumeChart").getContext('2d');
        var barChart = new Chart (ctx,{
            type: 'bar',
            data:{
                labels: <?php echo json_encode( $volume->keys()); ?>,
                datasets:[
                    {
                        label:'Volume Cairan',
                        data: <?php echo json_encode( $volume->values()); ?>,

                    }
                ]
            },
            option:{
                scales:{
                    yAxes:[{
                        ticks:{beginAtZero:true}
                    }]
                }
            }
        });

    </script>
    <script type="text/javascript">

        var ctx = document.getElementById("suhuChart").getContext('2d');
        var barChart = new Chart (ctx,{
            type: 'bar',
            data:{
                labels: <?php echo json_encode( $suhu->keys()); ?>,
                datasets:[
                    {
                        label:'Suhu Cairan',
                        data: <?php echo json_encode( $suhu->values()); ?>,

                    }
                ]
            },
            option:{
                scales:{
                    yAxes:[{
                        ticks:{beginAtZero:true}
                    }]
                }
            }
        });

    </script>
    
@endsection

