<!-- PHP #2 Lab 4 - EECS 1012, York University -->

<!-- (CC) Michael S. Brown -->

<!DOCTYPE html>

<html>
<head>
  <title> Lab 4 - PHP Arrays, Strings, and File </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Lab4.css" type="text/css">
</head>
<body>
  <?php    # This code only needs to be used once and will provide some help in error reporting.
           # If your webpage is completely empty, please try the VirtualBox commandline PHP.
           # Alternatively you can try: https://tinyurl.com/phpsandbox


    ini_set('display_errors', 1); # only need to call these functions
    error_reporting(E_ALL);       # one time
  ?>

  <h1> Lab 4 </h1>
  <h1> <span style="color: red;"> PRATIK PATIL </span> </h1>
  <hr>

  <!-- TASK 1 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
    <h2> Task 1: While loop </h2>
      <p> Simulate multiple dice rolls until a 6 is reached.  Print out the results of each roll. </p>
  <div class="output">
      <?php
        /* Task 1: Put your code here */
        $ran =-1;
         print "<p style=text-align:center;font-color=blue;>";
         while($ran!=6){
         $ran=rand(1,6);
         print "Dice roll($ran)</br>";
         }
         print"</p>";
  ?>
  </div>
</div>

  <!-- TASK 2 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
    <h2> Task 2: Array, for-loop, string function </h2>
      <p> Create an array of strings that is made up of 10 words with the first letter capitalized.
      Your strings can be of any words you want.  Print out these words in a table, where the first
      column is the word in the array and the second column are the same words in all uppercase. You should use a
      the rows of the table.  </p>
   <div class="output">

      <?php
        /* Task 2: Put your code here */
        $list = array("One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Deaner");
        $upper;
        print "<table border=\"1\"><tr><th>String</th><th>Upper</th></tr>";
        for($i=0;$i<count($list);$i++){
          $upper=strtoupper($list[$i]);
          print "<tr><td>$list[$i]</td><td>$upper</td></tr>";
        }
        print "</table>";
  ?>
  </div>
  </div>


  <!-- TASK 3 -- Write your PHP code in in the space provided below.   -->

  <div class="task">
  <h2> Task 3: Files, arrays, and for-loops </h2>
  <p> This task is to read in the contents of the file <code>classList.txt</code> in to PHP.  Then, you should print out each line
      from the file as a paragraph element.  If the line contains the string "EECS", print this out using highlight.
      See the CSS file for the class name for highlight (you can also view the source of this document to see example of the HTML output).  </p>

  <div class="output">
      <?php
        /* Task 3: Put your code here */
        $data=file("classList.txt");
        for($i=0;$i<count($data);$i++){
            $data1[$i]=trim($data[$i]);
            $myarray = explode(",",$data1[$i]);
          if(in_array("EECS",$myarray )){
            if(in_array("1st year",$myarray )){
                print "<p class=\"highlight bold\">$data[$i]</p>";
            }
            else{
            print "<p class=\"highlight\">$data[$i]</p>";
          }
          }
          else{
          print "<p>$data[$i]</p>";
        }
        }
        ?>
     </div>
  </div>

<body>

</html>
