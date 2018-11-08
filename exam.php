<?php
function chou($num){
    for($i = 2;;$i*=1){
        if(is_int($num/2)){
            $num = $num/2;
            echo $num;
        }else if($num == 1){
            return '是丑数';
        }else{
            for($j = 3;;$j*=1){
                if(is_int($num/$j)){
                    $num = $num/$j;
                }else if($num == 1){
                    return '是丑数';
                }else{
                    for($o = 5;;$o*=1){
                        if(is_int($num/$o)){
                            $num = $num/$o;
                        }else if($num == 1){
                            return '是丑数';
                        }else{
                            return '您输入的不是丑数';
                        }
                    }
                }
            }
        }

    }
}
echo chou(12);
?>