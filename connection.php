<?php

 
    // $con=mysqli_connect("localhost","root","","demoacct-313437e756");
    $con=mysqli_connect("localhost","root","","dams");
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
else {
    // echo "working";
}
?>