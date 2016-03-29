<html>
<head>
    <title>Calc</title>
</head>
<body>
<?php
session_start();
$_SESSION['result'] = array(1, 'twee', 'drie');
array_push($_SESSION['result'], 'vier');
var_dump($_SESSION['result']);
?>

<form action="" method="post">
    <input type="number" name="1" placeholder="getal 1"/>
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multi">*</option>
    </select>
    <input type="number" name="2" placeholder="getal 2"/>
    <input type="submit" value="Reken uit" name="submit"/>
</form>

<?php
if ( !empty($_POST['1']) && !empty($_POST['2']) ){
    $number = $_POST['1'];
    $number2 = $_POST['2'];

    if ($_POST['operator'] == 'add') {
        $complete = $number + $number2;
        array_push($_SESSION['result'], "vijf");
        array_push($_SESSION['result'], $_POST['1']);
    }
    if ($_POST['operator'] == 'subtract') {
        $complete = $number - $number2;
    }
    if ($_POST['operator'] == 'multi') {
        $complete = $number * $number2;
    }
}
?>
<hr>
<?php
echo $complete;
echo '<pre>';
var_dump($_SESSION);
?>
</body>
</html>