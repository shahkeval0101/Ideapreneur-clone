<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
  		$(document).ready(function(){
  				$("#l1").attr('class', 'nav-item');
  				$("#k2").attr('class', 'nav-item active');
          $("#m2").attr('class', 'nav-item active');
  			});

  	</script>
  </head>

  <body>

      <?php include('navbar-main.php'); ?>

      <div class="container">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Advertise</li>
          </ol>
        </nav>

        <div class="jumbotron">


          <h1 class="display-4">Advertise with us!</h1>
          <p class="lead">Advertise on Ideapreneurindia, India's leading startup website and reach out to thousands of our daily visitors</p>
          <hr class="my-4">
          <p>Fill in the following form to let us know more about your needs.</p>


          <form>

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name"  placeholder="Enter Full Name">
              <small id="name" class="form-text text-muted">First Middle Last</small>
            </div>

            <div class="form-group">
              <label for="org" >Organization</label>
              <input type="text" class="form-control" id="org" placeholder="Organization Name">
            </div>

            <div class="form-group">
              <label for="org-add" >Organization Address</label>
              <input type="text" class="form-control" id="org-add" placeholder="Organization Address">
            </div>

            <div class="form-group">
              <label for="phno">Phone No</label>
              <input type="tel" class="form-control" id="phno" value="+91">
            </div>

            <div class="form-group">
              <label for="Email">Email address</label>
              <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="know">How did you come to know about us?</label>
              <select  class="form-control" id="know">
                <option>Friends</option>
                <option>Word of mouth</option>
                <option>Social media</option>
                <option>Our executives</option>
                <option>Others</option>
              </select>
            </div>

            <div class="form-group">
              <label for="extra">Please elaborate your advertisement.</label>
              <textarea class="form-control" id="extra" rows="3"></textarea>
            </div>

            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


      </div>
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
