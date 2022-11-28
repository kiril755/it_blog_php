<?php 

include('./includes/db.php');


// echo time() . "<br/>";
// $test_time = '2022-11-20';
// $strtotime = strtotime($test_time);
// $diff = time() - $strtotime;
// $date_passed = floor((($diff / 60) / 60) / 24);
// echo 'между ' . date('d.m.Y H:i:s', $strtotime) . ' и ' . date('d.m.Y H:i:s') . ' прошло ' . $date_passed;
?>

<form method="POST" action="/handle.php">
    <input type="text" placeholder="login" name="login">
    <input type="text" placeholder="password" name="password">
    <hr>
    <input type="submit" value="sumbit">
</form>

<?php
mysqli_close($connection);
?>





