<?php 


    echo "<script type='text/javascript'>
    const x = 'Are you sure ?';
    if(confirm(x) == true){
        location='confirm_deldata.php';
    }
    else{
        location='home.php';
    }
    </script>";

?>
