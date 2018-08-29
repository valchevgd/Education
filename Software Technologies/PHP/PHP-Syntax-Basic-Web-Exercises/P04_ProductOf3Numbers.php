<html>
<form>
    <div>
        First Number:<input type="text" name="num1">
    </div>
    <div>
        Second Number:<input type="text" name="num2">
    </div>
    <div>
        Third Number:<input type="text" name="num3">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $num3 = intval($_GET['num3']);

    $arr = array($num1, $num2, $num3);

    $haveZero = false;
    $negativeCounter = 0;
    for ($i = 0; $i <=2; $i++){
        if ($arr[$i] == 0){
           $haveZero = true;
            break;
        }elseif ($arr[$i] < 0){
            $negativeCounter++;
        }
    }

    if ($haveZero || $negativeCounter % 2 == 0){
        echo 'Positive';
    }else{
        echo 'Negative';
    }
}
?>
</html>