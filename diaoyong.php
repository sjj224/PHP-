<?php
  $leixing = $_GET['leixing'];
  if($leixing == "chp"){
    //数字输出网页计数器
    $max_len = 9;
    $CounterFile = "chp.txt";
    if(!file_exists($CounterFile)){  //如果计数器文件不存在
        $counter = 0;    
        $cf = fopen($CounterFile,"w"); //打开文件
        fputs($cf,'0');     //初始化计数器
        fclose($cf);     //关闭文件
    }else{
    //取回当前计数器的值
    $cf = fopen($CounterFile,"r");
    $counter = trim(fgets($cf,$max_len));
    fclose($cf);
    }
    echo $counter;
  }elseif($leixing == "tianqi"){
    //数字输出网页计数器
    $max_len = 9;
    $CounterFile = "tianqi.txt";
    if(!file_exists($CounterFile)){  //如果计数器文件不存在
        $counter = 0;    
        $cf = fopen($CounterFile,"w"); //打开文件
        fputs($cf,'0');     //初始化计数器
        fclose($cf);     //关闭文件
    }else{
    //取回当前计数器的值
    $cf = fopen($CounterFile,"r");
    $counter = trim(fgets($cf,$max_len));
    fclose($cf);
    }
    echo $counter;
  }else{
    echo "没有参数怎么查询呀....呜呜呜。";
  }
 ?>
