<?php
 $conn = new mysqli("localhost", "root", "", "ma");
  if($conn->connect_error){
 	die($conn->connect_error);
  }
 if(isset($_POST['load'])){
//   //Convert it to an Associative Array
  $person = json_decode($_POST['load'], true);
     echo json_encode($person);
  //echo  $person ;
//   //Save In MySQL
for($i=0;$i<count($person);$i++){
   $typ = $person[$i]['type'];
  $target = $person[$i]['target'];
  $dat = $person[$i]['date'];
  $sql = "Insert Into tempal values('$typ','$target','$dat')";
  
  $conn->query($sql);

  if($conn->affected_rows > 0){
	 
   echo "Inserted Successfully";
  }
  else{
    echo "Sorry: Problem With Insertion";	
  } 
}
}

 if(isset($_POST['unload'])){
  $person = json_decode($_POST['unload'], true);
     echo json_encode($person);
  //echo  $person ;
for($i=0;$i<count($person);$i++){
   $typ = $person[$i]['type'];
  $target = $person[$i]['target'];
  $dat = $person[$i]['date'];
  $sql = "Insert Into tempal values('$typ','$target','$dat')";
  
  $conn->query($sql);

  if($conn->affected_rows > 0){
	 
   echo "Inserted Successfully";
  }
  else{
    echo "Sorry: Problem With Insertion";	
  } 
}
}
if(isset($_POST['generate'])){
  $person = json_decode($_POST['generate'], true);
     echo json_encode($person);
  //echo  $person ;
for($i=0;$i<count($person);$i++){
   $typ = $person[$i]['type'];
  $target = $person[$i]['target'];
  $dat = $person[$i]['date'];
  $sql = "Insert Into tempal values('$typ','$target','$dat')";
  
  $conn->query($sql);

  if($conn->affected_rows > 0){
	 
   echo "Inserted Successfully";
  }
  else{
    echo "Sorry: Problem With Insertion";	
  } 
}
}
/*
if(isset($_POST['letter'])){
//   //Convert it to an Associative Array
  $person = json_decode($_POST['letter'], true);
     echo json_encode($person);
  //echo  $person ;
//   //Save In MySQL
 
   //echo ("conection");
//   //print_r($person);
for($i=0;$i<count($person);$i++){
   $typ = $person[$i]['type'];
  $target = $person[$i]['target'];
  $dat = $person[$i]['date'];
  $sql = "Insert Into tempal values('$typ','$target','$dat')";
  
  $conn->query($sql);

  if($conn->affected_rows > 0){
	 
   echo "Inserted Successfully";
  }
  else{
    echo "Sorry: Problem With Insertion";	
  } 
}
}
*/
 if(isset($_GET['tempal'])){
  $sql = "Select * from tempal"; 
  $conn = new mysqli("localhost", "root", "", "ma");
  if($conn->connect_error){
 	die($conn->connect_error);
  }
  if ($result=$conn->query($sql)){
    $rows = array();
    if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
      array_push($rows, $row);
     }
//     //Convert to JSON Before Sending to Client
   echo json_encode($rows);
   }
 }
 else{
  echo "No Data to Retrieve";
 }
 }










?>