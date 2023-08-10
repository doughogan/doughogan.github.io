<?php 
   include "_notecode.php";

   // Array of all sections to add to this page
   $sections = array("slide-images-01-image_types", 
                     "slide-images-02-image_tag", 
                     "slide-images-03-attributes_for_images",
                     "slide-images-04-text_images",
                     "slide-images-05-linked_graphics",
                     "slide-images-06-more_image_attributes",
                     "slide-images-07-background_formatting");
     
   buildPage($sections, "Images", "#336600");
?>