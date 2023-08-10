<?php 
   include "_notecode.php";

   // Array of all sections to add to this page
   $sections = array("slide-basics-01-what_is_it", 
                     "slide-basics-02-abstraction", 
                     "slide-basics-03-how_to_write_it", 
                     "slide-basics-04-basic_formatting", 
                     "slide-basics-05-framework", 
                     "slide-basics-06-paragraphs", 
                     "slide-basics-07-headings", 
                     "slide-basics-08-breaks_and_rules");
     
   buildPage($sections, "The Basics of HTML", "#336600");
?>

