<?php
require_once("./connection.php");
if(isset($_POST)){
    $dept=  $_POST['dept'];
    $batch =  $_POST['batch'];
    $section = 'a';
    $term = 1;
    // $name = $_POST['name'];
    $roll = $_POST['roll'];
    $table_name = $dept."_".$batch."_".$term."_".$section."_students";
    
    $get_details  = "DELETE FROM `$table_name` WHERE student_id = '$roll'";
        switch($batch){
            case 1:
                $batch_s = '16';
            break;
            case 2:
                $batch_s = '17';
            break;
            case 3:
                $batch_s = '18';
            break;
            case 4:
                $batch_s = '19';
            break;
            case 5:
                $batch_s = '20';
            break;
        }
    ?>
    <h2>
        <?php echo"Department: $dept " ?>
        <?php echo"Batch: $batch_s " ?>
    </h2>
<?php
if($con -> query($get_details)){
    echo "Successfully deleted".$roll;
}
else{
    echo "Error kindly re-enter the details";
}
}
else{
    header("location:studentcheck.html");
}

?>