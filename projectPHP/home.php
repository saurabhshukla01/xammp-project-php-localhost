<?php include("common/header1.php")?>
<?php include("functions.php")?>

<h2 align="center"> Say hello function to call with the functions php file ..  </h2>
<p> <?php sayhello(); ?> </p><br>



<h2 align="center"> constr function to call with the functions php file ..  </h2>
<p> <?php echo "Your Full name is :  " . constr("sneha","mishra"); ?> </p><br>



<h2 align="center"> multiple function to call with the functions php file ..  </h2>
<p> <?php echo "Your Result of Given Number :  " . multiple(199,27); ?> </p><br>



<h2 align="center"> Datatype name function to call with the functions php file ..  </h2>
<p> <?php echo datatype_name(199); ?> </p>
<p> <?php echo datatype_name(199.098); ?> </p>
<p> <?php echo datatype_name(01010101); ?> </p>
<p> <?php echo datatype_name("saurabh"); ?> </p><br>
<p> <?php echo datatype_name(array("saurabh",788,1.08,"cx",10101)); ?> </p><br>
<p> <pre><?php print_r (datatype_name(array("saurabh",788,1.08,"cx",10101))); ?></pre> </p><br>


<?php include("common/footer1.php")?>