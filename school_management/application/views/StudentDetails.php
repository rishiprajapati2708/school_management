<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
  
	    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
  
        
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/crudproject/application/views/css/compie.css">
</head>
<body>



	<?php require('StudentNav.php'); ?>
	<?php 
	foreach ($value as $data) {
	 	$fn=$data->firstname;
	 	$ln=$data->lastname;
	 	$father=$data->father;
	 	$mother=$data->mother;
	 	$gender=$data->gender;
	 	$email=$data->email;
	 	$dept=$data->department;
	 	$add=$data->address;
	 	$year=$data->year;
	 } ?>
	
	 <div class="container">
	 	<div class="row">
	 		<div class="col-xl-2"></div>
	 		<div class="col-xl-8">
	 		
<ul class="list-group list-group-flush">
  <li class="list-group-item"><h3>Name:</h3>    <?php echo $fn.' '.$ln; ?>       </li>
  <li class="list-group-item"><h3>Father Name:</h3>    <?php echo $father ?>       </li>
  <li class="list-group-item"><h3>Mother Name:</h3>    <?php echo $mother?>       </li>
  <li class="list-group-item"><h3>Gender:</h3>    <?php echo $gender ?>       </li>
  <li class="list-group-item"><h3>Email:</h3>    <?php echo $email ?>       </li>
  <li class="list-group-item"><h3>Department:</h3>    <?php echo $dept  ?>       </li>
  <li class="list-group-item"><h3>Year:</h3>    <?php echo $year ?>       </li>
  <li class="list-group-item"><h3>Address:</h3>    <?php echo $add ?>       </li>
</ul>

	 		</div>
	 	
	 	</div>

	 </div>

<?php require('footer.php'); ?>

<script type="text/javascript" src="http://localhost/codeigniter/crudproject/application/views/js/compile.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/js/mdb.min.js"></script>
<script type="text/javascript" src="dropdown_firebasejs.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
</body>
</html>