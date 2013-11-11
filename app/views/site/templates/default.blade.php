<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for Team Mission Impossible, FRC Team 28">
    <meta name="author" content="FRC Team 28">

    <title>FRC Team 28</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">FRC Team 28</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#about">About Us</a></li>
            <li><a href="#services">Meet The Team</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
          <!-- <form class="navbar-form" role="search" action="search" method="POST">
            <div class="input-group col-md-4 navbar-right">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
          </form> -->
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-lg-8">

          @yield('content')

        </div>

        <div class="col-lg-4">
          <div class="well">
            <p>Placeholder!</p>
          </div><!-- /well -->
          <div class="well">
            <h4>Popular Tags</h4>
            <!-- We'll have some logic here to rank the most popular tags. Or wait, logic shouldn't be in
                 the template. That should really be put in the HomeController somewhere.
                 Maybe a rankTags function? -->
          </div><!-- /well -->
          <div class="well">
            <h4>Side Widget Well</h4>
            <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
          </div><!-- /well -->
        </div>
      </div>

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>All Content Released Under The GNU GPLv3 License</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
