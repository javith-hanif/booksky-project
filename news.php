<style>
 #mac{
	background-color: black;
	height: 100%;
	width: 100%;

 }
 #ik{
	display:flex;
	flex-direction: column;
	gap:10px;
	position:absolute;
	left:40%;
	top:45%;
 }
 #ri{
	width: 250;
    height: 30;
    background-color: wheat;
    border-radius: 5px;
 }
 #yas{
	width: 250;
    height: 30;
    background-color: wheat;
    border-radius: 5px;
 }
 #ash{
	background-color: blue;
     color: white;
     border-radius: 20px;
     width:250px;
     height: 30;
 }
 #fat{
	position:absolute;
	left:46%;
	top:34%;
 }
 #ara{
	position:absolute;
	top:32%;
	left:46%;
 }
 span{
	color:red;
 }
 #yamu{
	position: absolute;
	left:40%;
    bottom: 30%;
}
#ful{
	border:none;
	background-color: ;
	color:red;
	border-radius: 20px;
     width:260px;
     height: 40;
}
#fat h2{
	color:white;
}
</style>
<div id="mac">
	<div id="fat"><h2><span>L</span>ogin</h2></div>
	<div id="ara">
		
	</div>
<form method="POST" action="">
<div id="ik">
<input type="text" name="username" placeholder="username,email" id="ri">
<input type="password" name="password" placeholder="password" id="yas">
<input type="submit" name="submit" value="log in" id="ash">
</form>

</div>
<div id="yamu">
	<form method="GET" action="">
<input type="submit" name="sor" value="create account" id="ful">
</form>
</div>

</div>




<?php
include("database.php");
//$username=$_POST['username'];
//$password=$_POST['password'];

if(isset($_POST["submit"])){
	/*
	
	if(!empty($username&&$password)){
		//$hash=password_hash($password,PASSWORD_DEFAULT);
	try{	
	$sql="INSERT INTO users (user, password)
      VALUES ('$username', '$password')";
   
    mysqli_query($conn, $sql);
	  }
	  catch(mysqli_sql_exception){
		  echo "username & password already exist";
	  }
   
}

elseif(empty($username)){
	echo "username empty";
}
elseif(empty($password)){
	echo "please set password";
}
*/


$sql="SELECT * FROM users WHERE user='$_POST[username]' and password='$_POST[password]'";
	  $result=mysqli_query($conn,$sql);
	   if(mysqli_num_rows($result)>0){
		  
		  $row=mysqli_fetch_assoc($result);
		 
		
		  header("location:final app.php");
		  
		  
	  }

	  
}
if(isset($_GET["sor"])){
	header("location:sign in.php");
}

	  





?>
