<?php
    session_start();
    $f = fopen("data.txt", "r") or die("Unable to open file!");
    while(!feof($f)){
        $str= fgets($f);
        $arr=explode(" ",$str);
        $data[]=$arr;
    }
    $ndata=array();
    foreach($data as $e){
        $ndata[$e[0]]=array($e[1],$e[2]);
    }
   // echo '<pre>'.print_r($ndata).'</pre>';
    fclose($f);
    
        
    //$_SESSION["loginerror"]=["saiiii","1122","Test"];
    if(isset($_POST["username"])){
        if(!isset($ndata[$_POST["username"]])){
            $_SESSION["loginerror"]=[$_POST["username"], $_POST["password"],"username not found"];
            header("location:./login.php");
        }
        elseif($_POST["password"]!=$ndata[$_POST["username"]][0]){
            $_SESSION["loginerror"]=[$_POST["username"], $_POST["password"],"Passweord incorrect"];
            header("location:./login.php");
        }
        else{
            if(array_key_exists("remember",$_POST))
                setcookie("username",$_POST["username"], time()+60);
        }
    }
    else{
        if(!isset($_COOKIE["username"])){
            unset($_SESSION["loginerror"]);
            header("location:./login.php");
        }
    }
    if(isset($_POST["username"]))
     $username=$_POST["username"];
     else
     $username=$_COOKIE["username"];
    echo "welcome ". $username;  
    ?>
    