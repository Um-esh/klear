<!doctype html>
<html lang='en'>
<head>
 <!-- Required meta tags -->
 <meta charset='utf-8'>
 <meta name='viewport' content='width=device-width, initial-scale=1'>
 <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>

 <!-- Bootstrap CSS -->
 <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
 <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
<title>Hello, world!</title>
</head>
<body>
 <nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <div class='container-fluid'>
   <a class='navbar-brand' href='/'><img class='log' src='logo.png' alt='' />Klear Stream</a>

  </form>
 </div>
</div>
</nav>

<div class='body'>

<?php


include("/con.php");
$sql = "SELECT * FROM `mus`";
$result = mysqli_query($conn, $sql);
$sno = 0;
while ($row = mysqli_fetch_assoc($result)) {

$exp = $row['category'];
echo"<div class='hand'>
 <div class='na'>".$exp."</div><div class='net'>";
$sqa = "SELECT * FROM `music` WHERE category='$exp'";
$Resut = mysqli_query($conn, $sqa);
$s_no = 0;
while ($rw = mysqli_fetch_assoc($Resut)) {
$s_no = $s_no + 1;
$no = "'".$s_no."'";
$onclick = "document.getElementById('".$s_no."').style.display='block'";
echo "
     <div class='leg'>
<input type='image' src='".$rw['thumbnail']."' class='btn btn-primary w3-button w3-black' onclick=".$onclick.">
 <div class='na'>".$rw['name']."</div>

<div id='".$s_no."' class='w3-modal'>
<div class='modal-dialog'>
<div class='w3-modal-content modal-content'>
<div class='w3-container javamodal-body'>

<video src='https://drive.google.com/u/0/uc?id=".$rw['link']."&export=download' name='hello' height='100%' width='100%' class='vdo' preload='metadata' controls='auto'></video>
</div>
<span>".$rw['name']."</span>
<div class=' desc'>
".$rw['description']."
</div>
<form action='' method='get' accept-charset='utf-8'>

<button type='submit' class='btn btn-primary'>close</button>

</form>
</div>
</div>
</div>

  </div> ";

}
echo"</div></div></div>";
echo"<hr>";
}
?>


</div>

<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
<link rel='stylesheet' href='StyleSheet.css' />
<script src='https://code.jquery.com/jquery-3.5.1.min.js' integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
<script src='draggable-div-with-touch.js' /></script>

<!-- Google Analytics-->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-132699580-1'></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag() {
dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-132699580-1');
</script>
<script>
$('.DraggableDiv').draggableTouch();
</script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src='main.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>



<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js' integrity='sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js' integrity='sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13' crossorigin='anonymous'></script>
    -->

</body>
</html>Minnie Mouse
