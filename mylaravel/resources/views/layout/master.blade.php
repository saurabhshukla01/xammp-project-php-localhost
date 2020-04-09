<html>
<head>
<title>
The Laravel View
</title>
</head>
<body>
<h2> This is master blade header </h2>

<!--  // use command blade is used yield is using section call there is used.  -->

        @yield('body')          <?php //load another section master page ?>
        @yield('bodyview')      <?php //load another section master page ?>
        @yield('bodydata')      <?php //load another section master page ?>

<h3> This is master blade footer </h3>
</body>
</html>
