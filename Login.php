<!-- FOR CAT:
NEED TO INSERT PHP HERE
If you need a tutorial, go to this link: https://bootstrapbay.com/blog/working-bootstrap-contact-form/
-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container"> <!--Puts everything into the middle of the screen-->

      <form class="form-signin" action="checklogin.php" method="post"> <!--Formatting thing.  Adds the whitespace-->
        <h2 class="form-signin-heading">Please sign in</h2> <!--Title on top-->
        <label for="inputID" class="sr-only">UserID</label>  <!--Stuff for screen readers.  Doesn't appear to humans-->
        <input name = "inputID" type="text" id="inputID" class="form-control" placeholder="Staff/StudentID" required autofocus>
        <!--'name' allows php to get data, 'type' is formatting, 'id' is for clickability
        'class' is another formatting direction, 'placeholder' is text that appears in input-->
        <label for="inputPassword" class="sr-only">Password</label>
        <input name = "password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <!--Above code for button-->
        
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <!-- Will be used to display an alert to the user-->
            </div>
        </div>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    
  </body>
</html>