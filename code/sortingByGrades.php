
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php page</title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>apps-contractors</title>
    
        <meta name="description" content="">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/iconfont.css">
        <link rel="stylesheet" href="css/slick/slick.css">
        <link rel="stylesheet" href="css/slick/slick-theme.css">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        
        <!--For Plugins external css-->
        <link rel="stylesheet" href="css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
       <style type="text/css">
        	h3{
	        	 color: #4f5b93;
	        	 font-size: 2.714rem;
	      	     padding-bottom: 30px;
	      	     text-align: center;
        	}

        	tr.red{
        		background-color: #f5c6cb;
        	}
        	.btn{
        		    background-color:#4f5b93;
        		    color: #fff;
        	}

        	.navbar-brand{
        	 	    padding-right: 780px;

        	}
        	.user{
        		    margin-bottom: -16px;
        	}


        </style>

        </head>
    <body>

   <!-- Nav -->

<nav class="navbar  navbar-dark bg-dark">
	
	<div class="navbar-brand " href="#">
		<img src="img/php.png" style=" width:128px ">
    </div>

    <div class="user">
    	
    	<h4>Mohamed Ramadan</h4>
    	
	</div>	  
</nav> 	

   <!-- End Nav -->



  								 <!-- Start Array -->

<?php     

$school=array(

	0 => array(
		'No'=>1,
		'Id' => 15335,
		'Name' => 'Mohamed',
		'Address' =>'Cairo',
		'Class' => 1,
		'Grades'=>60,
	 ),

	1 => array(
		'No'=>2,
		'Id' => 15336,
		'Name' => 'Omar',
		'Address' =>'Aswan',
		'Class' => 2,
		'Grades'=>80,

	 ),

	2 => array(
		'No'=>3,
		'Id' => 15337,
		'Name' => 'Salah',
		'Address' =>'Alex',
		'Class' => 1,
		'Grades'=>100,

	 ),

	3 => array(
		'No'=>4,
		'Id' => 15338,
		'Name' => 'Hamza',
		'Address' =>'Luxor',
		'Class' => 2,
		'Grades'=>10,

	 )

 );

?>

<!-- /////////////////////////////////////////////////////// -->


  									 <!-- Start Table -->

 <div class="container">
	<h3><?='School Table';?></h3>
	<table class="table">
	


	    <?php
$index=0;
			echo"<pre>";
						     
			function add_spaces($s){ return str_pad($s, 20); }
			function new_line(){ return "\r\n"; }

//           Sorting function
		
			function sortByOrder($a, $b) {
			    return $a['Grades'] - $b['Grades'];
			}

			usort($school, 'sortByOrder');
	


				if(count($school))                // array not empty
				{
				    foreach($school[0] as $k => $v) // print headers
								   	    
						echo add_spaces($k);
					  	echo new_line();

					  	foreach($school as $line)       // main loop
			  			{
				   		    foreach($line as $v)

				     	    	echo add_spaces($v);
				    			echo new_line();
				   		    
				   		    

			  			}


				}

			echo"</pre>";		

		?>


<!-- <form action="sortingByGrades.php" method="post">
    <input type="submit" name="test" id="test" value="SORT" /><br/>

</form> -->

<a class="btn btn-primary" href="Task2.php" role="button">Back</a>




	<thead>
		    <tr> </tr>
		</thead>

	        <tbody>

	    	</tbody>

	</table>
</div>
  									 <!-- End Table -->


    </body>

</html>

