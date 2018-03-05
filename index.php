<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      $servername = "localhost";
$username = "";
$password = "";
$dbname = "udaanlibbook";
$bookname= isset($_POST['name1']);
$bookid= isset($_POST['book1']);
$sname= isset($_POST['sname1']);
$sid= isset($_POST['sid']);

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";

$sql = "SELECT book_id,book_name FROM book";
$sql1 = "SELECT book_id,book_name FROM studentdb";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
$user = mysqli_fetch_assoc($result);
$user1 = mysqli_fetch_assoc($result1);

if ($user) { // if user exists
    if ($user['book_id'] === $bookid) {
      array_push($errors, "book exists");
    }
    if($user)
    {
        if($user1['sname']===$studentid)
        {
            
            $bookassign=$bookid;
            echo 'student is of this college and book assigned to'.$bookassign;
        }
 else {
            echo 'not of this university';
 }
 
    }
    
   
 else {
        echo 'book is issued';   
    }
}

$t1=  date("h:i:sa");
$d1=strtotime("+7 Days");
echo date("Y-m-d h:i:sa", $d) . "<br>";


        ?>
    </body>
</html>
