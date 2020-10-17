<?php
require_once('../connection.php');

require_once('./departFile.php');
require_once('./gettingdataDepart.php');
?>

<!DOCTYPE html>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<head>
    <script>
    $('.profile').click(function() {
        if (
            $("#drop-down-profile").hasClass('row-sidebar-profile')) {
            $("#drop-down-profile").addClass('row-sidebar-profile-display');
            $("#drop-down-profile").removeClass('row-sidebar-profile');
        } else {
            $("#drop-down-profile").addClass('row-sidebar-profile');
            $("#drop-down-profile").removeClass('row-sidebar-profile-display');
        }
    });

    // hover function only if width is above 768px
    if ($(window).width() > 768) {
        $('#sidebar').hover(function() {
                // alert("done");
                $(this).addClass('sidebar-opened');
                $(".row-sidebar-text").addClass('text-opened');
                $('.icon-sidebar').css('margin', '0px');
                $('.row-sidebar').css('padding', '0px 10px');
            },
            function() {
                $(this).removeClass('sidebar-opened');
                $(".row-sidebar-text").removeClass('text-opened');
                $(".dashboard-inner").removeClass('da');
                $('.icon-sidebar').css('margin', 'auto');
                $('.row-sidebar').css('padding', '0px');
            }
        );
    }
    </script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assests/style/dashboard-index.css">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <title>Dashboard</title>
</head>




<body>
    <div class="dashboard">
        <div class="sidebar " id="sidebar">
            <div class="sidebar-inner " id="sidebar-inner">
                <p>D.A.M.S</p>
                <hr>
                <div class="row-sidebar profile">
                    <i class="far fa-user-circle icon-sidebar"></i>
                    <div class="row-sidebar-text name-bar ">
                        <?php echo $username_name ?>
                    </div>
                </div>
                <div id="drop-down-profile" class="row-sidebar-profile">
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            View Profile
                        </div>
                    </div>
                    <div class="row-sidebar">
                        <i class="fas fa-download icon-sidebar"></i>
                        <div class="row-sidebar-text ">
                            Change Password
                        </div>
                    </div>

                </div>
                <hr>
                <div class="row-sidebar">
                    <i class="fas fa-university icon-sidebar "></i>
                    <div class="row-sidebar-text ">
                        Overall Attendance
                    </div>
                </div>
                <div class="row-sidebar  selected-sidebar">
                    <i class="fas fa-building icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Department Wise Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-users icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Batch Wise Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-user-friends icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Class Wise Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-book icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Subject Wise Attendance
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-chart-line icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Class Conducted Statistics
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-user-tie icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Teacher Wise Attendance
                    </div>
                </div>

                <div class="row-sidebar">
                    <i class="fas fa-download icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        PDF Report Download
                    </div>
                </div>
                <div class="row-sidebar">
                    <i class="fas fa-sign-out-alt icon-sidebar"></i>
                    <div class="row-sidebar-text ">
                        Logout
                    </div>
                </div>


            </div>











        </div>
        <div class="dashboard-inner " id="main-bar">
            <div class="floating-menu">
                <button id="floating">X</button>
            </div>

            <!-- top graph -->
            <div class="dashboard-inner-main-graph">
                <h2>Department Wise Attendance</h2>
                <!-- <canvas id="overallstatsChart"></canvas> -->
            </div>




            <!-- main statistics -->
            <div class="dashboard-inner-main-stats">
                <div class="dims-inner dims-side">
                    <h3 class="avatar"
                        data-tooltip="Showing the attendance of the entire university of all departments">Overall
                        Attendance</h3>
                    <h4><?php echo round($attendance_total_uni) ?>%</h4>
                    <h5><?php echo $total_classes?> Classes</h5>
                </div>
                <div class="dims-inner dims-side">
                    <h3 class="avatar"
                        data-tooltip="Showing the last attendance uploaded in entire university 25-09-2020">Last
                        Attendance Uploaded</h3>
                    <h4><?php echo $present_last_percent?>%</h4>
                    <h5><?php echo $lecture_date?></h5>
                </div>
                <div class="dims-inner dims-side">
                    <h3 class="avatar" data-tooltip="Showing the last 7 days attendance uploaded in entire university">
                        Last 7 Days</h3>
                    <h4><?php echo $present_lastweek_percent ?>%</h4>
                    <h5><?php echo $number_of_classes_lastweek ?> Classes</h5>
                </div>
                <div class="dims-inner">
                    <h3 class="avatar" data-tooltip="Showing the last 30 days attendance uploaded in entire university">
                        Last 30 Days</h3>
                    <h4><?php echo  $present_lastmonth_percent ?>%</h4>
                    <h5><?php echo $number_of_classes_lastmonth ?> Classes</h5>
                </div>

            </div>


            <h2 class="dashboard-heading avatar"
                data-tooltip="Showing the last 30 days attendance uploaded in entire university">
                Department Wise Attendance
            </h2>

            <!-- depart wise statistics -->
            <div class="dashboard-inner-main-departs">
                <div class="dimd-row">
                    <div class="dimd-inner">
                        <h2>Computer System Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="CSEOverall"></canvas>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 17</h2>
                                <h3><?php echo $dept_cs_17_ids ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 18</h2>
                                <h3><?php echo $attendance_batch_cs_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 19</h2>
                                <h3><?php echo $attendance_batch_cs_19_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Batch 20</h2>
                                <h3><?php echo $attendance_batch_cs_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-inner">
                        <h2>Electronic Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="ESOverall"></canvas>

                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 17</h2>
                                <h3><?php echo $attendance_batch_es_17_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 18</h2>
                                <h3><?php echo $attendance_batch_es_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 19</h2>
                                <h3><?php echo $attendance_batch_es_19_PER  ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Batch 20</h2>
                                <h3><?php echo $attendance_batch_es_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-inner">
                        <h2>Energy and Environment Engineering</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <canvas id="EEOverall"></canvas>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 17</h2>
                                <h3><?php echo $attendance_batch_ee_17_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 18</h2>
                                <h3><?php echo $attendance_batch_ee_18_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Batch 19</h2>
                                <h3><?php echo $attendance_batch_ee_19_PER ?>%</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Batch 20</h2>
                                <h3><?php echo $attendance_batch_ee_20_PER ?>%</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show" id="show">

                    <div class="dimd-row">
                        <div class="dimd-inner">
                            <h2>Industrial Engineering and Management</h2>
                            <div class="dimd-inner-top" id="chartContainer">

                                <canvas id="INOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_in_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_in_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_in_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_in_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Architectural Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">

                                <canvas id="AROverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_ar_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_ar_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_ar_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_ar_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Material and Mettalurgy Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">

                                <canvas id="MMOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $mm_17_attendance->get_present();?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_mm_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_mm_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_mm_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-row">
                        <div class="dimd-inner">
                            <h2>Telecommunication Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="TEOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_te_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_te_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_te_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_te_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Petroluem and Gas Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="PGOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_pg_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_pg_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_pg_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_pg_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimd-inner">
                            <h2>Chemical Engineering</h2>
                            <div class="dimd-inner-top" id="chartContainer">
                                <canvas id="CHOverall"></canvas>
                            </div>
                            <div class="dimd-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 17</h2>
                                    <h3><?php echo $attendance_batch_ch_17_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 18</h2>
                                    <h3><?php echo $attendance_batch_ch_18_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Batch 19</h2>
                                    <h3><?php echo $attendance_batch_ch_19_PER ?>%</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Batch 20</h2>
                                    <h3><?php echo $attendance_batch_ch_20_PER ?>%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text" id="text">
                    show all...
                </div>
                <div class="text" id="texthide">
                    show less...
                </div>
            </div>


            <h2 class="dashboard-heading avatar"
                data-tooltip="Showing the number of classes conducted/uploaded in entire university">
                Class Conduction Status
            </h2>



            <!-- classes conducted records -->
            <div class="dashboard-inner-main-departs">
                <div class="dimd-row">
                    <div class="dimc-inner">
                        <h2>Computer System Engineering</h2>
                        <div class="dimc-inner-top">
                            <h2>100%</h2>
                        </div>
                        <div class="dimc-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Expected</h2>
                                <h3><?php echo $total_subject_cs_17 * 8 ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Uploaded</h2>
                                <h3><?php echo $cs_17+$cs_18+$cs_19+$cs_20 ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3><?php echo ($total_subject_cs_17 * 8)-$cs_17 ?></h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Classes compensated</h2>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimc-inner">
                        <h2>Electronic Engineering</h2>
                        <div class="dimc-inner-top">
                            <h2>100%</h2>
                        </div>
                        <div class="dimc-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Expected</h2>
                                <h3><?php echo $total_classes_es ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Uploaded</h2>
                                <h3><?php echo $total_classes_es ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3>0</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Classes compensated</h2>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimc-inner">
                        <h2>Energy and Environment Engineering</h2>
                        <div class="dimc-inner-top">
                            <h2>100%</h2>
                        </div>
                        <div class="dimc-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Expected</h2>
                                <h3><?php echo $total_classes_ee ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Uploaded</h2>
                                <h3><?php echo $total_classes_es ?></h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Classes Missed</h2>
                                <h3>0</h3>
                            </div>
                            <div class="dimdib-row">
                                <h2>Classes compensated</h2>
                                <h3>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show" id="showclass">
                    <div class="dimd-row">
                        <div class="dimc-inner">
                            <h2>Industrial Engineering and Management</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_in ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_in ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimc-inner">
                            <h2>Architectural Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_ar ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_ar ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimc-inner">
                            <h2>Material and Mettalurgy Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_mm ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_mm?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-row">
                        <div class="dimc-inner">
                            <h2>Telecommunication Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_te ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_te ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimc-inner">
                            <h2>Petroluem and Gas Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_pg ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_pg ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                                <div class="dimdib-row">
                                    <h2>Classes compensated</h2>
                                    <h3>3</h3>
                                </div>
                            </div>
                        </div>
                        <div class="dimc-inner">
                            <h2>Chemical Engineering</h2>
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                            <div class="dimc-inner-bottom">
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Expected</h2>
                                    <h3><?php echo $total_classes_ch ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Uploaded</h2>
                                    <h3><?php echo $total_classes_ch ?></h3>
                                </div>
                                <div class="dimdib-row dimdib-row-border">
                                    <h2>Classes Missed</h2>
                                    <h3>1</h3>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text" id="textclass">
                    show all...
                </div>
                <div class="text" id="textclasshide">
                    show less...
                </div>
            </div>







        </div>
    </div>
</body>
<!-- <style>
            *,
            *::before,
            *::after {
                box-sizing: border-box
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
            }

            .avatar {
                min-width: 200px;
                /* font-size: 14px !important; */
                /* width: fit-content; */
                border-radius: 50%;
                background-size: cover;
                background-position: center;
                position: relative;
            }

            .avatar::before,
            .avatar::after {
                --scale: 0;
                --arrow-size: 20px;
                --tooltip-color: #2196f3;

                position: absolute;
                z-index: 999;
                top: -.25rem;
                left: 50%;
                transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
                transition: 150ms transform;
                transform-origin: bottom center;
            }

            .avatar::before {
                --translate-y: calc(-100% - var(--arrow-size));

                content: attr(data-tooltip);
                color: white;
                padding: .5rem;
                border-radius: .3rem;
                text-align: center;
                width: max-content;
                max-width: 100%;
                background: var(--tooltip-color);
            }

            .avatar:hover::before,
            .avatar:hover::after {
                --scale: 1;
            }

            .avatar::after {
                --translate-y: calc(-1 * var(--arrow-size));

                content: '';
                border: var(--arrow-size) solid transparent;
                border-top-color: var(--tooltip-color);
                transform-origin: top center;
            }
        </style> -->


<script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="../assests/script/dashbaord.js"></script>

</html>