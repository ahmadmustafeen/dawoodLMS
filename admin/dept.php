<?php

if(!isset($_POST['dept'])){
    header("location:./index.php");
}
else{
//    $dept_id =  $_POST['dept'];
$dept_id = 'ch';
//    require_once('./gettingdataDepart.php');

switch($dept_id){
    case 'ar':
        $department_name = "Architecture and Engineering ";
    break;
    case 'ch':
        $department_name = "Chemical Engineering";
    break;
    case 'cs':
        $department_name = "Computer System Engineering";
    break;
    case 'in':
        $department_name = "Industrial Engineering and Management";
    break;
    case 'mm':
        $department_name = "Metallurgy and Material Engineering";
    break;
    case 'es':
        $department_name = "Electronics Engineering";
    break;
    case 'ee':
        $department_name = "Energy and Environment Engineering";
    break;
    case 'pg':
        $department_name = "Petroleum and Gas Engineering";
    break;
    case 'te':
        $department_name = "Telecommunication Engineering";
    break;
}






$overall_tooltip = "Showing the entire data of Department of ".$department_name;

}


?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
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
                        <?php
                        //  echo $username_name
                          ?>
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


            <div class="depart-admin">
                <h2>
                    <?php echo $department_name ?>
                </h2>
            </div>





            <div class="dashboard-inner-main-stats">
                <div class="dims-inner dims-side">
                    <h3 class="avatar" data-tooltip="<?php echo $overall_tooltip; ?>">Overall
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
                Batch Wise Attendance of <?php echo $department_name ?>
            </h2>

            <div class="dashboard-inner-main-departs">
                <div class="dimd-row">
                    <?php

                    if($dept_id == 'ar'){
                    ?>
                        <div class="dimd-inner">
                        <h2>Batch 16</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Scheduled Classes</h2>
                                <h3>22</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Conducted</h2>
                                <h3>21</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Missed</h2>
                                <h3>1</h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                  
                    <div class="dimd-inner">
                        <h2>Batch 17</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Scheduled Classes</h2>
                                <h3>22</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Conducted</h2>
                                <h3>21</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Missed</h2>
                                <h3>1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-inner">
                        <h2>Batch 18</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Scheduled Classes</h2>
                                <h3>22</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Conducted</h2>
                                <h3>21</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Missed</h2>
                                <h3>1</h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    if($dept_id == 'ar'){
                     ?>   </div>
                <div class="dimd-row">
                    <?php
                    }
                    ?>
                    <div class="dimd-inner">
                        <h2>Batch 19</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Scheduled Classes</h2>
                                <h3>22</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Conducted</h2>
                                <h3>21</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Missed</h2>
                                <h3>1</h3>
                            </div>
                        </div>
                    </div>
                    <?php
                    if($dept_id != 'ar'){
                     ?>   </div>
                <div class="dimd-row">
                    <?php
                    }

                    ?>


              
                
              
           
               
                    <div class="dimd-inner">
                        <h2>Batch 20</h2>
                        <div class="dimd-inner-top" id="chartContainer">
                            <div class="dimc-inner-top">
                                <h2>100%</h2>
                            </div>
                        </div>
                        <div class="dimd-inner-bottom">
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Scheduled Classes</h2>
                                <h3>22</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Conducted</h2>
                                <h3>21</h3>
                            </div>
                            <div class="dimdib-row dimdib-row-border">
                                <h2>Total Classes Missed</h2>
                                <h3>1</h3>
                            </div>
                        </div>
                    </div>
                    <div class="dimd-inner transparent">
                      
                    </div>
                </div>

            </div>






            <script>
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

        </div>

        <style>
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
        </style>







        <script src="https://kit.fontawesome.com/407fccd64e.js" crossorigin="anonymous"></script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="../assests/script/dashbaord.js"></script>

</html>
<script>






</script>