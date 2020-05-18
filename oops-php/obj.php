<?php

/*

Object :  PHP | Objects. An Object is an individual instance of the data structure defined by a class.
We define a class once and then make many objects that belong to it. Objects are also known as instances.


*/

class Mobile
{
    public $mobile_Emi_no;
    function showdata($mobile_Emi_no)
    {
        // $mobile_Emi_no = "30EmbCt2020";
        echo "Mobile Emi no is <strong>$mobile_Emi_no</strong><br>";
    }
}

$obj = new Mobile;
$obj->showdata("30EmbCt2020");
$obj1 = new Mobile;
$obj1->showdata("30EbbCt2030");



class Mobile1
{
    public $mobile_Emi_no;
    function showdata()
    {
        $this->mobile_Emi_no = "30EmbCt2020";
        echo "Mobile Emi no is <strong>$this->mobile_Emi_no</strong><br>";
    }

    function Getdata($mobile_Emi_no)
    {
        $this->mobile_Emi_no = $mobile_Emi_no;
        echo "Mobile Emi no is <strong>$this->mobile_Emi_no</strong><br>";
    }
}

$obj = new Mobile1;
$obj->showdata();
$obj1 = new Mobile1;
$obj1->Getdata("30EbbCt2030");




?>
