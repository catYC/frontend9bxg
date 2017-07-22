<?php 

    header("Content-type:text/html;charset=utf-8");

    // var_dump($_SERVER);  


    //给默认值，默认访问主页！！
    $directory = "dashboard";
    $fileName = "index";


    //如果用户在输入连接的时候，后面跟上了 模块名称以及文件名称
    //就使用用户传入的模块名称以及文件名称  给$directory $fileName重新赋值
    if(array_key_exists("PATH_INFO", $_SERVER)){
        $pathInfo =  $_SERVER["PATH_INFO"];
        $pathInfo = substr($pathInfo, 1);
        $pathInfo = explode("/", $pathInfo);

    
        $directory = $pathInfo[0];
        //如果用户只穿了一个dashboard进来，  值传了模块名成进来
        //我们就不管后面的文件名，直接使用默认的就可以

        //如果用户即传了模块名，也传了文件名
        if(count($pathInfo) == 2){
            $fileName = $pathInfo[1];
        }

    }

    

    // //include 可以将指定路径的文件内容直接包含到当前文件当中！
    include "/views/".$directory."/".$fileName.".html"
?>