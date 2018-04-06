<?php
class Cars{
    var $wheelcount=4;
    var $windowcount=4;

    function car_detail(){
    //echo "Hello Cars".$wheelcount;
    return "this car has".$this->wheelcount."wheels"."this car has".$this->windowcount."windows";

    }
}

$BMW=new Cars();
    echo $BMW->wheelcount;
    echo $BMW->windowcount;

    echo $BMW->wheelcount=10;
    echo $BMW->windowcount=10;

echo $BMW->car_detail();
