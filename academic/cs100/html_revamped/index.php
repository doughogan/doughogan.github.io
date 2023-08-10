<?php 
   include "_notecode.php";
   include "_master-sections.php";
?>

<html>

   <head><title>Full HTML Notes Outline</title></head>

   <body>

      <h1 align="center"><font face="Tahoma, Verdana, Helvetica, sans-serif" color="#336600">HTML Course Notes</font></h1>
      <p><strong>Preface: </strong>This page contains class notes for a short course or unit on the fundamentals of HTML. 
      I am also providing this material here for those interested in studying HTML on their own.</p>
      <p>Notes are more-or-less designed so that you could read them on your own, but these notes contain 
       some elements of the classroom like in-class exercises. Although working with this material can be done on any platform, 
       significant portions of these notes were once used for a course that was taught in a lab running MacBooks set up with a BootCamp 
       Windows partition. A few references to such a setup remain. I have or will use these notes in a few different course 
       settings and I have several lab exercises developed to accompany groups of the 
       notes; email me at <em>hogand at uic.edu</em> if you are an educator and are interested in those. </p>

      <p>The notes are designed to be about the language, but I also have some sections specific to institutions where I have
       taught on how to publish web pages on their servers. </p>

      <p>(As of 1/18/16, I am making some edits to some of this material, so a few things may be temporarily under construction.)</p>

      <?php
         // Use a 1x1 table to put a border around it 
         print "<table border=\"1\" cellspacing=\"0\" cellpadding=\"5\" align=\"center\"><tr><td>\n";
      
         // Build bulleted list outline of all the pages in $pages, defined in _master-sections.php
         print "         <ul>\n";
         foreach($pages as $page)
         {
            print buildOutline($page['sections'], $page['title'], $page['url'], "            ");
         }
         print "         </ul>\n";

         print "      </td></tr></table>\n";
      ?>

      <hr />

      <p>Also available:</p>
      <ul> 
         <li>I have created <a href="notes-all.php">a single page containing all of the above notes</a>.</li>
         <li>I did a special topics course at Penn State, a CMPSC 297A course, which began with a unit the basics of creating forms with PHP and 
             MySQL. There are notes from that course in a similar style on that material I can share with the curious.
             <!-- Notes for that material can be found on the <a href="../cmpsc297a/schedule.php">CMPSC 297A schedule page</a> --> </li>
         <li>There is an <a href="notes-crash-course.php">HTML crash course page</a>, which I've assembled for computer science students in 
             the CMPSC 297A class needing to learn just enough HTML to be able to begin writing PHP code. (The crash course page leaves 
             out some key points such students would have gotten in the prerequisites and <a href="notes-links.php#directory_structure">
             Unix directory structure</a>, figuring those students were learning about that in a course they were taking concurrently.</li>
      </ul>
   </body>
</html>

<!-- This particular page (not the whole site for sure) was composed entirely using a plain text editor, HTML, and PHP code, and
     that proved far more rewarding than building a page using anything else. That entire outline came from loops and functions and arrays. :) -->