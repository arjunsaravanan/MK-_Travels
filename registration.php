<?php
  
        $conn = mysqli_connect("localhost", "root", "", "travel");
          
       
        if($conn === false){
            die("ERROR: Could not connect. " .mysqli_connect_error());
        }
        $name =  $_REQUEST['username'];
        $email = $_REQUEST['Password'];
       
       
      
        $sql = "INSERT INTO arjun  VALUES ('$username', '$Password')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            echo nl2br("\n$username\n$Password ");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        mysqli_close($conn);
        ?>