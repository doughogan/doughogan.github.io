<?/*//playing with source pages -- want the last modified time and date for the page this is not, not the header itself$last_page = $_GET['HTTP_REFERER'];//settype($last_page2, string);//$last_page2 = $last_page;//echo "<br /> last page was " . gettype($last_page2) . "!";var_dump($last_page);echo "<a href="<? $last_page ?>">Go back to where you came from</a><br />";*/ ?><div align="center">   <table width="100%" border="0" cellspacing="1" cellpadding="1">    <tr>       <td><font face="Tahoma, Verdana, Helvetica, sans-serif" color="#FF6600"><b><font size="+1" color="#000066">FALL         2006 </font></b></font></td>      <td>         <div align="right"><font face="Tahoma, Verdana, Helvetica, sans-serif" color="#FF6600"><font size="1" color="#000066">          <? echo "LAST UPDATED " . date("m/d/y H:i", filemtime ($cur_file));              //$last_mod should be set in referring file using code like: $last_mod = filemtime('index.php');          ?>                    </font></font></div>      </td>    </tr>    <tr>       <td colspan="2">         <div align="center"><font face="Tahoma, Verdana, Helvetica, sans-serif" color="#FF6600"><b><font size="+3">HTML</font></b></font></div>      </td>    </tr>    <tr>       <td colspan="2">         <div align="center"><font face="Tahoma, Verdana, Helvetica, sans-serif" color="#000066" size="1">          <a href="index.php">Course Info &amp; Policies</a> &nbsp;&nbsp;&#149;&nbsp;&nbsp;Schedules:          <a href="schedule.php">Unit A</a> &#149;          <a href="schedule2.php">Unit B</a> &#149;          <a href="schedule3.php">Unit C</a> &#149;	  <a href="schedule4.php">Unit D</a> &#149;
          <a href="schedule5.php">Unit E</a> &#149;          <a href="schedule6.php">Unit F</a> &#149;          <a href="schedule7.php">Conclusion</a>          <? // get rid of extra links for the time being: let's let PHP comment it out/*&nbsp;&nbsp;&#149;&nbsp;&nbsp;<a href="schedule3.php">Schedule Part III</a>&nbsp;&nbsp;&#149;&nbsp;&nbsp;<a href="schedule4.php">Schedule Part IV</a> */?>&nbsp;&nbsp;&#149;&nbsp;&nbsp;<a href="resources.php">Resources           &amp; FAQ</a><?//&nbsp;&nbsp;&#149;&nbsp;&nbsp;<a href="quiz_exam.htm">Solutions</a>?>&nbsp;&nbsp;&#149;&nbsp;&nbsp;<a href="grades.php">Grades</a></font></div>      </td>    </tr>  </table></div>