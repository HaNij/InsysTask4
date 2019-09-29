<?php
function getSum($sA, $sB) {
    $iMax = strlen($sA);
    if(strlen($sA) < strlen($sB)) {
        $iMax = strlen($sB);
        $sA = str_repeat('0', $iMax - strlen($sA)).$sA;
    }
    elseif(strlen($sA) > strlen($sB)) {
        $sB = str_repeat('0', $iMax - strlen($sB)).$sB;
    }
    $iC = 0;
    for($i = $iMax - 1; $i >= 0; $i--) {
        $iC += (int) $sA[$i] + (int) $sB[$i];
        $sA[$i] = (string) ($iC % 10);
        $iC = (int) ($iC / 10);
    }
    if($iC > 0) {
        $sA = (string) $iC.$sA;
    }
    return $sA;
}
echo getSum("57", "787666755555555555");
?>