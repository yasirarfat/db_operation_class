<?php 
include_once("db_operations.php");
$dboperations =new db_operations("localhost","root","","user_management");
//array
 $arr=array(
	"user_id"=>9,
	"user_name"=>"ali",
	"user_lname"=>"buriro",
	"user_email"=>"ali@gmail.com",
	"user_pass"=>"ali",
	"user_fname"=>"akbar",
	"role"=>2
); 

//inserting record into users table
echo $dboperations->insertData("users",$arr);

//update record from users having user_id=9
echo $dboperations->updateData("users",$arr,9);
// //Returning Multidimensional array
echo "<pre>";(print_r($dboperations->selectData("users")));

//fetching data with user_id 2 
 foreach($dboperations->selectData("users") as $k => $v){
	if($k==2){
		foreach($v as $key => $value){
			echo $key."=>".$value."<br>";
		}
	break;
	}
} 

//deleting record from table users having user_id=9
echo $dboperations->delete("users",9);
?>