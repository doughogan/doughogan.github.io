<?php 
   include "_notecode.php";

   // Array of all sections to add to this page
   $sections = array("slide-text-01-bold_and_italics", 
                     "slide-text-02-tags_with_attributes", 
                     "slide-text-03-text_sizes",
                     "slide-text-04-font_tag",
                     "slide-text-05-alignment",
                     "slide-text-06-list_attributes",
                     "slide-text-07-closing_observations");
     
   buildPage($sections, "Text Formatting in HTML", "#336600");
?>