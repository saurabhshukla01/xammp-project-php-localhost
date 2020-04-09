<?php include("common/header1.php") ?>
<h2 align="center">
<?php
    session_start();
    // session start hote hi $session key se value ko welcome ke sath add krke bwoser pr show kr dega .
    if (isset($_SESSION['Uname']))
    {
        echo "Welcome" ." ".$_SESSION['Uname'];
        
    }
    else
    {
    echo "<h3>You are not login</h3>";
    }
?>
</h2>
<h4 align="right"> <a href="logout.php"> Logout </a> </h4>



<?php include("common/footer1.php") ?>