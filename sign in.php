<style>
    #container{
		background-color:black;
        height: 100%;
        width: 100%;
        

    }
	#navi{
	
	}
    #navi h2{
        color: whitesmoke;
		position:absolute;
		left:46%;
		top:34%;
        

    }
    #eng{
		display:flex;
		flex-direction:column;
		gap:10px;
		position:absolute;
		left:40%;
		top:45%;
	}
    #javi button{
        background-color: blue;
        color: white;
        border-radius: 20px;
        height: 30;
		width:250px;
        
    }
    #first{
        width: 250px;
        height: 30;
        background-color: wheat;
        border-radius: 5px;
        


    }
    #second{
        height: 30;
		width:250px;
        border-radius: 5px;
        background-color: wheat;
    }
    #code{
        color: white;
    }
    #navi span{
        color: red;
    }
	#hub{

		position:absolute;
		bottom:30%;
		left:40%;
	}
	#hub input{
				border:none;
		width:260px;
		height:40;
		border-radius:20px;
		color:red;
	}

    

</style>
<div id="container">
    <div id="navi"><h2><span>S</span>ignin</h2></div>
    
    <div id="javi">
	<form method="POST" action="">
	<div id="eng">
        <input type="text" placeholder="Username,email" id="first" name="username" >
        <input type="password" placeholder="password" id="second" name="password">
        <button onclick="come()" name="submit">sign in</button>
		</div>
		</form>
</div>
<form method="POST" action=""
<div id="hub">
<input type="submit" name="bo" value="already have an account?"></div>
</form>

<?php
include("database.php");
if(isset($_POST["submit"])){
	if(!empty($_POST['username']&&$_POST['password'])){
		//$hash=password_hash($_POST['password'],PASSWORD_DEFAULT);
	try{	
	$sql="INSERT INTO users (user, password)
      VALUES ('$_POST[username]', '$_POST[password]')";
   
    mysqli_query($conn, $sql);
	header("location:final app.php");
	  }
	  catch(mysqli_sql_exception){
		  echo "username & password already exist";
	  }
	  
   
}


}
if(isset($_POST['bo'])){
	header("location:news.php");
}
mysqli_close($conn);
?>
