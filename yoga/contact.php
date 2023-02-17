<?php

// if(isset($_POST)) {
//   echo("Name : ".$_POST["user_name"]."<br>user_numb :".$_POST["user_numb"]."<br>date :".$_POST["user_date"]."<br>
//   typeclass :".$_POST["typeclass"]."<br>time : ".$_POST["time"]."<br><br>");
// }
// if(isset($_POST['submit'])){
// get the post records

    
    $user_name = $_POST['user_name'];
    $user_numb = $_POST['user_numb'];
	  $user_date = $_POST['user_date'];
    $typeclass = $_POST['typeclass'];
    $time = $_POST['time'];
    $times = implode(" | ",$time);
  // echo $user_numb;
  $conn = new mysqli('localhost', 'root', '','indisyoga');
  // if ($conn->connect_error) {
  //   die("Connection failed: " . $conn->connect_error);
  //  }
  //  $sql = "SELECT * FROM yoga WHERE user_numb = '$user_numb'";
   
  //  $result = $conn->query($sql);
  //  if ($result->num_rows > 0) {
  //   //  echo "<script>alert(\"Oops! Mobile number Already Used\");</script>";
  //   //  echo "<script>window.location=\"./duplicate.php\";</script>";
  //   print_r($result);
 
  //  }
  //  else{
   
    $sql = "INSERT INTO yoga_leads (user_name,user_numb,user_date,typeclass,time) 
    VALUES ('$user_name','$user_numb','$user_date','$typeclass','$times')";
             
 
             if ($conn->query($sql) === TRUE) {
              echo "inserted";
              //  echo "<script>alert(\"submitted\");</script>";
               echo "<script>window.location=\"./Thankyou.html\";</script>";
             } else {
             echo "Error Updating table: " . $sql . "<br>" . $conn->error;
             } 
            //  }
         

// close connection
mysqli_close($conn);
// header('Location:index.php');  
            // }   
?>

