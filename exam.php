<?php
//header('content-type:text/html;charset=utf-8');
////有[1,2,3,4]4个数字，能组成多少个互不相同且无重复数字的三位数？都是多少？
//$t=0;
//for($i=1;$i<5;$i++){
//    for($j=1;$j<5;$j++){
//        if($i!=$j){
//            for($a=1;$a<5;$a++){
//                if($a!=$i&&$a!=$j){
//                    echo $i.$j.$a.'---';
//                    $t++;
//                }
//            }
//        }
//    }
//}
//echo "能组成'$t'个互不相同且无重复数字的三位数;";
////单例
//class Uni{
//       //创建静态私有的变量保存该类对象
//static private $instance;
////参数
//private $config;
////防止直接创建对象
// private function __construct($config){
//    $this -> config = $config;
//    echo "我被实例化了";
//}
//static public function getInstance($config){
////判断$instance是否是Uni的对象
////没有则创建
//if (!self::$instance instanceof self) {
//    self::$instance = new self($config);
// }
//    return self::$instance;
// }
//public function getName(){
//      echo $this -> config;
//    }
//}
//$db1 = Uni::getInstance(1);
//$db1 -> getName();
//echo "<br>";
//$db2 = Uni::getInstance(4);
//$db2 -> getName();
////实现遍历指定文件夹下的所有文件和子文件夹
//function globdir($dir, $filter = '*', $patten = GLOB_BRACE, $nocache = null) {
//    static $file_arr = array ();
//    isset($nocache) && $file_arr = array ();
//    if (!is_dir($dir)) return;
//    if ($patten == GLOB_ONLYDIR) {
//        $code = 'if (is_dir($file)) {$file_arr[] = $file;globdir($file, "*", GLOB_ONLYDIR);}';
//    } else {
//        $code = 'is_file($file) ? $file_arr[] = $file : globdir($file,"' . $filter . '",' . $patten . ');';
//    }
//    array_walk(glob("{$dir}/{$filter}", $patten), create_function('$file, $k, $file_arr', $code), &$file_arr);
//    if ($filter != '*') {
//        array_walk(glob("{$dir}/*", GLOB_ONLYDIR), create_function('$dir,$k,$param', 'list($filter, $patten) = explode("|", $param);globdir($dir, $filter, $patten);'), "{$filter}|{$patten}");
//    }
//    return $file_arr;
//}
////求出两个路径的公共部分
//function getRelativePath($a,$b){
//    $relativePath="";
//    $pathA=explode('/',dirname($a));
//    $pathB=explode('/',dirname($b));
//    $n=0;
//    $len=count($pathB)>count($pathA)?count($pathA):count($pathB);
//    do{
//        if($n>=$len||$pathA[$n]!=$pathB[$n]){
//            break;
//        }
//    }while(++$n);
//    $relativePath.=str_repeat('../',count($pathB)-$n);
//    $relativePath.=implode('/',array_splice($pathA,$n));
//    return $relativePath;
//}
//$res=getRelativePath($a,$b);
//var_dump($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     
    <title>无标题文档</title>
    <style>
        div{
             
             display:inline;
             }
    </style>
    <script type="text/javascript">
        var d = new Date();
        var old = Date.parse("Jan  1, 2019");
        //document.write(old);
        var a;
        a=(Date.parse("Jan 1, 2019")-d.getTime());
        //alert(a);
        function  jishi(){

            yearTime=a/1000/60/60/24/30/12;
            b=Math.floor(a/1000/60/60/24/30/12);
            monthTime=(yearTime-b)*12;
\            c=Math.floor(monthTime);
//document.write(c+"月");
//alert(c);
            dayTime=(monthTime-c)*30;
//alert(dayTime);
//计算还有多少天
            d=Math.floor(dayTime);
//document.write(d+"日");
//alert(d);
            hourTime=(dayTime-d)*24;
//alert(hourTime);
            h=Math.floor(hourTime);
//document.write(h+"小时");
//alert(h);
            minuteTime=(hourTime-h)*60;
//alert(minuteTime);
            m=Math.floor(minuteTime);
//alert(m);
//document.write(m+"分钟");
            secondTime=(minuteTime-m)*60;
//alert(secondTime);

            s=Math.floor(secondTime);
//document.write(s+"秒");
            document.getElementById("monthdiv").innerHTML=c;
            document.getElementById("daydiv").innerHTML=d;
            document.getElementById("hourdiv").innerHTML=h;
            document.getElementById("mdiv").innerHTML=m;
            document.getElementById("sdiv").innerHTML=s;
            setTimeout("jishi()",1000);
        }

    </script>
     
</head>

<body onload="jishi()">
倒计时：据2019年1月1日还有
<div id="monthdiv" style="background-color:#3F9;width:10px;height:4px"></div>月
<div id="daydiv" style="background-color:#0F0;width:10px;height:4px"></div>天
<div id="hourdiv" style="background-color:#F00;width:5px;height:4px"></div>小时
<div id="mdiv" style="background-color:#6F9;width:5px;height:4px"></div>分钟
<div id="sdiv" style="background-color:#CF9;width:5px;height:4px"></div>秒

 

</body>
</html>