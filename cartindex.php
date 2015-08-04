<?php
include 'cart.php';

?>
<html>
<head>
<title>
</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<style>
.boxed {
  border: 1px solid green ;
}
</style>
</head>
<body>
	  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MiniShoppingCart</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
   <div class="jumbotron">
      <div class="container">
        <h1>Shop</h1>
        <p>This is a just another shopping cart built in php for Art of living</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Feedback &raquo;</a></p>
      </div>
    </div>
<?php
cart();
product();

?>
<hr>

<footer>
        <p>&copy; Made By : Tannishk Sharma Supported by: Jitain </p>
      </footer>
</body>
</html>
