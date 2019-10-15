<!-- PHP Intro Lab 3 - EECS 1012, York University -->
<!-- (CC) Michael S. Brown -->
<!DOCTYPE html>
<html>
<head>
  <title> Lab 3 - PHP Introduction </title>
  <meta charset="utf-8">
  <!-- Using an embedded CSS -->
  <style>
    body { font-family: sans-serif;
           background-color: white;}
    .task {
      margin: 20px;
        border: black 3px dotted;
        background-color: silver;
      }
      .formula /* For task 1 */
      {
        font-family: monospace;
        font-weight: bold;
        font-size: 1.6em;
        color: blue;
      }
      .task p {
        padding-left: 10px;
        padding-bottom: 0px;
      }
    }
  </style>

</head>
<body>
  <?php    # This code only needs to be used once and will provide some help in error reporting.
           # If your webpage is completely empty, please try the VirtualBox commandline PHP.
           # Alternatively you can try: https://tinyurl.com/phpsandbox

    ini_set('display_errors', 1); # only need to call these functions
    error_reporting(E_ALL);       # one time

  ?>
  <h1> Lab 3 </h1>
  <h1> <span style="color: red;"> PRATIK PATIL </span> </h1>
  <hr>

  <!-- TASK 1 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
    <h2> Task 1: Area Formula Demo </h2>
      <p> Area of a trapizoid is <span class="formula"> area = 0.5 &times; (a + b) &times; h </span> </p>
      <h3> Example </h3>
     <p><span class="formula">
      <?php
        $a=random_int(1,10);
        $b=random_int(1,10);
        $c=random_int(1,10);
        $area=0.5*($a+$b)*$c;
        print "a = $a, b = $b, c= $c"."\n\n";
        print "area= 0.5 x ($a+$b) x $c"."\n\n";
        print "area = (float)$area"."\n\n";
  ?>
  </span></p>
  </div>

  <!-- TASK 2 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
      <h2> Task 2: Rick Roll </h2>
      <p> Click for a funny cat video! </p>
      <p><a href=<?php
      $links=array("https://www.youtube.com/watch?v=oqNKD9YVe4U","https://www.youtube.com/watch?v=dQw4w9WgXcQ");
       $ran=rand(0,1);
       print "$links[$ran]";
       ?> target="_blank"><img src="https://i0.wp.com/catnamescity.com/wp-content/uploads/2012/08/Cute-Girl-Cat-Names.jpg?resize=300%2C200"></a></p>

  </div>

  <!-- TASK 3 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
      <h2> Task 3: Style Modification </h2>
      <p> <span style="color:<?php
        $colors=array("red","green","blue");
        $ran=rand(0,2);
        print "$colors[$ran]";
        ?>; font-size:<?php
         $sizes=array(0.5,1,3);
         $ran=rand(0,2);
         print "$sizes[$ran]em";
         ?>;"> PHP is driving me crazy </span> </p>
  </div>
<body>
</html>
