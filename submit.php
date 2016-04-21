<?php 
$Link=mysqli_connect("localhost","dbuser","123","form");
if($_POST["message"]=="insert"){
    
    session_start();
    $data=$_POST["data"];
    $time=date("Y-m-d h:i:sa");
    $query="insert into exam (id, message, time)values('".$_SESSION["user"]."','$data','$time')";
    $result=mysqli_query($Link,$query);
    
    
}
if($_POST["message"]=="fetch"){
    
    $queryfetch="select * from exam";
    $resultfetch=  mysqli_query($Link, $queryfetch);
   while($row=  mysqli_fetch_assoc($resultfetch)){
       echo $row["id"]," says: ",$row["message"],"<br>";
   }
}


?>