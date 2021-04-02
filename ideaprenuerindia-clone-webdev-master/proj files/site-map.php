<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Site map</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
  		$(document).ready(function(){
  				$("#l1").attr('class', 'nav-item');
  				$("#k2").attr('class', 'nav-item active');
          $("#m6").attr('class', 'nav-item active');
  			});

  	</script>
  </head>

  <body>

      <?php include('navbar-main.php'); ?>

      <div class="container">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Site map</li>
          </ol>
        </nav>

        <div class="jumbotron">
          <h1 class="display-4">Site map</h1>
          <p class="lead">A Site map to make sure you won't get lost!</p>
          <hr class="my-4">
          <p>
            <ul >
              <li  class=""><a href="..homepage.php">Home</a></li>
              <li ><a href="">Tech</a></li>
              <li ><a href="">Startup</a></li>
              <li ><a href="">Business</a></li>
              <li ><a href="">Inspiration</a></li>
              <li ><a href="">Women</a></li>
              <li ><a href="">Videos</a></li>
              <li ><a href="">Stories in pictures</a></li>
              <li ><a href="">News</a></li>
              <li ><a href="">Startup funding and investment</a></li>
            </ul>
          </p>


      </div>
      <div class="row-fluid">
        <?php include('footer.php'); ?>
      </div>

      <!-- this is font awesome link for adding icons in navbar -->
      <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>
