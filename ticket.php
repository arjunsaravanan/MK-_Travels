<?php
  
        $conn = mysqli_connect("localhost", "root", "", "travelss");
          
       
        if($conn === false){
            die("ERROR: Could not connect. "  .mysqli_connect_error());
        }
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobile =  $_REQUEST['mobile'];
        $age= $_REQUEST['age'];
        $coaches = $_REQUEST['coaches']; 
        $from= $_REQUEST['from'];
        $to= $_REQUEST['to'];
        $date= $_REQUEST['date'];
      
        $sql = "INSERT INTO aswin  VALUES ('$name', '$email','$age','$coaches','$from','$to','$date' )";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$name\n$email\n$age\n$coaches\n$from\n$to\n$date");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        mysqli_close($conn);
        ?>zz

