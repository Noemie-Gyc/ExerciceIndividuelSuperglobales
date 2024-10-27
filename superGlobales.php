<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales</title>
    
</head>
<body>

<?php 
$_SESSION['first_name'] = "";
session_start();
?>

<p>
<?php 
   
 if (isset($_GET["first_name"]))  :
    echo 'Bonjour ' . htmlspecialchars($_GET["first_name"]) . '!';

elseif (isset($_SESSION['first_name'])) : 
    echo 'Bonjour ' . htmlspecialchars($_SESSION['first_name']) . '!';

elseif (isset($_POST["first_name"])) :
   
    $firstName = $_POST['first_name'];
    $_SESSION['first_name'] = $firstName;
    echo 'Bonjour ' . htmlspecialchars($_POST["first_name"]) . '!';   
            
else :
        echo 'Hello you!';
endif;

?> 
</p>

<form action="superGlobales.php" method="post">
 <p>Votre nom : <input type="text" name="first_name" /></p>
 <p><input type="submit" value="OK"></p>
</form>


<form  id='fermer' name='fermer' method='get' action='superGlobales.php?OUT=true'>            
<?php if( isset($_SESSION['first_name']) && $_SESSION['first_name'] !== null ) : 
    session_destroy();
 endif;
 ?>

<input type="submit" value="RESET"></form>
  
</body>

</html>