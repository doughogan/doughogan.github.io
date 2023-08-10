<?php 
   include "_notecode.php";

   // HTML Crash Course for CMPSC 221 so they could enhance their applet pages a bit
   // Note that it assumes that they know Unix directory structure

   // Array of all sections to add to this page
   $sections = array("slide-basics-01-what_is_it", 
                     "slide-basics-04-basic_formatting", 
                     "slide-basics-05-framework", 
                     "slide-basics-06-paragraphs", 
                     "slide-basics-07-headings", 
                     "slide-basics-08-breaks_and_rules",      
                     "slide-links-02-links",                  
                     "slide-java-applet_tag");
     
   buildPage($sections, "Some HTML Basics, Condensed for CMPSC 221 Students", "#336600");
?>

