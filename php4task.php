








<!-- // #2
// //create db & select
//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = '';
//    $dbname ='demo';
//    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
//    if(! $conn ) {
//       die('Could not connect: ' . mysqli_error($conn));
//    }
   
//    echo 'Connected successfully';
//    //create
//    $sql = "create database $dbname";
//      $retval = mysqli_query( $conn,$sql );
   
//    if(! $retval ) {
//       die('Could not create database: ' . mysqli_error($conn));
//    }
//     //select
//     mysqli_select_db( $conn,$dbname );
//    echo "Database <span style='color:red'>$dbname </span>created & selected successfully\n";
//    mysqli_close($conn);
//  -->



 

 //<?php
#3
//create db TABLE
//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = '';
//    $dbname ='demo';
//    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
//    if(! $conn ) {
//       die('Could not connect: ').mysqli_connect_error();
//    }
   
//    echo 'Connected successfully<br>';
   
//    //select
//    mysqli_select_db( $conn,$dbname );

//    //create table
//    $sql = 'CREATE TABLE user( u_id INT NOT NULL AUTO_INCREMENT,
//    u_name VARCHAR(20) NOT NULL,
//    u_Email  VARCHAR(20),
//    u_Gender  char(20) NOT NULL,
//   u_Mail_Status    char(6) NOT NULL,
//    primary key ( u_id ))';

//      $retval = mysqli_query( $conn,$sql );
   
//    if(! $retval ) {
//       die('Could not create table: ' . mysqli_error($conn));
//    }
    
//    echo "<br>Database Table  created successfully\n";
//    mysqli_close($conn);
// ?> 




<!-- 
#5
//insert data to TABLE
//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = '';
//    $dbname ='demo';
//    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
//    if(! $conn ) {
//       die('Could not connect: ' . mysqli_connect_error());
//    }
   
//    echo 'Connected successfully<br>';
   
//    //select
//    mysqli_select_db( $conn,$dbname );

//    //insert into table
//    $sql = "INSERT INTO user(u_id,u_name, u_Email, u_Gender,u_Mail_status) 
//    VALUES ( 1, 'dina', 'dinna202030@gmail.com', 'female','yes')";

//    $retval = mysqli_query( $conn,$sql );
   
//    if(! $retval ) {
//       die('Could not insert to table: ' . mysqli_error($conn));
//    }
    
//    echo "<br>Data inserted to table successfully\n";
//    mysqli_close($conn);

 -->


<?php
#6
//select==get from to TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='demo';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
  if(! $conn ) {
       die('Could not connect: '  . mysqli_connect_error());
    }
   
    echo 'Connected successfully<br>';
  
   $sql = 'SELECT u_id, u_name, u_Email,u_Gender,u_Mail_status FROM user';
   mysqli_select_db($conn,$dbname);
   $result = mysqli_query($conn,$sql );
   
   if(! $result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }


   if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
         echo "user_id :{$row['u_id']}  <br> ".
         "user NAME : {$row['u_name']} <br> ".
         "user Email : {$row['u_Email']} <br> ".
         "user Gender : {$row['u_Gender']} <br> ".
         "user Mail_status : {$row['u_Mail_status']} <br> ".
         "--------------------------------<br>";
      }
    } else {
      echo "0 results";
    }
    
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>


  



   
<html>
    <body>
    
        <button>
            <a href="form.php" >Add New User </a>
        </button>

    </body>
</html>




<?php

#5
//insert data to TABLE
    $dbhost = 'localhost';
    $dbuser = 'root';
   $dbpass = '';
    $dbname ='demo';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
    if(! $conn ) {
          die('Could not connect: ' . mysqli_connect_error());
  }


  

   echo"<br>";
  echo 'Connected successfully<br>';

  $x=$_GET['name'];
  $y=$_GET['Email'];
  $z=$_GET['gender'];
  $r=$_GET['checked'];
   
    //select
    mysqli_select_db( $conn,$dbname );

    

    //insert into table
  $sql = "INSERT INTO user(u_name, u_Email, u_Gender,u_Mail_status) 
    VALUES ( '$x', '$y', '$z', '$r')";

    $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
       die('Could not insert to table: ' . mysqli_error($conn));
    }
    
    echo "<br>Data inserted to table successfully\n";
   mysqli_close($conn);

 ?>





