<?php 
   include "_notecode.php";

   // HTML Crash Course for CMPSC 297A
   // Note that it assumes that they know Unix directory structure

   // Array of all sections to add to this page
   $sections = array("slide-basics-01-what_is_it", 
                     "slide-basics-04-basic_formatting", 
                     "slide-basics-05-framework", 
                     "slide-basics-06-paragraphs", 
                     "slide-basics-07-headings", 
                     "slide-basics-08-breaks_and_rules",      
                     "slide-links-02-links",                  
                     "slide-lists-01-lists",
                     "slide-text-02-tags_with_attributes", 
                     "slide-text-05-alignment",
                     "slide-images-02-image_tag", 
                     "slide-images-03abridged-sizing_images",
                     "slide-tables-01-basic_tables",     
                     "slide-tables-08-table_headers",
                     "slide-psu-publishing", 
                     "slide-misc-anchors", 
                     "slide-java-applet_tag");
     
   //buildPage($sections, "The HTML Crash Course", "#336600");

   print buildOutline($sections, "HTML Crash Course", "../html/notes-crash-course.php", "        ");


?>

