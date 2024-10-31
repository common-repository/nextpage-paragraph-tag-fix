<?php

/*

Plugin Name: NextPage paragraph tag fix
Description: Fixes the invalid opening and closing paragraph tags in multipiple-page posts.
Plugin URI: http://dennishoppe.de/artikel/87/nextpage-tag-bug-in-wptinymce
Version: 1.0.0
Author: Dennis Hoppe
Author URI: http://DennisHoppe.de

*/


If (!Class_Exists('wp_plugin_next_page_paragraph_tag_fix')){
Class wp_plugin_next_page_paragraph_tag_fix {
  
  Function plugin_next_page_paragraph_tag_fix(){
    Add_Filter('the_content', Array($this, 'CleanTags'));
  }
  
  Function CleanTags ($content){
    $content = Trim ($content);
    
    // Remove closing p-tag at the beginning
    If ( SubStr ($content, 0, 4) == '</p>' )
      $content = SubStr ($content, 4);

    // Remove opening p-tag at the end
    If ( SubStr ($content, -3) == '<p>' )
      $content = SubStr ($content, 0, -3);
      
    return $content;
  }


} /* End of Class */
New wp_plugin_next_page_paragraph_tag_fix();
} /* End of If-Class-Exists-Condition */
/* End of File */