<?php
session_start();
$con=mysqli_connect('localhost','root','','bank');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/t.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background:transparent;
		padding:50px;
		border:5px solid green;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		background-color:black;
		color:white;
		width: 220px;
        height: 51px;
		border-radius: 10px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		font-size:20px;
		font-weight:bold;
	}
	.button:hover{
		background-color:white;
		color:green;
	}
	.home_but{
		background-color:#0B4713;
		color:white;
		width: 220px;
        height: 51px;
		border-radius: 10px;
	    border: 1px solid black;
	}
	.home_but:hover{
		filter: blur(1px);
		background-color:white;
		color:green;
		font-size:20px;
		border-radius:25px;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Naveen"){
				 var arr=["Priyanka","Madhavi","Suresh","Usha","Charishma","Lucky","Ghana","Nani","Sushma"];
				 }
				 else if(a==="Priyanka"){
					var arr=["Naveen","Madhavi","Suresh","Usha","Charishma","Lucky","Ghana","Nani","Sushma"];
				}
				else if(a==="Madhavi"){
					var arr=["Naveen","Priyanka","Suresh","Usha","Charishma","Lucky","Ghana","Nani","Sushma"];
				}
				else if(a==="Suresh"){
					var arr=["Naveen","Priyanka","Madhavi","Usha","Charishma","Lucky","Ghana","Nani","Sushma"];
				 }
				 else if(a==="Usha"){
					var arr=["Naveen","Priyanka","Madhavi","Suresh","Charishma","Lucky","Ghana","Nani","Sushma"];
				 }
				 else if(a==="Charishma"){
					var arr=["Naveen","Priyanka","Madhavi","Suresh","Usha","Lucky","Ghana","Nani","Sushma"];
				 }
				 else if(a==="Lucky"){
					var arr=["Naveen","Priyanka","Madhavi","Suresh","Usha","Charishma","Ghana","Nani","Sushma"];
				 }
				 else if(a==="Ghana"){
					var arr=["Naveen","Priyanka","Madhavi","Suresh","Usha","Charishma","Lucky","Nani","Sushma"];
				 }
				 else if(a==="Nani"){
					var arr=["Naveen","Priyanka","Madhavi","Suresh","Usha","Charishma","Lucky","Ghana","Sushma"];
				 }
				 else if(a==="Sushma"){
				 var arr=["Naveen","Priyanka","Madhavi","Suresh","Usha","Charishma","Lucky","Ghana","Nani"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" margin-top:30px;font-size:45px;color:black;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left"><b>Senders Name:</b> &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Naveen">Naveen</option>
			<option value="Priyanka">Priyanka</option>
			<option value="Madhavi">Madhavi</option>
			<option value="Suresh">Suresh</option>
			<option value="Usha">Usha</option>
			<option value="Charishma">Charishma</option>
			<option value="Lucky">Lucky</option>
			<option value="Ghana">Ghana</option>
			<option value="Nani">Nani</option>
			<option value="Sushma">Sushma</option>
		</select><br><br>
		<label for="receiver" align="left"><b>Receiver Name:</b>&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left"><b>Amount: </b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="home_but">Go to HomePage</button>
	</a>
</div>
</body>
</html>