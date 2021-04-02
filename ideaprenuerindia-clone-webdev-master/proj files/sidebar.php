  <div class="col-sm-4 sidenav" style="background-color: #343a40; height:120%">
    <div class="sidebar-box pt-md-4">
      <?php include("search.html");?>
    </div>
  <!-- <br>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search Blog..">
    <span class="input-group-btn">
      <button class="btn btn-default" type="button">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </span>
  </div> -->
  <br><br>

  <h4 style="color: #f8f9fa;">Recent articles/ stories</h4>

  <nav class="navbar bg-light">
    <ul class="navbar-nav">
    <?php
    $sql="SELECT * FROM main order by Timestamp desc LIMIT 8";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
      echo "failed to execte query";
      die("Can't fetch data from database");
    }
     while($row=mysqli_fetch_assoc($result))
      {
        $path = "read-more.php?t=";
        $path = $path.$row["Id"];
    ?>
      <li class="nav-item">
        <a class="nav-link " href=<?php echo $path ?> >
            <?php echo $row["Heading"]; ?>
        </a>
      </li>
      <?php } ?>
    </ul>
  </nav>

<br>

  <h4 style="color: #f8f9fa;">Categories</h4>
    <nav class="navbar bg-light" style="margin-bottom:1rem" >
      <!-- Links -->
      <ul class="navbar-nav">
        <li id ="l1"class="nav-item active">
          <a class="nav-link " href="homepage.php">HOME</a>
        </li>
        <li id ="l2"class="nav-item">
          <a class="nav-link" href="category.php?cat=Tech">TECH</a>
        </li>
        <li id ="l3"class="nav-item">
          <a class="nav-link" href="category.php?cat=Innovation">INNOVATION</a>
        </li>
        <li id ="l4"class="nav-item">
          <a class="nav-link" href="category.php?cat=Interviews">INTERVIEWS</a>
        </li>
        <li id ="l5"class="nav-item">
          <a class="nav-link" href="category.php?cat=Business">BUSINESS</a>
        </li>
        <li id ="l6"class="nav-item">
          <a class="nav-link" href="category.php?cat=Women">WOMEN</a>
        </li>
        <li id="l7" class="nav-item">
          <a class="nav-link" href="category.php?cat=Stories">STORIES</a>
        </li>
        <li id="l8" class="nav-item">
          <a class="nav-link" href="category.php?cat=Governance">GOVERNANCE</a>
        </li>
      </ul>
  </nav>
</div>
