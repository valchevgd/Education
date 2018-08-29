<html>
<form>
    <div>
        First Number:<input type="text" name="num1">
    </div>
    <div>
        Second Number:<input type="text" name="num2">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $result = 0;
    if ($num1 > $num2){
        $result = $num1 / $num2;
    }else{
        $result = $num1 * $num2;
    }
    echo $result;
}
?>
</html>