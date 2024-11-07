

<?php

include_once 'stats_user_header.php';
include_once "connectdb.php";


echo "edited me!"
error_reporting (1);

// ########################################################################################################### -->
// ########################################################################################################### -->
// ########################################################################################################### -->
// ########################################################################################################### -->
// ########################################################################################################### -->
// ########################################################################################################### -->
// ########################################################################################################### -->

?>

<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0"> Region 5 - ICT Statistics - Standby: Page Under Contruction! <i class="fa-solid fa-person-digging pl-1"></i></h1> 
          </div><!-- /.col -->
                              <!-- <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                                  <li class="breadcrumb-item active">Top Navigation</li>
                                </ol>
                              </div> -->
                              <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">    
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->





    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	  
	  
	  
	  
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                            <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1"><i class="fa-solid fa-house"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Percentage of Households with Internet @ <b>2019</b></span>
                                            <span class="info-box-number">
                                            7.3
                                            <small>%</small>
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                </div>
                <!-- /.col -->
		  
		  
                <div class="col-12 col-sm-6 col-md-6">
                            <div class="info-box">
                            <span class="info-box-icon bg-primary elevation-1"><i class="fa-solid fa-house-signal"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Percentage of Households with Internet @ <b>2022</b></span>
                                            <span class="info-box-number">
                                            72
                                            <small>%</small> 
                                            </span>
                                        </div>
                                        <!-- /.info-box-content -->
                        </div>
                            <!-- /.info-box -->
                </div>
          
            </div>
            <!-- /.row -->
	  
	  
	  
            <!-- Info boxes -->
            <div class="row">
          
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-network-wired"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Fixed Wired Broadband</span>
                                            <span class="info-box-number">19<small>%</small> @ 2022</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                </div>
                            <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fa-solid fa-wifi"></i></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Fixed Wireless Broadband Network</span>
                                            <span class="info-box-number">8<small>%</small> @ 2022</span>
                                        </div>
                                        <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-mobile-screen-button"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Mobile Broadband</span>
                                            <span class="info-box-number">44.7<small>%</small> @ 2022</span>
                                        </div>
                                        <!-- /.info-box-content -->
                    </div>
                            <!-- /.info-box -->
                </div>
                <!-- /.col -->



                <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                            <span class="info-box-icon bg-gray elevation-1"><i class="fa-solid fa-satellite-dish"></i></span>

                                        <div class="info-box-content">
                                            <span class="info-box-text">Satellite Broadband</span>
                                            <span class="info-box-number">0.3<small>%</small> @ 2022</span>
                                        </div>
                                        <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                </div>
            </div>
            <!-- /.row -->



<!--  -->
<!--  -->
<!--  -->
                      <!-- BAR CHART -->
                      <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-line me-1"></i>
                                        Total Number Wifi Sites
                                    </div>
                                    <!-- layer8  ======================================================================== -->
                                    <div class="card-body"><canvas id="myAreaChart2" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                      </div>


                      <!-- layer6  ======================================================================== -->
                            
                      <!-- BAR CHART --> 
                      <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Total Number of Students Per Province
                                    </div>
                                    <!-- layer8  ======================================================================== -->
                                    <div class="card-body"><canvas id="barChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                      </div>


                      <div class="row">
                      <!-- LINE CHART -->
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Total Number of Students Per Student Type
                                    </div>
                                    <!-- layer8  ======================================================================== -->
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                      </div>

                      <!-- PIE CHART -->
                      <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Total Number Wifi Sites Supplier 
                                    </div>
                                    <!-- layer8  ======================================================================== -->
                                    <div class="card-body"><canvas id="myPieChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                      </div>
                            <!-- layer6  ======================================================================== -->
           
                        <!-- layer5  ==END OG CANVAS CHARTS ==   START OF DATA TABLE==================================== -->
                        


<!--  -->
<!--  -->
<!--  -->




      </div><!--/. container-fluid -->
    </section>





<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content -->


<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->

  </div><!-- /.content-wrapper -->

<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->
<!-- ########################################################################################################### -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php

include_once 'footerz.php';


    $stype_shs = "shs";
    $stype_jhs = "jhs";
    $stype_elem = "elem";



//$con = new PDO('mysql:host=sql309.infinityfree.com;dbname=if0_37027351_pos_barcode_db', 'if0_37027351', 'UNy0dYUxy1vDz');


$labels = $pdo->query("SELECT province FROM masterlisttbl GROUP BY province")->fetchAll(); 

$labels2 = $pdo->query("SELECT supplier FROM wifisites GROUP BY supplier")->fetchAll(); 

?>
<!-- SCRIPT AREA 1 -->
<!-- <script src="assets/demo/chart-area-demo.js"> -->
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#fff";

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
type: 'line',
data: {
labels: [
    <?php
            foreach($labels as $labb)
            {
                echo "'" . $labb['province'] . "',";
            }
    ?>
],
datasets: [{
label: "SHS",
lineTension: 0.3,
backgroundColor: "rgba(2,117,216,0.2)",
borderColor: "rgba(2,117,216,1)",
pointRadius: 5,
pointBackgroundColor: "red",
pointBorderColor: "black",
pointHoverRadius: 5,
pointHoverBackgroundColor: "red",
pointHitRadius: 50,
pointBorderWidth: 2,
data: [
    <?php

    
                foreach($labels as $labb)
                {
                    //echo "'" . $lab['Program'] . "',";
                    $province = $labb['province'];
                    $student_count = $pdo->query("SELECT SUM(`totalstud`) as stud_count FROM masterlisttbl WHERE province = '" . $province . "' AND studtype IN ('" . $stype_shs . "') ")->fetch();
                
                    // $student_count = $con->query("SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province` ")->fetch();
                
                    // SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province`;
                    echo $student_count['stud_count'] . ',';
                }
            ?>
],
},


{
label: "JHS",
lineTension: 0.3,
backgroundColor: "rgba(2,117,216,0.2)",
borderColor: "rgba(2,117,216,1)",
pointRadius: 5,
pointBackgroundColor: "rgba(2,117,216,1)",
pointBorderColor: "blue",
pointHoverRadius: 5,
pointHoverBackgroundColor: "rgba(2,117,216,1)",
pointHitRadius: 50,
pointBorderWidth: 2,
data: [
    <?php
                foreach($labels as $labb)
                {
                    //echo "'" . $lab['Program'] . "',";
                    $province = $labb['province'];
                    $student_count = $pdo->query("SELECT SUM(`totalstud`) as stud_count FROM masterlisttbl WHERE province = '" . $province . "' AND studtype IN ('" . $stype_jhs . "') ")->fetch();
                
                    // $student_count = $con->query("SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province` ")->fetch();
                
                    // SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province`;
                    echo $student_count['stud_count'] . ',';
                }
            ?>
],
},

{
label: "ELEM",
lineTension: 0.3,
backgroundColor: "rgba(2,117,216,0.2)",
borderColor: "rgba(2,117,216,1)",
pointRadius: 5,
pointBackgroundColor: "yellow",
pointBorderColor: "black",
pointHoverRadius: 5,
pointHoverBackgroundColor: "yellow",
pointHitRadius: 50,
pointBorderWidth: 2,
data: [
    <?php
                foreach($labels as $labb)
                {
                    //echo "'" . $lab['Program'] . "',";
                    $province = $labb['province'];
                    $student_count = $pdo->query("SELECT SUM(`totalstud`) as stud_count FROM masterlisttbl WHERE province = '" . $province . "' AND studtype IN ('" . $stype_elem . "') ")->fetch();
                
                    // $student_count = $con->query("SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province` ")->fetch();
                
                    // SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province`;
                    echo $student_count['stud_count'] . ',';
                }
            ?>
],
}




],
},
options: {
scales: {
xAxes: [{
    time: {
    unit: 'date'
    },
    gridLines: {
    display: false
    },
    ticks: {
    maxTicksLimit: 7
    }
}],
yAxes: [{
    ticks: {
    min: 0,
    // max: 400000,
    maxTicksLimit: 5
    },
    gridLines: {
    color: "rgba(0, 0, 0, .125)",
    }
}],
},
legend: {
display: false
}
}
});
// END SCRIPT - AREA 1
</script>


<!-- SCRIPT AREA 2 -->
<!-- <script src="assets/demo/chart-area-demo2.js"> -->
<script>
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#fff";

// Area Chart Example
var ctx = document.getElementById("myAreaChart2");
var myLineChart = new Chart(ctx, {
type: 'line',
data: {
labels: [
    <?php
            foreach($labels as $labb)
            {
                echo "'" . $labb['province'] . "',";
            }
           
    ?>
],
datasets: [{
label: "Wifi-Sites",
lineTension: 0.3,
backgroundColor: "rgba(2,117,216,0.2)",
borderColor: "rgba(2,117,216,1)",
pointRadius: 5,
pointBackgroundColor: "purple",
pointBorderColor: "black",
pointHoverRadius: 5,
pointHoverBackgroundColor: "purple",
pointHitRadius: 50,
pointBorderWidth: 2,
data: [
    <?php
                foreach($labels as $labb)
                {
                    //echo "'" . $lab['Program'] . "',";
                    $province = $labb['province'];
                    // $student_count = $con->query("SELECT SUM('supplier') as supplier FROM wifisites")->fetch();
                    $student_count = $pdo->query("SELECT COUNT(`supplier`) as supplier FROM `wifisites` WHERE province = '" . $province . "' GROUP BY `province`")->fetch();
                    // $student_count = $con->query("SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province` ")->fetch();
                
                    // SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province`;
                    echo $student_count['supplier'] . ',';
                }
                
            ?>
],
}




],
},
options: {
scales: {
xAxes: [{
    time: {
    unit: 'date'
    },
    gridLines: {
    display: false
    },
    ticks: {
    maxTicksLimit: 7
    }
}],
yAxes: [{
    ticks: {
    min: 0,
    // max: 400000,
    maxTicksLimit: 5
    },
    gridLines: {
    color: "rgba(0, 0, 0, .125)",
    }
}],
},
legend: {
display: false
}
}
});


// END SCRIPT - AREA 2
</script>


<!-- SCRIPT BAR -->
<!-- <script src="assets/demo/chart-bar-demo.js"> -->
<script>
var ctx = document.getElementById('barChart').getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
    labels: [
        <?php


            foreach($labels as $lab)
            {
                echo "'" . $lab['province'] . "',";
            }
        ?>
    ],
    datasets: [{
        label: 'Number of Students',
        data: [
            <?php
                foreach($labels as $lab)
                {
                    //echo "'" . $lab['Program'] . "',";
                    $province = $lab['province'];
                    $student_count = $pdo->query("SELECT SUM(`totalstud`) as stud_count FROM masterlisttbl WHERE province = '" . $province . "'")->fetch();
                
                    // $student_count = $con->query("SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province` ")->fetch();
                
                    // SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province`;
                    echo $student_count['stud_count'] . ',';
                }
            ?>
        ],
        backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(200, 180, 40, 1)',
            'rgba(150, 16, 220, 1)',
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(200, 180, 40, 1)',
            'rgba(150, 16, 220, 1)',
        ],
        borderWidth: 1
    }]
},
options: {
        scales: {
            xAxes: [{
                        time: {
                        // unit: 'month'
                        },
                        gridLines: {
                        display: false
                        },
                        ticks: {
                        maxTicksLimit: 6
                        }
                    }],
            yAxes: [{
                        ticks: {
                        min: 0,
                        max: 600000,
                        maxTicksLimit: 5
                        },
                        gridLines: {
                        display: true
                        }
                    }],
                    
        },
        legend: {
        display: false
        }
    }
});


</script>


<!-- SCRIPT PIE -->
<!-- <script src="assets/demo/chart-pie-demo.js"> -->
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#292b2c';

// // Pie Chart Example
// var ctx = document.getElementById("myPieChart");
// var myPieChart = new Chart(ctx, {
// type: 'pie',
// data: {
//     labels: [
    
//         <?php
//                 foreach($labels2 as $labb)
//                 {
//                     echo "'" . $labb['supplier'] . "',";
//                 }
//         ?>

//     ],
//     datasets: [{
//     label: 'count',    
//     data: [
     
//         1,2,3,4,5,6,7,8


//     ],


//     backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', orange, purple, pink, brown],
//     }],
// },
// });

// END SCRIPT - PIE
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#fff";

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
type: 'pie',
data: {
labels: [
    
    <?php
            foreach($labels2 as $labb)
            {
                echo "'" . $labb['supplier'] . "',";
            }
    ?>

],
datasets: [{
data: [
    
    <?php
                foreach($labels2 as $lab)
                {
                    //echo "'" . $lab['Program'] . "',";
                    $province = $lab['supplier'];
                    $student_count = $pdo->query("SELECT COUNT(`supplier`) as stud_count FROM wifisites WHERE supplier = '" . $province . "'")->fetch();
                
                    // $student_count = $con->query("SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province` ")->fetch();
                
                    // SELECT `province`, SUM(`totalstud`), COUNT(`totalstud`), AVG(`totalstud`), SUM(`studyesict`), COUNT(`studyesict`), AVG(`studyesict`), SUM(`studnoict`), COUNT(`studnoict`), AVG(`studnoict`), SUM(`pcentyesict`), COUNT(`pcentyesict`), AVG(`pcentyesict`), SUM(`pcentnoict`), COUNT(`pcentnoict`), AVG(`pcentnoict`) FROM `masterlisttbl` WHERE `studtype` IN ('shs', 'jhs', 'elem') AND `year` IN ('2022', 'none', 'none') AND `region` IN ('Region V') GROUP BY `province`;
                    echo $student_count['stud_count'] . ',';
                }
            ?>


],
backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745', 'orange', 'purple', 'black', 'brown' ],
}],
},
});
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script> -->
<script src="./js/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="./js/datatables-simple-demo.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script src="./js/jquery.min.js"></script>
<script>
$(document).ready(function(){
//jquery for toggle sub menus
$('.sub-btn').click(function(){
    $(this).next('.sub-menu').slideToggle();
    $(this).find('.dropdown').toggleClass('rotate');
});

//Active cancel button
// $(‘.close-btn’).click(function(){
//     $(‘.side-bar’).removeClass(‘active’);
//     $(‘.menu-btn’).css(“visibility”, “visible”);
// });
})

</script>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("w3-dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
dropdown[i].addEventListener("click", function() {
this.classList.toggle("active");
var dropdownContent = this.nextElementSibling;
if (dropdownContent.style.display === "block") {
dropdownContent.style.display = "none";
} else {
dropdownContent.style.display = "block";
}
});
}
</script>

