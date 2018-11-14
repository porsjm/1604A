<?php
function sum($n) {
    $r = 0;
    $n && ($r = (sumn($n - 1) + $n));
    return $r;
}
$t = new Test();
echo $t->sum(5) . "<br>";
echo sum(5);
?>