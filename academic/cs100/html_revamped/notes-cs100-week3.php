<?php 
   include "_notecode.php";

   // Week 3 of CS 100 course at UIC

   // Array of all sections to add to this page
   $sections =              array("slide-text-01-bold_and_italics", 
                                  "slide-text-02-tags_with_attributes", 
                                  "slide-text-03-text_sizes",
                                  "slide-text-04-font_tag",
                                  "slide-text-05-alignment",
                                  "slide-text-06-list_attributes",
                                  "slide-images-01-image_types", 
                                  "slide-images-02-image_tag", 
                                  "slide-images-03-attributes_for_images",
                                  "slide-images-04-text_images",
                                  "slide-images-05-linked_graphics",
                                  "slide-images-06-more_image_attributes",
                                  "slide-images-07-background_formatting",                                    
                                  "slide-text-07-closing_observations"
                                 );  

     
   buildPage($sections, "Tags With Attributes:<br>Text Formatting and Images", "#336600");
?>
