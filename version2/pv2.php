<?php
if (isset($_POST['load']))
{
	$sdata=(json_decode($_POST['load'],true));
	echo json_encode($sdata);

	
	$conn= new mysqli("localhost","root","","project");
	if ($conn->connect_error)
	{	
	die ($conn->connect_error);
	}	
    else 
	//echo "connect";
for($i=0;$i<count($sdata);$i++)
{
	$typeofevent=$sdata[$i]["type"];
	$targetofevent=$sdata[$i]["target"];
	$dateofevent=$sdata[$i]["date"];
	$sql="Insert Into t Values('$typeofevent','$targetofevent','$dateofevent')";
	$conn->query($sql);
}
	if ($conn->affected_rows >0)
	{echo "inserted successfully";}
   else
   {echo "sorry :problem with insertion";}

}
if (isset($_POST['unload']))
{
	$sdata=(json_decode($_POST['unload'],true));
	echo json_encode($sdata);

	
	$conn= new mysqli("localhost","root","","project");
	if ($conn->connect_error)
	{	
	die ($conn->connect_error);
	}	
    else 
	//echo "connect";
for($i=0;$i<count($sdata);$i++)
{
	$typeofevent=$sdata[$i]["type"];
	$targetofevent=$sdata[$i]["target"];
	$dateofevent=$sdata[$i]["date"];
	$sql="Insert Into t Values('$typeofevent','$targetofevent','$dateofevent')";
	$conn->query($sql);
}
	if ($conn->affected_rows >0)
	{echo "inserted successfully";}
   else
   {echo "sorry :problem with insertion";}

}
if (isset($_GET['t']))
{
	$sql="select*from t";
	$conn= new mysqli("localhost","root","","project");
	if ($conn->connect_error)
	{die ($conn->connect_error);}
if ($result=$conn->query($sql))
{
	$rows=array();
	if ($result->num_rows>0){
		while ($row=$result->fetch_assoc())
		{array_push($rows,$row);
	}
	echo json_encode($rows);
	}
}
	else{
		echo "no data to retrieve";
	}
}
/*$conn = new mysqli("localhost","root","root")
if ($conn->connect_error)
	{	
	die ($conn->connect_error);
	}
	$sql="CREATE DATABASE IF NOT EXISTS information";
	if ($conn->query($sql)=== TRUE)
	{echo "database created successfully";}
else { echo $conn->error;}
$conn->close();
$conn=new mysqli("localhost","root","root","information");
if ($conn->connect_error)
{die ($conn->connect_error);
}
$sql="CREATE TABLE IF NOT EXISTS ddd(type varchar(20),target varchar(20),date varchar(20))";
*/
?>