<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
        <link rel="stylesheet" href="css/myStyles.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>  
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
       
<h3><?php echo "School";?></h3>

<?php 

session_start(); // start session to be able to use $_SESSION variable 
//unset($_SESSION["dataRow"]);   // clear session row
//unset($_SESSION["dataColumn"]);// clear session column
// all my predefined functions


function buildSessionData($inputs){
    if(!isset($_SESSION["dataRow"])) $_SESSION["dataRow"]=array();
    if(!isset($_SESSION["dataColumn"])) $_SESSION["dataColumn"]=array();
    if(isset($_POST) && !empty($_POST)){
        //print_r($_POST);
        $dataRow=array();
        $dataColumn=$_SESSION["dataColumn"];
        foreach($inputs as $field=>$label){
            if(isset($_POST[$field])){
                // rows
                $dataRow[$field] =  $_POST[$field];
                // columns 
                if(!isset($dataColumn[$field])) 
                    $dataColumn[$field]=array();
                array_push($dataColumn[$field],$_POST[$field]);
            }
        }
        array_push($_SESSION["dataRow"],$dataRow);
        $_SESSION["dataColumn"]=$dataColumn;
    }

// if($_POST['click'] == "clear"){
//     unset($_SESSION['dataRow']);
//     unset($_SESSION['dataColumn']);

//     echo "success";
// }

// if (isset($_POST[''])) { 
//         session_unset($_SESSION['dataRow']); 
//         session_unset($_SESSION['dataColumn']);
//         session_destroy(); 
//         echo 'you have been logged out.';
// }


        // session_destroy();    //to destroy the session
}


function buildTableHeaderWithInput($enableTableHeader=0){
    $inputs=array(
            "id"=>"Id",
            "name"=>"Name",
            "address"=>"Address",
            "class_num"=>"Class Number",
            "grade"=>"Grade",
        );
    if($enableTableHeader){
        $labels=array_values($inputs);
        return array_merge(["index"], $labels);
    }
    return $inputs;
}

/////////---| function for inserting bg-color |---/////////////// 

function applyChangeTableDataValues($text){
    $arr=['a','A'];
    foreach($arr as $value){
        $text=str_replace($value,"<span class='yellow'>".$value."</span>",$text);
    }   
    return $text;
}


function array_sort($arr,$column,$order="ASC"){
    $sortedArray=[];
    if(isset($arr[$column])){
        $orderedValues=$arr[$column];
    }else{
        $orderedValues=array_column($arr,$column);
    }
    if($order=="ASC"){
        sort($orderedValues);
    }else{
        rsort($orderedValues);
    }
    foreach($orderedValues as $value){
        if(isset($arr[$column])){
            foreach($arr[$column] as $index=>$col){
                if($col==$value){           
                    foreach($arr as $key=>$col){
                        if(!isset($sortedArray[$key])) $sortedArray[$key]=array();
                        array_push($sortedArray[$key],$arr[$key][$index]);
                    }
                }
            }
        }else{
            foreach($arr as $row){
                if($row[$column]==$value){
                    array_push($sortedArray,$row);
                }
            }
        }
    }
    return $sortedArray;
}
?>



<?php 
// All my logic 
$inputs = buildTableHeaderWithInput(); 
$tableHeaders = buildTableHeaderWithInput(1);
buildSessionData($inputs);
$tableDataRows = $_SESSION["dataRow"];
$tableDataColumns = $_SESSION["dataColumn"];
$sortColumn = 'grade';
?>


   <!--  <div class="fullRow">
        <form method="POST" >
            <?php foreach($inputs as $field=>$label){?>
                <label><?php echo $label;?></label>
                <input type='text' name="<?php echo $field;?>" />
                <br>
            <?php }?>
            <button type='submit'><?php echo "Save";?></button>
        </form>
    </div>

<br/>
<div class="clearStyle"></div> -->

<!--\\\\\\\\\\\\\\\\ Start Form//////////////////-->

<div class="container">
    <div class="row">
        <div class="col-6-lg">
            <form method="POST" class="needs-validation" novalidate>
              
                    <?php foreach($inputs as $field=>$label){?> 
                      <label for="validationCustom01"><?php echo $label;?></label>
                      <input type="text" name="<?php echo $field;?>" class="form-control" id="validationCustom01" placeholder=""  required>
                      
                      <?php }?>
             
              <button class="btn btn-primary" type="submit"><?php echo "Submit form";?>
              </button>
            </form>   
    
        </div>  <!-- End col -->
   
<?php
    /* */
    // multidiminsion array as data column  
?>

<!--\\\\\\\\\\\\\\\\\ Start Table /////////////////-->
<div class="col-6-lg">

     <div class="dataRow">

        <h3>MultiDiminsion Array Column</h3>
        <table class="table" style="margin-left: 130px;">
           
        <thead class="thead-dark">
            <tr>
            <?php for($i=0;$i<count($tableHeaders);$i++):?>
                <th><?php echo $tableHeaders[$i]; ?></th>
            <?php endfor;?>
            </tr> 
        </thead> 

            <?php 
            $firstColumn=key($tableDataColumns);
            $counter=isset($tableDataColumns[$firstColumn])?count($tableDataColumns[$firstColumn]):0;
            for($index=0;$index<$counter;$index++):?>
            <?php 
                    $gradeClass="";
                    if($tableDataColumns["grade"][$index]==100){
                        $gradeClass="violet";
                    }
                    elseif($tableDataColumns["grade"][$index]>60){
                        $gradeClass="green";
                    }
                    elseif($tableDataColumns["grade"][$index]>50){
                        $gradeClass="yallow";
                    }

                    else{
                        $gradeClass="red";
                    }
            ?>
            <tr>
                <td><?php echo ($index+1);?></td>
            <?php foreach($tableDataColumns as $key=>$colData):?>
                <td class="<?php if($key=="grade") echo $gradeClass;?>"><?php echo applyChangeTableDataValues($colData[$index]);?></td>
            <?php endforeach;?> 
            </tr>
            <?php endfor;?>
        </table>
    </div>
</div><!-- end col-6 -->
 </div><!-- end row -->
</div> <!-- end container -->

             <!--\\\\\\\\\\\\\\\\\ End Table /////////////////-->










<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>













        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.masonry.min.js"></script>

        <!--slick slide js -->
        <script src="css/slick/slick.js"></script>
        <script src="css/slick/slick.min.js"></script>


        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/oppear_1.1.2.min.js" type="text/javascript"></script>
</body>
</html>
