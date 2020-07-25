<html>
<head>
   <title>form sample</title>
</head>

<body bgcolor="<? echo $_POST['bgcol'] ?>" text="<? echo $_POST['txtcol'] ?>">

<?
   echo "<h1>Sample Form Results</h1><p>Hi, " .  $_POST['name'] . "!</p>";

   // show heading for colors only when user wanted to see one or both
   if($_POST['showtxt'] == "on" || $_POST['showbg'] == "on")
   {
      echo "<h2>Your selected color codes:</h2><p>";
   }

   // check which colors user wanted to see
   if($_POST['showbg'] == "on")
   {
      echo "Background color code: " . $_POST['bgcol'] . "<br>";
   }
   if($_POST['showtxt'] == "on")
   {
      echo "Text color code: " . $_POST['txtcol'] . "<br>";
   }

   echo "</p>"; 

   echo "<p><a href=\"notes-forms1.php\">Go back</a></p>";
?>

</body>
</html>