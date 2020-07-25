<?php

   // Code to build a notes web page
   // 7-14-2010
   // Added bottom link on 10-22-2010

   /* WISH LIST: 
       2. Last Modified Date -- perhaps do it slide-wise?
       3. Deal with the fact that this could be a hodgepodge of colors
   */

   function anchorName($filebase)
   // PRE:  $filebase contains one or more hyphens
   // POST: FCTVAL == the part of $filebase after the last hyphen
   {
      return substr(strrchr($filebase, "-"), 1);       //   strrchr gets, e.g., "-what," so
                                                       //   grab substring from index 1 to end
   }

   function prettyAnchorName($str)
   // PRE:  $str is initialized and possibly contains underscores
   // POST: FCTVAL == $str with underscores converted to spaces and all words capitalized
   {
      return ucwords(str_replace("_", " ", $str)); 
   }

   function buildAnchorBar($sections)
   // PRE:  $sections contains one or more strings, each containing one or more hyphens
   // POST: FCTVAL == a line of HTML to print a row of links to anchors within this page where
   //                 each anchor name is from each element of $sections after the last hyphen.
   //                 The line is in a centered paragraph in font size 1. 
   {
      $anchors = array();                              // anchor names
      $anchorBar = "";                                 // the line of HTML for the anchor bar

      // Get the anchors
      for($i = 0; $i < count($sections); $i++)
      { 
         $anchors[$i] = anchorName($sections[$i]);   
      }

      // Build the anchor navbar
      $anchorBar = "<p align=\"center\"><font size=\"1\">\n"; 
      for($i = 0; $i < count($anchors); $i++)
      {
         $anchorBar .= "   <a href=\"#$anchors[$i]\">" 
                    .  prettyAnchorName($anchors[$i]) 
                    .  "</a>";
       
         if($i < count($anchors)-1)                // put dividers on all but last one
            $anchorBar .= " &bull;\n";
      }
      $anchorBar .= "</font></p>\n";

      return $anchorBar; 
   }


   function buildOutline($sections, $title, $pageURL, $indent)
   // PRE:  $sections contains one or more strings, each containing one or more hyphens,
   //       $title is initialized, $pageURL is a valid absolute or relative path to a page,
   //       $indent is a string of blank spaces
   // POST: FCTVAL == a line of HTML to print a list item that links to the document at $pageURL
   //                 with clickable text $title and with a sublist of links to anchors within
   //                 that document where each anchor name is from each element of $sections after 
   //                 the last hyphen. All lines of code are preceded by $indent.
   {
      $anchors = array();                              // anchor names
      $outline = "";                                   // HTML to outline the page
      $result  = "";                                   // HTML for LI with title and outline as sublist

      // Get the anchors
      for($i = 0; $i < count($sections); $i++)
      { 
         $anchors[$i] = anchorName($sections[$i]);   
      }

      // Build sublist for navigation
      $outline = "$indent   <ul>\n"; 
      for($i = 0; $i < count($anchors); $i++)
      {
         $outline  .= "$indent      <li><a href=\"$pageURL#$anchors[$i]\">" 
                    .  prettyAnchorName($anchors[$i]) 
                    .  "</a></li>\n";
      }
      $outline .= "$indent   </ul>";

      // Build list item to link to page
      $result = "$indent<li><a href=\"$pageURL\">$title</a>\n"
              . "$outline\n$indent</li>\n";

      return $result; 
   }

   function addSection($filebase)
   // PRE:  $filebase is the base file name of a file found in this directory with extension '.htm'
   //          and containing one or more hyphens
   // POST: The contents of the file $filebase.htm are inserted into the page, preceded with an HR and
   //          an anchor whose name is the part of $filebase after the last hyphen
   {
      $fullFileName = $filebase . ".htm";            // filename to add containing extension
      $anchorName = anchorName($filebase);           // part of $filebase after "-" for anchor

      print "<hr />\n";
      print "<a name=\"$anchorName\">\n";
      include $fullFileName;
   }

   function buildPage($sections, $title, $headerColor)
   // PRE:  $sections contains one or more strings, where each is the base file name of a file found
   //          in this directory with extension '.htm' and containing one or more hyphens,
   //       $title is initialized, and $headerColor is a string containing "#" and a hex RGB code 
   // POST: (high level) web page is built with the page title being $title, an H1 in $headerColor with
   //         $title, all sections from $sections added and preceded with navigation bar of links to
   //         each section
   {
      $anchorBar = buildAnchorBar($sections);              // row of anchors for navigation
      $cur_file = "";                                      // name of the file

      // Opening tags and header
      print "<html>\n\n";
      print "<head><title>$title</title></head>\n\n";
      print "<body>\n\n";

      // Top heading
      print "<h1 align=\"center\"><font color=\"$headerColor\">$title</font></h1>";

      // Last Modified Date: get current file path and rip off everything but the filename
      $cur_file = $_SERVER['PHP_SELF'];      $cur_file =  substr( $cur_file, strrpos($cur_file, "/")+1, strlen($cur_file)-1 );
      print "<p align=\"right\"><font size=\"-1\">Page Assembled " ;
      print date("m/d/y H:i", filemtime ($cur_file));
      print "</font></p>\n";

      // Rest of top header
      print $anchorBar;

      // Add all sections
      foreach($sections as $x)
      {
         addSection($x);
         print $anchorBar;
      } 
 
      // Bottom matter
      print "<hr />";
      print "<font size=\"-1\"><p>These notes were created by Doug Hogan for student use and are a subset ";
      print "of <a href=\"index.php\">a larger group of notes on HTML</a> you may wish to review if you want ";
      print "to learn more.</p>";

      // Closing tags
      print "\n\n</body>\n</html>";     
   } 


?>