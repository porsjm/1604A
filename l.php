<?php 
header("content-type:text/html;charset=utf8");
/**
*第一天日考
*选出字符串中重复三次的字符
*/
function aaa($str){
  $arr = str_split($str);
  // var_dump($arr);
  foreach($arr as $k =>$v){
    $i = 0;
    foreach($arr as $key => $val){
      if($v==$val){
        $i++;
        if($i == 3){
          echo $v;die;
        }
      }
    }
  }
}
/**
*第二天日考
*水仙花数 （循环实现）
*/
function bbb($m,$n){
  for($i=$m;$i<=$n;$i++){
    for($j=$m;$j<=$n;$j++){
      for($o=$m;$o<=$n;$o++){
        $p = $i.$j.$o;
        if($p == $i*$i*$i+$j*$j*$j+$o*$o*$o){
        echo "<pre>";
          echo $i.$j.$o;
        }
        // var_dump($i*$i*$i+$j*$j*$j+$o*$o*$o);
        // echo $p;
      }
    }
  }

}
/**
*xueshaopeng
*第三天日考
*斐波那契数列（递归 非递归实现）
*/
class xue{
  //递归
  public static function digui($num){
    return $num == 1 || $num == 2?'1':self::digui($num-1) + self::digui($num-2);
  }
  //循环
  public static function nodigui($num){
    $first = 1;
    $two = 1;
    $sum = 0;
    for($i = 2; $i < $num; $i++){
      $sum = $first + $two;
      $first = $two;
      $two = $sum;
    }
    return $sum;
  }
}
/**
*周考
*猴子吃桃
*/ 
class monkey{
  //猴子吃桃递归实现
  public static function digui($day,$sum){
    return $day == 1?$sum:self::digui($day-1,($sum+1)*2);
  }
  //猴子吃桃非递归实现
  public static function nodigui($day,$sum){
    for($i = $day; $i > 1; $i--){
        $sum = ($sum+1)*2;
    }
    return $sum;
  }
  //判断一个数是几位数
  public static function is_int($init){
      $sum = 1;
      $chu = 1;
      for($i = $sum; ;$i++){
          $j = $init/$chu;
          if($j >= 1 && $j <10){
            return $i.'位数';
            break;
          }
          $chu = $chu*10;
      }
  }
  //ip 地址转化为数字
  public static function ip_log($ip){
      $ip_arr = explode('.', $ip);
      $ip_str = '';
      foreach($ip_arr as $val){
        //将十进制转化为十六进制
        $val = dechex($val);
        if(strlen($val) < 2){
          //如果长度小于2  补0
          $val = '0'.$val;
        }
        $ip_str .= $val;
      }
      //十六进制转化为十进制
      return hexdec($ip_str);
  }
}

echo monkey::ip_log('127.0.0.1').'/'.ip2long('127.0.0.1');
var_dump(ip2long('127.0.0.1'));
 ?>

