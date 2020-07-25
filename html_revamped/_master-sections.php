<?php

   // This file defines the master outline of sections and page titles for the full HTML course

   $pages = array();       // data for pages, where each element has keys
                           //    title:    name of the page
                           //    url:      path to the page relative to the index
                           //    sections: array of slides for page (filenames sans extension)

   // Define the pages

   $pages[0]{'title'}    = "The Basics of HTML";
   $pages[0]{'url'}      = "notes-basics.php";
   $pages[0]{'sections'} = array("slide-basics-01-what_is_it", 
                                 "slide-basics-02-abstraction", 
                                 "slide-basics-03-how_to_write_it", 
                                 "slide-basics-04-basic_formatting", 
                                 "slide-basics-05-framework", 
                                 "slide-basics-06-paragraphs", 
                                 "slide-basics-07-headings", 
                                 "slide-basics-08-breaks_and_rules");

   $pages[1]{'title'}    = "Directory Structure & Links";
   $pages[1]{'url'}      = "notes-links.php";
   $pages[1]{'sections'} = array("slide-links-01-directory_structure", 
                                 "slide-links-02-links");   

   $pages[2]{'title'}    = "Lists";
   $pages[2]{'url'}      = "notes-lists.php";
   $pages[2]{'sections'} =  array("slide-lists-01-lists", 
                                  "slide-lists-02-problem", 
                                  "slide-lists-03-closing_comments");  

   $pages[3]{'title'}    = "Text Formatting in HTML";
   $pages[3]{'url'}      = "notes-text.php";
   $pages[3]{'sections'} = array("slide-text-01-bold_and_italics", 
                                  "slide-text-02-tags_with_attributes", 
                                  "slide-text-03-text_sizes",
                                  "slide-text-04-font_tag",
                                  "slide-text-05-alignment",
                                  "slide-text-06-list_attributes",
                                  "slide-text-07-closing_observations");   

   $pages[4]{'title'}    = "Images";
   $pages[4]{'url'}      = "notes-images.php";
   $pages[4]{'sections'} = array("slide-images-01-image_types", 
                                  "slide-images-02-image_tag", 
                                  "slide-images-03-attributes_for_images",
                                  "slide-images-04-text_images",
                                  "slide-images-05-linked_graphics",
                                  "slide-images-06-more_image_attributes",
                                  "slide-images-07-background_formatting");   

   $pages[5]{'title'}    = "Tables";
   $pages[5]{'url'}      = "notes-tables.php";
   $pages[5]{'sections'} = array("slide-tables-01-basic_tables", 
                                  "slide-tables-02-properties_of_tables_and_cells", 
                                  "slide-tables-03-coding_tablewide_cell_properties", 
                                  "slide-tables-04-coding_cell_properties", 
                                  "slide-tables-05-individual_cell_properties", 
                                  "slide-tables-06-rowspan_and_colspan", 
                                  "slide-tables-07-advanced_uses", 
                                  "slide-tables-08-table_headers");   

   $pages[6]{'title'}    = "Odds & Ends";
   $pages[6]{'url'}      = "notes-misc.php";
   $pages[6]{'sections'} = array("slide-psu-publishing", 
                                  "slide-misc-anchors", 
                                  "slide-java-applet_tag");   

?>