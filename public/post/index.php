<?php
session_start()
$_SESSION['opslag'] = array();
?>


<form action="" method="post">
    Naam: <input type="text" name="name" value="name" id="name"><br>
    Email: <input type="email" name="mail"><br>
    <input type="radio" name="gender" value="male">Man<br>
    <input type="radio" name="gender" value="female"> Vrouw
    <input type="submit" name="submit">
</form>

<hr>

<?php
if (isset($_POST['submit'])) {
   $opslag $_SESSION['name'] = $_POST['name'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['gender'] = $_POST['gender'];
}
?>

<ul>
    <li>
        <?php echo $_SESSION['name'];?>
    </li>
    <li>
        <?php echo $_SESSION['mail'];?>
    </li>
    <li>
        <?php echo $_SESSION['gender'];?>
    </li>
</ul>


