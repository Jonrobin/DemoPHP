<?php
$fileName='demo.txt';
$file=@fopen($fileName,'r+');
if($file){
    while(!feof($file)){
        echo(fgets($file).'<br/>');
    }
}
?>