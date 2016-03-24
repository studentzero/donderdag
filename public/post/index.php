<?php
session_start()
?>


<form action="" method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="mail">
    <input type="submit" name="submit">
</form>

<hr>

<?php
if (isset($_POST['submit'])) {
$_SESSION['name'] = $_POST['name'];
$_SESSION['mail'] = $_POST['mail'];
}

?>

<strong><?php echo $_SESSION['name'], $_SESSION['mail'];?></strong>


