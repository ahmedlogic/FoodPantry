<?php
  ini_set("display_errors", "on");
  error_reporting(E_ALL);
  include "_header.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png"> -->

    <title>FoodNotBombs - Add Client</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link type="text/css" href="css/genForm.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.html">FoodNotBombs</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

   <!-- <center><img class="img-header" src="img/header/title.png" /></center> -->
    
    <div class="container">
      <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>

           <form class="form-genForm" method="post" action = "addProductHandler.php">
                <fieldset>

                <!-- Form Name -->
                <legend>Please enter product information.</legend>

                <!-- Text input-->
                <div class="control-group">
                  <label class="control-label" for="textinput">Name</label>
                    <input id="textinput" type="text" placeholder="Name" name = "name" class="input-xlarge">
                </div>

                <div class="control-group">
                  <label class="control-label" for="selectbasic">Source</label>
                    <?php echo makeSourceDropDown(); ?>
                </div>

                <!-- Text input-->
                <div class="control-group">
                  <label class="control-label" for="textinput">Cost $</label>
                    <input id="textinput" type="text" placeholder="Cost" name = "cost" class="input-xlarge">
                </div>

                <!-- Button -->
                <div class="control-group">
                  <label class="control-label" for="singlebutton"></label>
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save Product</button>
                </div>

                </fieldset>
                </form>


        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    
     
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
