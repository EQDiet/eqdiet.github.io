<?php
if(isset($_GET['file_name'])){
  $download_path = '/downloads/' . $_GET['/downloads/EQDietAlpha0.25.exe'];
} else {
  die("Please don't load this page directly!");
}
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="refresh" content="5;url=<?php echo $download_path ?>"/>
    <title>Success!</title>
  </head>

  <body>
    <h1>Your download will begin shortly!</h1>
    <p>If it doesn't begin, <a href="<?php echo $download_path ?>">click here</a></p>
  </body>
</html>
