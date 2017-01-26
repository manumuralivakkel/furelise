<? $this->load->view('layout/header'); ?>
<div id="page-wrapper">
    <? $this->load->view('layout/statistics'); ?>

    <?
                    $months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
                    foreach ($months as $vals) {
                        
                    }
    ?>
    <div class="row">
        <!-- /.col-lg-8 -->
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o"></i> Enquiry Statistics
                    <span style="float: right">
                        <i class="fa  fa-square" style="color:rgba(168,0,0,0.5);"></i> Admission
                        <i class="fa  fa-square" style="color:rgba(0,91,0,0.5);"></i> Contact

                    </span>
                </div>

                <!-- /////////////////////BAR graph///////////////////////////////////// -->

                <div style="width: 100%">
                    <canvas id="canvas1" style="width: 100%; height:100%"></canvas>
                </div>




                <!-- /////////////////////////////BAR graph//////////////////////////////// -->

            </div>

        </div>

        <!--panel2-->
        <div class="col-lg-4">
            <div class="panel panel-default" style="width: 100%;">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o"></i> Contact Statistics
                    <span style="float: right">
                        <i class="fa  fa-square" style="color:rgba(168,0,0,0.5);"></i> Alumni
                        <i class="fa  fa-square" style="color:rgba(0,91,0,0.5);"></i> Career
                    </span>
                </div>
                <!-- /.panel-heading -->
                <!-- /////////////////////BAR graph///////////////////////////////////// -->

                <div style="width: 100%">
                    <canvas id="canvas2" style="width: 100%; height:100%"></canvas>
                </div>


                <script>
                    var randomScalingFactor = function () {
                        return Math.round(Math.random() * 100)
                    };

                    var barChartData1 = {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                fillColor: "rgba(168,0,0,0.5)",
                                strokeColor: "rgba(168,0,0,0.8)",
                                highlightFill: "rgba(168,0,0,0.75)",
                                highlightStroke: "rgba(168,0,0,1)",
                                data: [
                                    10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10

                                ]
                            },
                            {
                                fillColor: "rgba(0,91,0,0.5)",
                                strokeColor: "rgba(0,91,0,0.8)",
                                highlightFill: "rgba(0,91,0,0.75)",
                                highlightStroke: "rgba(0,91,0,1)",
                                data: [
                                    10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10

                                ]
                            }
                        ]

                    }


                    var barChartData2 = {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                fillColor: "rgba(168,0,0,0.5)",
                                strokeColor: "rgba(168,0,0,0.8)",
                                highlightFill: "rgba(168,0,0,0.75)",
                                highlightStroke: "rgba(168,0,0,1)",
                                data: [
                                    10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10

                                ]
                            }
                            ,
                            {
                                fillColor: "rgba(0,91,0,0.5)",
                                strokeColor: "rgba(0,91,0,0.8)",
                                highlightFill: "rgba(0,91,0,0.75)",
                                highlightStroke: "rgba(0,91,0,1)",
                                data: [
                                    10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10

                                ]
                            }

                        ]

                    }


                    window.onload = function () {

                        var ctx1 = document.getElementById("canvas1").getContext("2d");
                        window.myBar = new Chart(ctx1).Bar(barChartData1, {
                            responsive: true
                        });

                        var ctx2 = document.getElementById("canvas2").getContext("2d");
                        window.myBar = new Chart(ctx2).Bar(barChartData2, {
                            responsive: true
                        });



                    }

                </script>

                <!-- /////////////////////////////BAR graph//////////////////////////////// -->
            </div>



            <!--panel2-->


        </div>
        <!-- /.col-lg-4 -->
    </div>



    <!--panel2-->


</div>
<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<? $this->load->view('layout/footer'); ?>