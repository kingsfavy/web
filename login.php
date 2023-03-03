
<?=
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
echo "welcome: $name,your email is: $email,your message is: $message";
?>

<?php
$host='localhost:3306';
$name=";
$email=";
$message=";
$conn= mysquli_connect($host, $name, $email, $message);
if($conn)

die( 'could not connect:" .mysqli_error());
}
echo 'connected successfully';
mysqli_close($conn);
?>
