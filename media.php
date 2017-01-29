 

<!DOCTYPE html >
<HTML>
<head>

<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          

          <style>
body {
    background-color: #424242;
}
</style>




<title> PHP upload test page </title>
</head>
<body>
<nav class="teal">
  <div class="nav-wrapper">
   
<ul id="nav-mobile" class="left hide-on-med-and-down">
 <li><a href="media.php">Media</a></li>
<li><a href="http://10.0.1.21/">Domotica</a></li>
  </div>
</nav>

<h2 class="thin center teal-text" style="margin-top: 20px">Seleziona file</h2>

<div class="row center">

<?php
error_reporting(E_ALL);  
error_reporting(2047);
if (isset($_POST["invio"])) {
  $percorso = "/file777";
  if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    if (move_uploaded_file($_FILES['file1']['tmp_name'], $percorso.$_FILES['file1']['name'])) {
      echo 'Nome file: <b>'.$_FILES['file1']['name'].'</b><br>';
      echo 'MIME Type: <b>'.$_FILES['file1']['type'].'</b><br>';
      echo 'Dimensione: <b>'.$_FILES['file1']['size'].'</b> byte<br>';
      echo '======================<br>';
      echo 'File caricato correttamente<br><br>';
      echo '<a href="media.php">carica un altro file</a>';
    } else {
      echo "si  è verificato un errore durante l'upload: ".$_FILES["file1"]["error"];
    }
  } else {
    echo "si è verificato un errore durante l'upload: ".$_FILES["file1"]["error"];
  }
} else {
  // HTML ?>
    <form enctype="multipart/form-data" method="post" action="" name="uploadform">
      
      <br>
      
      <input type="file" name="file1" >
      <br>
<br>
      <input type="submit" value="invia" name="invio" class="waves-effect waves-light btn-large modal-trigger orange">
    </form>
  <?php
}
?>

<meta name="viewport" content="width=device-width">

 <div>

<a href="/file777">visualizza file</a>


</body>
</html>
