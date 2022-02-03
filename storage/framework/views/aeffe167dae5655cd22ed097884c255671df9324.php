

<?php $__env->startSection('content'); ?>

    <!-- /. START PAGE CONTENT  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Diagram <small>Overview Data Tangki</small>
                    </h1>
                </div>
            </div>

            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
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
                <div class="col-md-12 col-sm-12 col-xs-12">
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Suhu Minyak
                        </div>
                        <div class="panel-body">
                            <canvas id="suhuChart"><canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kapasitas Maksimum Tangki
                        </div>
                        <div class="panel-body">
                            <h4><b>Kapasistas Maksimum Tangki A : 350 M3</b></h4>
                            <h4><b>Kapasistas Maksimum Tangki B : 450 M3</b></h4>
                            <h4><b>Kapasistas Maksimum Tangki C : 600 M3</b></h4>
                            <h4><b>Kapasistas Maksimum Tangki D : 550 M3</b></h4>
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
                            label:'Tinggi Cairan A',
                            data: <?php echo json_encode( $tinggi->values()); ?>,
                            backgroundColor: 'red',

                        },
                        {
                            label:'Tinggi Cairan B',
                            data: <?php echo json_encode( $tinggi2->values()); ?>,
                            backgroundColor: 'blue',
                        },
                        {
                            label:'Tinggi Cairan C',
                            data: <?php echo json_encode( $tinggi3->values()); ?>,
                            backgroundColor: 'green',
                        },
                        {
                            label:'Tinggi Cairan D',
                            data: <?php echo json_encode( $tinggi4->values()); ?>,
                        },
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
                        label:'Tinggi Cairan A',
                        data: <?php echo json_encode( $volume->values()); ?>,
                        backgroundColor: 'red',

                    },
                    {
                        label:'Tinggi Cairan B',
                        data: <?php echo json_encode( $volume2->values()); ?>,
                        backgroundColor: 'blue',
                    },
                    {
                        label:'Tinggi Cairan C',
                        data: <?php echo json_encode( $volume3->values()); ?>,
                        backgroundColor: 'green',
                    },
                    {
                        label:'Tinggi Cairan D',
                        data: <?php echo json_encode( $volume4->values()); ?>,
                    },
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
                        label:'Tinggi Cairan A',
                        data: <?php echo json_encode( $suhu->values()); ?>,
                        backgroundColor: 'red',

                    },
                    {
                        label:'Tinggi Cairan B',
                        data: <?php echo json_encode( $suhu2->values()); ?>,
                        backgroundColor: 'blue',
                    },
                    {
                        label:'Tinggi Cairan C',
                        data: <?php echo json_encode( $suhu3->values()); ?>,
                        backgroundColor: 'green',
                    },
                    {
                        label:'Tinggi Cairan D',
                        data: <?php echo json_encode( $suhu4->values()); ?>,
                    },
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
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ujicobalaravel1\resources\views/overview/dashboard.blade.php ENDPATH**/ ?>