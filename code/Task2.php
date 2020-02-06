
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php page</title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
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
        	#test{
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

$array_subjected_to_search=array(

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


$key = array_search('Mohamed', array_column($array_subjected_to_search, 'Name'));
var_dump ($array_subjected_to_search[$k]);
?>


<!-- /////////////////////////////////////////////////////// -->

	  
		   
 


  									 <!-- Start Table -->

 <div class="container">
	<h3><?='School Table';?></h3>
	<table class="table">
	


	    <?php

			// echo"<pre>";
						     
			// function add_spaces($s){ return str_pad($s, 20); }
			// function new_line(){ return "\r\n"; }

		 //    str_replace('Mohamed', 'Shaher',$school);

			// 	if(count($school))                // array not empty
			// 	{
			// 	    foreach($school[0] as $k => $v) // print headers
								   	    
			// 			echo add_spaces($k);
			// 		  	echo new_line();

			// 		  	foreach($school as $line)       // main loop
			//   			{
			// 	   		    foreach($line as $v)


			// 	     	    	echo add_spaces($v);
			// 	    			echo new_line();

			//   			}


			// 	}

			// echo"</pre>";		

		?>

<form action="sortingByGrades.php" method="post">
    <input class="btn btn-primary"  type="submit" name="test" id="test" value="SORT" /><br/>

</form>

<!-- <?php

// function sortByOrder($a, $b) {
// 	    return $a['Grades'] - $b['Grades'];
// 	}

// 	usort($school, 'sortByOrder');

// if(array_key_exists('test',$_POST)){
//    sortByOrder();
// }

?> -->

<!-- <?php

	// $search  = array('A', 'B', 'C', 'D', 'E');
 //    $replace = array('B', 'C', 'D', 'E', 'F');
 //    $subject = 'A';
 //    echo str_replace($search, $replace, $subject);

?>
 -->




<!--//////////// Sorting Function ///////////////-->

	<!-- function sortByOrder($a, $b) {
	    return $a['Grades'] - $b['Grades'];
	}

	usort($school, 'sortByOrder'); -->


	<thead>
		    <tr> </tr>
		</thead>

		  	<tbody>


		  	<!-- 	<tr class="<?php echo ($school[$index]['Class']==2)? 'red':''; ?> ">
		 	    	<th scope="row"></th>
			        <td ><?php echo $school[$index]['Id'] ?>  </td>
			        <td><?php echo $school[$index]['Name'] ?></td>
			        <td ><?php echo $school[$index]['Address'] ?></td>
			        <td><?php echo $school[$index]['Class'] ?></td>
			        <td><?php echo $school[$index]['Grades'] ?></td>
			    </tr>
 -->

 
		  		


<!-- <?php 
    echo '<table>
       <tr><th>Rst</th><th>Marks</th></tr>
       <tr>
       <td>'.$k.'</td>
       <td>'.$v.'</td>


       </tr>
    	
    	</table>';
?>
  -->








					<!-- By using Variable $index -->
	  	<!-- <?php $index=0; ?>

 	    <tr class="<?php echo ($school[$index]['Class']==2)? 'red':''; ?> ">
 	    	<th scope="row"></th>
	        <td ><?php echo $school[$index]['Id'] ?>  </td>
	        <td><?php echo $school[$index]['Name'] ?></td>
	        <td ><?php echo $school[$index]['Address'] ?></td>
	        <td><?php echo $school[$index]['Class'] ?></td>
	        <td><?php echo $school[$index]['Grades'] ?></td>
	    </tr>
 -->

















	  </tbody>

	</table>
</div>
  									 <!-- End Table -->


    </body>

</html>

