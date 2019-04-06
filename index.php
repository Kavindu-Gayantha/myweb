<?php 
include 'connection.php';
echo 'conneciton success';
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>SKGC</title>
	<link rel='stylesheet' href='indexcss.css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://www.gstatic.com/firebasejs/5.9.1/firebase.js"></script>
<script>
  // Initialize Firebase
  // var config = {
  //   apiKey: "AIzaSyCafSu3BUkeWG1zR6FJQtqsXVsB1TjtSN0",
  //   authDomain: "my-cv-2a1ca.firebaseapp.com",
  //   databaseURL: "https://my-cv-2a1ca.firebaseio.com",
  //   projectId: "my-cv-2a1ca",
  //   storageBucket: "my-cv-2a1ca.appspot.com",
  //   messagingSenderId: "525326355975"
  // };
  // firebase.initializeApp(config);
</script>
</head>
<body>
	<header>
		<h1 id='displayName'>Kavindu Gayantha</h1>
		<!-- <h4 id='desctiption'>Undergraduate student of software engineering at university of kelaniya</h4>
	 --></header>
	<nav>
		<!-- <img id='idImage' src='IMG-20181217-WA0139.jpg'>
		 --><!-- <div class="container"> -->
 		 	<img src="IMG-20181217-WA0139.jpg" id='idImage'>
 		 	<div id='imageCaption'>
 		 	Undergraduate of Software Engineering at University of Kelaniya</div>

			<div id='socialMedia'>
			<a href="https://www.facebook.com/profile.php?id=100008929308296" class="fa fa-facebook"></a><!-- </li>
				<li> -->
			<a href=" https://www.linkedin.com/in/kavindu-gayantha-73478615b/" class="fa fa-linkedin"></a><!-- /li>
			</ul> -->
			<a href="https://github.com/Kavindu-Gayantha" class="fa fa-github" ></a>
			</div>
  				<!-- <div class="overlay">
    				<div class="text">undergraduate of software engineering at university of kelaniya</div>
  				</div>
		</div> -->

		<!-- <ul id='navList'>
			<li><button class='button button1'>profile</button></li>
			<li><button class='button button2'>education</button></li>
			<li><button class='button button3'>skills</button></li>
			<li><button class='button button4'>awards</button></li>
			<li><button class='button button5'>interested</button></li>
		</ul> -->
		<div class="btn-group">
  		<button class="button" onclick='document.getElementById("details-table").style.display="block"'>Profile</button>
  		<button class="button" onclick='document.getElementById("educationDetails").style.display="block"'>Education</button>
  		<button class="button">Awards & achivements</button>
  		<button class="button">Skills</button>
		</div>
	</nav>
	<section>
		<?php echo "<div id='details-table'>";
			
			$sql = 'SELECT * FROM DBprofile';
			$result= $conn->query($sql);
			if($result -> num_rows > 0 )
			{
				while($row = $result -> fetch_assoc())
				{
					echo "<tr><td>" .$row['Name']."</td><td>" . $row['Address']."</td><td>".$row['contact']."</td><td>".$email."</td><td>".$designation."</td><td>";
				}
				echo "</div>";
			}
			
			else
			{
				echo 'o results';

			}
			$conn-> close();

			?>

			<!-- <table><tr><th>Name</th><td>Kavindu gayantha chandramal ariyarathna</td></tr>
				   <tr><th>Address</th><td>no 495/B,Mahinda Mawatha,Pitipana north,Homagama</td></tr>
				   <tr><th>contact number</th><td>0718732730</td></tr>
				   	<tr><th>email</th><td><a href="https://mail.google.com">s.kavindu.gayantha@gmail.com</a></td></tr>
				   	<tr><th>designation</th><td>undergraduate of university of kelaniya</td></tr>
			</table>
			<table id="educationDetails">
				<tr><td>school</td><td>president's college maharagama</td><tr>
					<td>secondary </td><td>university of kelaniya</td><tr>
					<td>extra</td><td>diploma in english</td><tr>
					<td>results O/L</td><td>6A, 2B, c</td><tr>
					<td>results A/L </td><td> BBB</td>
				</tr> -->
			</button>
			
			<!-- <ul style="list-style-type: none">
				<li> -->
			<!-- -->
 
	</section>
	<footer>
		<h5 id='footerNote'>copyright c allright received</h5>
	</footer>
</body>
</html>