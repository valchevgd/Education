<html>
<form>
    N:<input type="text" name="num">
    <input type="submit" value="Submit">
</form>
<?php
if (isset($_GET['num'])){
    $num = intval($_GET['num']);
    $result = $num * 2;
    echo $result;
}
?>
</html>