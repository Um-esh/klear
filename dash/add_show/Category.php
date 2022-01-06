<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: /connect.php");
  exit;
}
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
// Connect to the Database
include("/con.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $category =$_POST['name'];
  $thumb =$_POST['thumb'];
  $sql="INSERT INTO `soo` (`thumb`, `category`)
VALUES ('$thumb','$category')";
$result=mysqli_query($conn,$sql);



$sqs="SELECT * FROM `Meta`";
$result = mysqli_query($conn, $sqs);
$sno = 0;
while ($row = mysqli_fetch_assoc($result)) {
 
$lock="".$row['linl']."".$category."".$row['Link']."";
}

$myfile = fopen("".$category.".php", "w") or die("Unable to open file!");
$txt = "$lock";
fwrite($myfile, $txt);
fwrite($myfile, $txt);
fclose($myfile);

}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>
  <h1>Add a Show category!</h1>
  <form action="category.php" method="post" accept-charset="utf-8">
    
  
  <label for="inputPassword5" class="form-label">Category</label>
<input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="name">
  <label for="inputPassword5" class="form-label">thumbnail</label>
<input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="thumb">
<button class="btn btn-primary" type="submit">Button</button>
</form>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      -->
</body>
</html>