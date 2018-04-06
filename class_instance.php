<?php
class Cars{

    function greeting($msg){
        echo $msg.'<br>';
    }
   // function greeting2($msg){
     //   echo $msg;
    //}

}

// Instanciation of a class or Creating object for a class

$Maruti=new Cars();
$Maruti->greeting("This is Maruti");

$BMW=new Cars();
$BMW->greeting("This is BMW");

$Don = get_class_methods('Cars');

foreach ($Don as $key => $value){
     //   echo $key." ".$value;
     //   echo "<br/>";
    }