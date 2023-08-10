<?php 
   include "_notecode.php";

   // Week 4 of CS 100 course at UIC

   // Array of all sections to add to this page
   $sections =             array("slide-tables-01-basic_tables", 
                                  "slide-tables-02-properties_of_tables_and_cells", 
                                  "slide-tables-03-coding_tablewide_cell_properties", 
                                  "slide-tables-04-coding_cell_properties", 
                                  "slide-tables-05-individual_cell_properties", 
                                  "slide-tables-06-rowspan_and_colspan", 
                                  "slide-tables-07-advanced_uses", 
                                  "slide-tables-08-table_headers");  

     
   buildPage($sections, "Tables", "#336600");
?>
