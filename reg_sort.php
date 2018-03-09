<?php
include 'dbha.php';
if (isset($_POST['submit'])){

	$fname=$_POST['f_name'];
	$mname=$_POST['m_name'];
	$lname=$_POST['l_name'];
	$name=$fname.' '.$mname.' '.$lname;
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$percentage=floatval($_POST['percentage']);
	$quota=$_POST['quota'];
	$email=$_POST['email'];
	$pwd_temp=$_POST['pwd'];
	$pwd=$_POST['pwd'];
	$rpwd_temp=$_POST['rpwd'];
	$city=$_POST['city'];

	$sql_c="SELECT * from configuration where Sr_no=1;";
	$run=mysqli_query($conn,$sql_c);
	$config=mysqli_fetch_assoc($run);

	$location=$config['Location'];
	$seat=$config['Seats'];
	$key="AIzaSyD4W8--Dhm8zEzLp7UpMKvMoCgkhUvT_8A";
	
	$sql_em="SELECT * FROM info WHERE Email='$email';";
	$run_em=mysqli_query($conn,$sql_em);
	$rows_em=mysqli_num_rows($run_em);

	$sql_no="SELECT * FROM info WHERE Contact='$contact';";
	$run_no=mysqli_query($conn,$sql_no);
	$rows_no=mysqli_num_rows($run_no);
	
	if($percentage>100){
		echo '<script>if(confirm("Invalid Percentage")){
		window.location.href="register.php?invalid-percentage";
		}else{
		window.location.href="home.php?invalid-percentage";
		}</script>';
	}else if(!($pwd_temp===$rpwd_temp)){
		echo '<script>if(confirm("Password did not match")){
		window.location.href="register.php?invalid-password";
		}else{
		window.location.href="home.php?invalid-password";
		}</script>';
	}else if($rows_em>0){
		echo '<script>if(confirm("Email already register")){
		window.location.href="register.php";
		}else{
		window.location.href="home.php";
		}</script>';
	}else if($rows_no>0){
		echo '<script>if(confirm("Number already register")){
		window.location.href="register.php";
		}else{
		window.location.href="home.php";
		}</script>';
	}else{
		$arrContextOptions=array(
    		"ssl"=>array(
       		"verify_peer"=>false,
        	"verify_peer_name"=>false,
    		),
		);  

		//$url="https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$location."&destinations=".$city."&key=".$key;
		/*$url="https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=Washington,DC&destinations=New+York+City,NY&key=YOUR_API_KEY";
		$rows=json_decode(file_get_contents($url, false, stream_context_create($arrContextOptions)))->rows;
		$status=$rows[0]->elements[0]->status;
		
		if(boolval(strcmp($status,"OK"))){
			/*echo '<script>if(confirm("Enter valid city!!!")){
			window.location.href="register.php";		
			}else{
			window.location.href="home.php";
			}</script>';
		}else{
			$dist_str=$rows[0]->elements[0]->distance->text;
			$dist_st=str_replace(',','',$dist_str);		
			$dist_s=str_replace(' mi','',$dist_st);
			$distance=floatval($dist_s);
			
		*/
			$distance=85;
		
			
			$score=$percentage*0.4 + $distance*0.6;
	
			$sql="INSERT INTO users (Email,Password) VALUES ('$email','$pwd');";
			mysqli_query($conn,$sql);

			$sql="INSERT INTO info (Name,Email,Password,City,Distance,Contact,Gender,Percentage,Quota,Score)
			VALUES ('$name','$email','$pwd','$city','$distance','$contact','$gender','$percentage','$quota','$score');";
			mysqli_query($conn,$sql);
			truncate();
			sort_m($seat);

			$sql="SELECT User_ID FROM info WHERE Contact='$contact';";
			$sql_run=mysqli_query($conn,$sql);
			$User_ID_AR=mysqli_fetch_assoc($sql_run);
			$User_ID=$User_ID_AR['User_ID'];
			echo "<h1>Successfully Registered!!</h1>";
			echo "<h3>Your Registration id =".$User_ID."</h3>";
			echo '<h2>Use your email-id to login <a href="login.php">here<a></h2>';

		//}

	}
}
function truncate(){
	include 'dbha.php';

	$sql="TRUNCATE TABLE merit;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE finalist;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE waiting;";
	$run=mysqli_query($conn,$sql);

}
function sort_m($seat){
	include 'dbha.php';
	
	$sql = "SELECT * FROM info ORDER BY Score DESC;";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($run);
	for($i=1;$row=mysqli_fetch_assoc($run);$i++){
				
		$User_ID=$row['User_ID'];
		$name=$row['Name'];
		$email=$row['Email'];
		$city=$row['City'];
		$distance=$row['Distance'];
		$contact=$row['Contact'];
		$gender=$row['Gender'];
		$percentage=$row['Percentage'];
		$quota=$row['Quota'];
		$score=$row['Score'];
		$sql="INSERT INTO merit(User_ID,Name,City,Email,Distance,Contact,Gender,Percentage,Quota,Score) 
		VALUES ('$User_ID','$name','$city','$email','$distance','$contact','$gender','$percentage','$quota','$score');"; 
		mysqli_query($conn,$sql);	
	}

	
	$seat_m=$seat*0.5;
	$seat_fm=$seat*0.5;
	
	$gen_m=$seat_m*0.7;
	$obc_m=$seat_m*0.2;
	$sc_m=$seat_m*0.1;
	
	$gen_fm=$seat_fm*0.7;
	$obc_fm=$seat_fm*0.2;
	$sc_fm=$seat_fm*0.1;

	$count=array('male_gen'=>1,'male_obc'=>1,'male_sc'=>1,'female_gen'=>1,'female_obc'=>1,'female_sc'=>1);
	
	$sql="SELECT * FROM merit";
	$run=mysqli_query($conn,$sql);
	$row_cnt=mysqli_num_rows($run);
	
	for($i=1;$i<=$row_cnt;$i++){
		$sql="SELECT * FROM merit WHERE Merit_Rank='$i';";
		$run=mysqli_query($conn,$sql);
		$arr=mysqli_fetch_assoc($run);
		
		$Merit_Rank=$arr['Merit_Rank'];
		$User_ID=$arr['User_ID'];
		$name=$arr['Name'];
		$email=$arr['Email'];
		$city=$arr['City'];
		$distance=$arr['Distance'];
		$contact=$arr['Contact'];
		$gender=$arr['Gender'];
		$percentage=$arr['Percentage'];
		$quota=$arr['Quota'];
		$score=$arr['Score'];
	
		
		if($gender=="male"){
			if($quota=="gen"){
				if($count['male_gen']<=$gen_m){
					
					$sql="INSERT INTO finalist (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['male_gen']++;
				}else{
					$sql="INSERT INTO waiting (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['male_gen']++;
				}
			}
			else if($quota=="obc"){
					
				if($count['male_obc']<=$obc_m){
					
					$sql="INSERT INTO finalist (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['male_obc']++;
				}else{
					$sql="INSERT INTO waiting (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['male_obc']++;
				}
			}
			else if($quota=="sc"){
					
				if($count['male_sc']<=$sc_m){
					
					$sql="INSERT INTO finalist (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['male_sc']++;
				}else{
					$sql="INSERT INTO waiting (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['male_sc']++;
				}
			}
		}else if($gender=="female"){

			if($quota=="gen"){
					
				if($count['female_gen']<=$gen_fm){
					
					$sql="INSERT INTO finalist (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['female_gen']++;
				}else{
					$sql="INSERT INTO waiting (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['female_gen']++;
				}
			}
			else if($quota=="obc"){
					
				if($count['female_obc']<=$obc_fm){
					
					$sql="INSERT INTO finalist (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['female_obc']++;
				}else{
					$sql="INSERT INTO waiting (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['female_obc']++;	
				}
			}
			else if($quota=="sc"){
					
				if($count['female_sc']<=$sc_fm){
					
					$sql="INSERT INTO finalist (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['female_sc']++;
				}else{
					$sql="INSERT INTO waiting (Merit_Rank,User_ID,Name,Email,City,Distance,Contact,Gender,Percentage,Quota,Score) 
					VALUES ('$Merit_Rank','$User_ID','$name','$email','$city','$distance','$contact','$gender','$percentage','$quota','$score');"; 
					mysqli_query($conn,$sql);
					$count['female_sc']++;
				}
			}
		}
	}
}
?>