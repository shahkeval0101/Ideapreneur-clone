<?php
  require_once("config.php");
  // echo "hii";
  $cat=$_GET["cat"];
  // echo $cat;

  $limit = 5;
  if (isset($_GET["page"])) {
    	$page  = $_GET["page"];
  	}
  	else{
    	$page=1;
  	};
  $start_from = ($page-1) * $limit;
  $sql="SELECT * FROM main where Category='$cat' LIMIT $start_from, $limit";
  $result=mysqli_query($conn,$sql);
  if(!$result)
  {
  	echo "failed to execte query";
  	die("Can't fetch data from database");
  }

  require_once("navbar-main.php");


$map=array("Tech"=>"l2","Innovation"=>"l3", "Interviews"=>"l4", "Business"=>"l5", "Women"=>"l6", "Stories"=>"l7", "Governance"=>"l8");

?>

	<script type="text/javascript">
		$(document).ready(function(){
				$("#l1").attr('class', 'nav-item');
				$("#<?php echo"$map[$cat]"?>").attr('class', 'nav-item active');
			});

	</script>


  <div class="container" style="margin-top:1rem;">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo"$cat" ?></li>
      </ol>
    </nav>
    <div class="row content">
      <div class="col-sm-8">
        <?php while($row=mysqli_fetch_assoc($result))
          { ?>
          <div class="row">

            <div class="row">
              <h3 style="font-family:Impact;">  <?php echo $row["Heading"];?>   </h3>
            </div>

            <div class="w-100"></div>
            <div class="row ">
              <h6><strong>Author : </strong> <?php echo $row["Author"];?></h6>
            </div>

            <div class="w-100"></div>
            <div class="row">
              <h6> <strong>Date : </strong> <?php echo $row["Timestamp"];?></h6>
            </div>

            <div class="w-100"></div>

          <?php
            $id_no = $row["Id"];
            $sql = "SELECT * FROM main WHERE Id = $id_no";
            $sth = $conn->query($sql);
            $result_img=mysqli_fetch_array($sth);
            echo '<img class="img-fluid mx-auto d-block img-margin" width="500" height="300" src="data:image/jpeg;base64,'.base64_encode( $result_img['Images'] ).'"/>';
          ?>

          <div class="w-100"></div>
          <h6><strong>Tags : </strong> </h5>
          <?php
            $str = $row["Tags"];
            $arr =  explode(" ", $str);
            //print all the value which are in the array
            foreach($arr as $v){ ?>
              <a href="category.php?cat=<?php echo "$v" ?>">
                <button style="margin:0.1rem;"type="button" class="btn btn-danger btn-sm"><?php echo $v; ?></button>
              </a>
          <?php }?>

          <br><br>
          <p><strong>Content:</strong>
          <?php $x=$row["Content"];
          $i=0;
          $y=strlen($x);
          if($y<=510)
          {
            echo $x;
          }
          else
          {
            echo substr($x,0,500);
            while($x[$i+501]!=" ")
            {
              if($i>10)
              {
                break;
              }
              if($y=$i+502)
              {
              break;
              }
            $i++;
            }
          }
          echo"...";
          ?>
          </p>

        <div class="w-100"></div>
        <div class="row">
        <?php $link="read-more.php?t=".$row["Id"];?>
        <p>
          <a href=<?php echo "'".$link."'"?> class="btn-custom">
              <button type="button" class="btn btn-info">Read More </button>
          </a>
        </p>
      </div>

    </div>
    <div class="w-100"></div>
        <hr>
        <?php } ?>
        </div>



      <?php include('sidebar.php'); ?>
    </div>
    <!-- first row ends here -->

  <div class="w-100"></div>

</div>
  <!-- container ends -->

  <nav aria-label="...">
  <ul class="pagination justify-content-center">
          <!-- <li><a href="#">&lt;</a></li> -->
          <?php
            $result_db = mysqli_query($conn,'SELECT COUNT(Id) FROM main WHERE Category="$cat"');
            $row_db = mysqli_fetch_row($result_db);
            $total_records = $row_db[0];
            $total_pages = ceil($total_records / $limit);
             // echo  $total_pages;
            $pagLink = "";
            for ($i=1; $i<=$total_pages; $i++) {
                if($page!=$i)
                {
                  $pagLink .= "<li class='page-item'><a class='page-link' href='category.php?cat=".$cat."&page=".$i."'>".$i."</a></li>";
                }
                else
                {
                  $pagLink .= "<li class='page-item active'><a class='page-link' href='category.php?cat=".$cat."&page=".$i."'>".$i."<span class='sr-only'>(current)</span></a></li>";
                }
            }
            echo $pagLink;
          ?>
          <!-- <li><a href="#">&gt;</a></li> -->
        </ul>
      </nav>
  <?php include('footer.php'); ?>
