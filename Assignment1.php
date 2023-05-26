<?php
function find_largenum($num1, $num2, $num3) {
    $L_num = $num2;
    if ($num1 > $num2) {
        $L_num = $num1;
    }
    if ($num3 > $num2) {
        $L_num = $num3;
    }
    return $L_num;
}
echo "Thw largest number is ".find_largenum(1,2,3);

?>