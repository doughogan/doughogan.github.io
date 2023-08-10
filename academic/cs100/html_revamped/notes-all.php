<?php 
   include "_notecode.php";

   // Everything in one page, largely because I can

   $all_sections =  array(        "slide-basics-01-what_is_it", 
                                  "slide-basics-02-abstraction", 
                                  "slide-basics-03-how_to_write_it", 
                                  "slide-basics-04-basic_formatting", 
                                  "slide-basics-05-framework", 
                                  "slide-basics-06-paragraphs", 
                                  "slide-basics-07-headings", 
                                  "slide-basics-08-breaks_and_rules",
                                  "slide-links-01-directory_structure", 
                                  "slide-links-02-links",
                                  "slide-lists-01-lists", 
                                  "slide-lists-02-problem", 
                                  "slide-lists-03-closing_comments",
                                  "slide-text-01-bold_and_italics", 
                                  "slide-text-02-tags_with_attributes", 
                                  "slide-text-03-text_sizes",
                                  "slide-text-04-font_tag",
                                  "slide-text-05-alignment",
                                  "slide-text-06-list_attributes",
                                  "slide-text-07-closing_observations",
                                  "slide-images-01-image_types", 
                                  "slide-images-02-image_tag", 
                                  "slide-images-03-attributes_for_images",
                                  "slide-images-04-text_images",
                                  "slide-images-05-linked_graphics",
                                  "slide-images-06-more_image_attributes",
                                  "slide-images-07-background_formatting",
                                  "slide-tables-01-basic_tables", 
                                  "slide-tables-02-properties_of_tables_and_cells", 
                                  "slide-tables-03-coding_tablewide_cell_properties", 
                                  "slide-tables-04-coding_cell_properties", 
                                  "slide-tables-05-individual_cell_properties", 
                                  "slide-tables-06-rowspan_and_colspan", 
                                  "slide-tables-07-advanced_uses", 
                                  "slide-tables-08-table_headers",
                                  "slide-psu-publishing", 
                                  "slide-misc-anchors", 
                                  "slide-java-applet_tag");   

   buildPage($all_sections, "Complete HTML Notes in One Page", "#336600");
?>