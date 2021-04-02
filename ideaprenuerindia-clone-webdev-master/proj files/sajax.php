<?php
require_once("config.php");
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT Id,Heading FROM main WHERE Heading LIKE '%$Name%' LIMIT 5";
//Query execution
   $ExecQuery =mysqli_query($conn,$Query);

//Creating unordered list to display result.
   //Fetching result from database.
   while ($Result = MySQLi_fetch_ASSOC($ExecQuery)) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <li style="list-style-type:none;" onclick='fill("<?php echo $Result['Heading']; ?>")'>
   <a href=<?php echo "read-more.php?t=".$Result['Id'].'"'?>>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['Heading']; ?>
   </li></a>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
