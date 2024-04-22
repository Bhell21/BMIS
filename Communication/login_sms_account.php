<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Announcements</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" type="text/css" href=""css/index.css>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
      <link rel="stylesheet" href="css/bootstrap.css"/>
      <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
      <script src="js/jquery2.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Custom CSS -->
      <link href="css/index.css" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <div class="container">
      <div class="jumbotron">
         <center>
            <h2><span class="glyphicon glyphicon-lock"></span>Login</h2>
            <form action="login_sms_account1.php" method="POST">
               <label>Username/E-mail&nbsp;&nbsp;</label><input type="text" name="email" placeholder="Enter Email Here"required><br><br>
               <label>Password&nbsp;&nbsp;</label><input type="password" name="password" placeholder="Enter Password Here" required><br><br>
               <input type="submit" value="SUBMIT"<button class= "btn btn-success active"></button>
            </form>
         </center>
         <strong>
            <a href="add_sms_account.php">
               <button class= "btn btn-info">
                  <h6><span class="glyphicon glyphicon-plus"></span> Add SMS Account</h6>
               </button>
            </a>
         </strong>
      </div>
   </div>
</html>