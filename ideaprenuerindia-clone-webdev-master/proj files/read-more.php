<?php
require_once("config.php");
$id=$_GET["t"];
// echo $id;
$id=(int)$id;
$sql="SELECT * FROM main where Id='$id'";
$result=mysqli_query($conn,$sql);
if(!$result)
{
	echo "failed to execte query";
	die("Can't fetch data from database");
}
$row=mysqli_fetch_assoc($result);
require_once("navbar-main.php");
?>


<div class="container" style="margin-top:1rem;">
  <div class="row content">
    <div class="col-sm-8">

        <div class="row">
          <div class="row ">
            <h3 style="font-family:Impact;">  <?php echo $row["Heading"];?>   </h3>
          </div>
          <div class="w-100"></div>
          <div class="row">
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
	          echo '<img class="img-fluid mx-auto d-block" width="500" height="300" src="data:image/jpeg;base64,'.base64_encode( $result_img['Images'] ).'"/>';
	        ?>

        	<div class="w-100"></div>
        	<h5><strong>Tags : </strong> </h5>
        	<?php
	          $str = $row["Tags"];
	          $arr =  explode(" ", $str);
	          //print all the value which are in the array
	          foreach($arr as $v){
					 ?>
	        <a href="category.php?cat=<?php echo "$v" ?>">
	          <button style="margin:0.1rem;"type="button" class="btn btn-danger btn-sm"><?php echo $v; ?></button>
	        </a>
	    	<?php }?>

        <br><br>
        <p  ><strong>Content:</strong>
        <?php echo$row["Content"]; ?>

        <div class="w-100"></div>
			</div>
				<!-- commenting system -->
				<br><br><br>

					<div class="container ">
						<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

						<h1>Post Your Comment Below</h1>
						<div class="col-md-5">
							<input type="text" class="name form-control" placeholder="Name"><br>
							<textarea class="comment form-control"></textarea>
							<p>&nbsp;</p>
							<a href="javascript:void(0)" class="btn btn-primary submit">Submit</a>
						</div>
						<div class="clearfix"></div>
						<p>&nbsp;</p>
						<div class="comment_listing"></div>
					</div>
				<!-- </body>
				</html> -->
				<script type="text/javascript">
					function listComments()
						{
							var parent_id=<?php echo $row["Id"];?>;
							$.ajax({
								url:'comment_list.php',
								data:'&parent_id='+parent_id,
				        type:'post',
								success:function(res){
									$('.comment_listing').html(res);
								}
							})
						}
					$(function(){


						listComments();
						setInterval(function(){
							listComments();
						},5000);
						$('.submit').click(function(){
							var name = $('.name').val();
							var comment = $('.comment').val();
							var parent_id=<?php echo $row["Id"];?>;
				      $.ajax({
				        url:'save_comment.php',
				        data:'name='+name+'&comment='+comment+'&parent_id='+parent_id,
				        type:'post',
								success:function()
								{
									alert("Your comment has been posted");
									listComments();
								}
							})
						})
					})
				</script>
      <div class="w-100"></div>
      <hr>

    </div>

	<?php include('sidebar.php'); ?>

  </div>
</div>
