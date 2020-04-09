<?php
function cnvCrtoDec($number) {
	$unitArray =   array("4"=>"K","5"=>"K","6"=>"L","7"=>"L","8"=>"Cr","9"=>"Cr");
	$numLen        = strlen($number);
	if ($numLen > 3 ) {
		foreach ($unitArray as $nmLen=>$unit) {
			if ($numLen == $nmLen) {
				if ($nmLen % 2 == 0) {
					$remNumber    = substr($number,1,3);
					$ckNmGtZer    = ($remNumber[0]+$remNumber[1]+$remNumber[2]);
					if ($ckNmGtZer < 1) { 
						$remNumber    = "";
					} else {
						if ( ($remNumber[1]    == 0) && ($remNumber[2] == 0)   ) {
							$remNumber[1]   = "";
							$remNumber[2]   = "";   
						} 
					}
					echo $number   = substr($number,0,$numLen-$nmLen+1) . "." .  $remNumber . "$unit";             
				} else {
					$remNumber     = substr($number,2,3);
					$ckNmGtZer = ($remNumber[0]+$remNumber[1]+$remNumber[2]);
					if ($ckNmGtZer < 1) { 
						$remNumber  = 0;
					} else {
						if (($remNumber[1]  == 0) && ($remNumber[2] == 0)) {
							$remNumber[1]   = "";
							$remNumber[2]   = "";   
						}   
					}
					echo $number    = substr($number,0,$numLen-$nmLen+2) . ".". $remNumber . "$unit";   
				}
			}
		}
	} else {
		echo $number . "Rs";    
	}
}

cnvCrtoDec($number     = "12400");
