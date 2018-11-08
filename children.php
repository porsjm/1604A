<?php
function children($n,$m){
    for($i=0;$i<=$n;$i++){
        $arr[]=$i;
    }
    $o=1;
    while(true){
        if(count($arr)==1){
            return array_keys($arr)[0];
        }
        foreach ($arr as $key=>$value){
            $o++;
            if($o==$m){
                unset($arr[$key]);
                $o=1;
            }
        }
    }
}
echo children(10,20);
?>