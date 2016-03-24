<?php
session_start()
?>


<form action="" method="post">
    Naam: <input type="text" name="name"><br>
    Email: <input type="email" name="mail"><br>
    <input type="radio" name="gender" value="male">Man<br>
    <input type="radio" name="gender" value="female"> Vrouw
    <input type="submit" name="submit">
</form>

<hr>

<?php
if (isset($_POST['submit'])) {
$_SESSION['name'] = $_POST['name'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['gender'] = $_POST['gender'];
}

?>

<strong><?php echo $_SESSION['name'], "<br />", $_SESSION['mail'], "<br />", $_SESSION['gender'];?></strong>


