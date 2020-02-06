<html>
    <head>
        <meta charset="UTF-8">
        <title>Php page</title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>school</title>
    
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


        <nav class="navbar  navbar-dark bg-dark">
    
    <div class="navbar-brand " href="#">
        <img src="img/php.png" style=" width:128px ">
    </div>

    <div class="user">
        
        <h4>Mohamed Ramadan</h4>
        
    </div>    
</nav> 



        <form method="post" action=''>

            <?php 
                    session_start() ;

            $inputs=array(
                    "id"=>"Id",
                    "name"=>"Name",
                    "address"=>"Address",
                    "class_no"=>"Class Number",
                    "grade"=>"Grade",
                     ); 
            ?>

            <?php foreach($inputs as $key=>$label){ ?>
            
            <lable><?php echo $label;?></lable>
            <input type='text' name=" <?php echo $key;  ?>"/>
            <br>


            <?php }?>
                        <!--must be inside form-->

            <button type='submite'><?php echo "save";?></button> 

        </form> 


        <?php
                if(isset($_POST[$key]))


        if(isset($_POST) && !empty($_POST))
        {

        print_r($_POST); $data=array();
        foreach($inputs as $key=>$label)
        {
                if(isset($_POST[$key]))
                {
                    $data[$key]=$_POST[$key];

                }
         }
<!--          array_push($_SESSION,$data);
 -->
          array_push($_SESSION["dataRow"],$data);

         }


        $tableDataRows= $_SESSION;   <!-- delete rows array -->


        ?>



















    </body>
</html>