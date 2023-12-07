<?php
/**
 * Plugin Name:       Advanced Custom Fields Code Snippets
 * Description:       Automatically generate code examples for a majority of the ACF field types
 * Version:           1.0.0
 * Author:            Ken Key
 * Author URI:        https://www.kennykey.com
 * Text Domain:       kennykey
 */


 class ACF_CODE_SNIPPETS
 {
     private $prefix = 'acf_code_snippets';
     private $debug = false;
     public function __construct() {

       if(!defined('ACF_CODE_SNIPPETS_CODE_URL'))
         define('ACF_CODE_SNIPPETS_CODE_URL', plugin_dir_url( __FILE__ ));
       if(!defined('ACF_CODE_SNIPPETS_CODE_PATH'))
         define('ACF_CODE_SNIPPETS_CODE_PATH', plugin_dir_path( __FILE__ ));

         add_action( 'init', [$this, "init"] );

     }


     function init(){
              add_action( 'acf/field_group/admin_footer', [$this, 'footer'], 0, 1 );
           }

           function footer($post_id){
             global $post;
             $groups = acf_get_fields($post->ID);
             $rows = [];
             if($this->debug):
             ?>

             <div class="postbox-container">
               <div class="acf_code_snippet_container postbox">
                 <code><pre>
                   <?php print_r($groups); ?>
                 </pre></code>
               </div>
             </div>
           <?php endif; ?>

             <style>
             .acf_code_snippet_container {
                  margin-left: 180px;
                  margin-bottom: 40px;
                  min-width: 100%;
              }
              .acf_code_snippet_single_container {
                  /*border: 1px solid #000;
                  */
                  padding: 10px;
                  margin-bottom: 4px;
                  border-radius: 5px;
              }
            .acf_code_snippet_container h2 {
                font-size: 14px;
                padding: 8px 12px;
                margin: 0;
                line-height: 1.4;
              }
              .acf_code_snippet_container .toggle-indicator:before {
                content: "\f142";
                display: inline-block;
                font: normal 20px/1 dashicons;
                speak: none;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-decoration: none!important;
              }
              .acf_code_snippet_container.closed .toggle-indicator:before {
                    content: "\f140";
              }
              .acf_code_snippet_single_container h3 {
                    margin: 0 0 6px 0;
              }
              #wpbody-content {
                padding-bottom: 0 !important;
              }
             </style>
             <div class="postbox-container">
             <div class="acf_code_snippet_container postbox">
               <button type="button" class="handlediv" aria-expanded="true">
                 <span class="screen-reader-text">Toggle panel: Code Snippets</span>
                 <span class="toggle-indicator" aria-hidden="true"></span>
               </button>
               <h2 class="hndle ui-sortable-handle"><span>Code Snippets</span></h2>
               <div class="inside -left">
             <?php
             foreach($groups as $group){
               $this->acf_code_snippet_group($group);
             }
             ?>
           </div>
             </div>
           </div>
             <?php

           }

           function acf_code_snippet_group($group, $is_sub_field = false){
             ?>
          <div class="acf_code_snippet_single_container">
            <?php if(!$is_sub_field): ?>
                <h3><?php echo $group["label"]; ?></h3>
            <?php else: ?>
            <!--//<?php echo $group["label"]; ?><br>-->
          <?php endif; ?>
          <?php
		  // echo '<pre>';
		 // print_r($group);
		  // echo '</pre>';
             switch($group["type"]){
               case "text":
				if($group["name"]=='sdt' or $group["name"]=='hotline'):
				?>
               <code>
			   &lt;?php the<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>","option"); ?&gt;
				</code>
				<?php
				else:
					echo $this->acf_code_snippet_basic_output($group, $is_sub_field);
				endif;
				
			   break;
               case "textarea":
               case "number":
               case "email":
               case "range":
               case "url":
               case "password":
               case "wysiwyg":
               case "oembed":
               case "true_false":
                echo $this->acf_code_snippet_basic_output($group, $is_sub_field);
                break;
              case "image":
                $return_format = $group["return_format"];
                if($return_format == "array"){
                  echo $this->acf_code_snippet_image_array_output($group, $is_sub_field);
                }
                if($return_format == "id"){
                  echo $this->acf_code_snippet_image_id_output($group, $is_sub_field);
                }
                if($return_format == "url"){
				?>
               <code>
               &lt;?php the<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>"<?php if(!$this->sub_field_code($is_sub_field)){ echo ',"option"'; }?>);?&gt;
             </code>
				<?php
                  //echo $this->acf_code_snippet_basic_output($group, $is_sub_field);
                }
                break;
				case "relationship":
?>
<code>&lt;?php $posts = get_field(&quot;<?php echo $group["name"]; ?>&quot;,"option");if( $posts ): ?&gt;<br>
&lt;?php $i = 0;foreach( $posts as $post): setup_postdata($post);$i++; ?&gt;<br>
&lt;?php endforeach; wp_reset_postdata();?&gt;<br>
&lt;?php endif; ?&gt;<br>
</code>
<?php
				break;
                case "file":
                  $return_format = $group["return_format"];
                  if($return_format == "array"){
                    echo $this->acf_code_snippet_file_array_output($group, $is_sub_field);
                  }
                  if($return_format == "id"){
                    echo $this->acf_code_snippet_file_id_output($group, $is_sub_field);
                  }
                  if($return_format == "url"){
                    echo $this->acf_code_snippet_basic_output($group, $is_sub_field);
                  }
                  break;
                case "gallery":
                  echo $this->acf_code_snippet_gallery_output($group, $is_sub_field);
                  break;
                case "select":
                case "checkbox":
                case "radio":
                case "button_group":
                  $return_format = $group["return_format"];
                  if(!(isset($group["multiple"]))){
                    $group["multiple"] = false;
                  }
                  $is_multiple = boolval($group["multiple"]);
                  if($return_format == "value" || $return_format == "label"){
                    if($is_multiple){
                      echo $this->acf_code_snippet_select_multiple_output($group, $is_sub_field);
                    } else {
                      echo $this->acf_code_snippet_basic_output($group, $is_sub_field);
                    }
                  }
                  if($return_format == "array"){
                    if($is_multiple){
                      echo $this->acf_code_snippet_select_array_multiple_output($group, $is_sub_field);
                    } else {
                      echo $this->acf_code_snippet_select_array_output($group, $is_sub_field);
                    }

                  }
                  break;
                case "group":
                  if($is_sub_field){
                    echo $this->acf_code_snippet_repeater_output($group, $is_sub_field);
                  } else {
                    echo $this->acf_code_snippet_group_output($group, $is_sub_field);
                  }
                  break;
                case "repeater":
                  echo $this->acf_code_snippet_repeater_output($group, $is_sub_field);
                  break;
               default:
               echo $this->acf_code_snippet_unsupported_output($group, $is_sub_field);
                break;
             }
             ?>

           </div>
           <?php if(!$is_sub_field): ?><hr /><?php endif; ?>
           <?php
           }

           function sub_field_code($is_sub_field){
             if($is_sub_field){
               return "_sub";
             }
             return "";
           }

           function acf_code_snippet_repeater_output($group, $is_sub_field = false){
             $children = $group["sub_fields"];
             ?>
             <code>
             &lt;?php while( have_rows("<?php echo $group["name"]; ?>","option") ): the_row();?&gt;<br>
             <?php
             foreach($children as $child){
               $this->acf_code_snippet_group($child, true);
             }
             ?>
             &lt;?php endwhile;?&gt;<br>
           </code>
             <?php
           }

           function acf_code_snippet_group_output($group, $is_sub_field = false){
             $children = $group["sub_fields"];
             foreach($children as $child){
               $child["name"] = $group["name"]."_".$child["name"];
               $this->acf_code_snippet_group($child, $is_sub_field);
             }
           }

           function acf_code_snippet_unsupported_output($group, $is_sub_field = false){
             if(empty($group["name"])){
               return false;
             }
             ob_start();
             ?>
               <div style="color:red; font-weight:bold; margin-bottom:6px;">
                 Unsupported Type
               </div>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             echo $code;
             echo $this->acf_code_snippet_basic_output($group);
           }

           function acf_code_snippet_basic_output($group, $is_sub_field = false){
             ob_start();
             ?>
              <!-- <code>
               $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");
             </code>-->
             <?php if(!$is_sub_field): ?>
             <hr style="border: 1px dashed #ddd;" />
           <?php else: ?>
           <br>
           <?php endif; ?>
               <code>
                &lt;?php the<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>"<?php if(!$this->sub_field_code($is_sub_field)){ echo ',"option"';}?>);?&gt;
             </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }

           function acf_code_snippet_image_array_output($group, $is_sub_field = false){
             ob_start();
             ?>
             <code>
             $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");<br />
             <br />
             if( !empty($<?php echo $group["name"]; ?>) ):<br />
             <br />
             &emsp;// vars<br />
             &emsp;$url = $<?php echo $group["name"]; ?>['url'];<br />
             &emsp;$title = $<?php echo $group["name"]; ?>['title'];<br />
             &emsp;$alt = $<?php echo $group["name"]; ?>['alt'];<br />
             &emsp;$caption = $<?php echo $group["name"]; ?>['caption'];<br />
             &emsp;<br />
             &emsp;// thumbnail<br />
             &emsp;$size = 'thumbnail';<br />
             &emsp;$thumb = $<?php echo $group["name"]; ?>['sizes'][ $size ];<br />
             &emsp;$width = $<?php echo $group["name"]; ?>['sizes'][ $size . '-width' ];<br />
             &emsp;$height = $<?php echo $group["name"]; ?>['sizes'][ $size . '-height' ];<br />
             <br />
             endif;<br />
           </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }

           function acf_code_snippet_image_id_output($group, $is_sub_field = false){
             ob_start();
             ?>
             <code>
             $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");<br />
             $size = 'full'; // (thumbnail, medium, large, full or custom size)<br />
             <br />
             if( $<?php echo $group["name"]; ?> ) {<br />
             &emsp;echo wp_get_attachment_image( $<?php echo $group["name"]; ?>, $size );<br />
             }<br />
             </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }

           function acf_code_snippet_file_array_output($group, $is_sub_field = false){
             ob_start();
             ?>
             <code>
             $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");<br />
             <br />
             if( !empty($<?php echo $group["name"]; ?>) ):<br />
             <br />
              &emsp;// vars<br />
              &emsp;$url = $<?php echo $group["name"]; ?>['url'];<br />
            	&emsp;$title = $<?php echo $group["name"]; ?>['title'];<br />
            	&emsp;$caption = $<?php echo $group["name"]; ?>['caption'];<br />
              <br />
            	&emsp;// icon<br />
            	&emsp;$icon = $<?php echo $group["name"]; ?>['icon'];<br />
            	<br />
            	&emsp;if( $<?php echo $group["name"]; ?>['type'] == 'image' ) {<br />
            		<br />
            	&emsp;&emsp;$icon =  $<?php echo $group["name"]; ?>['sizes']['thumbnail'];<br />
            		<br />
            	}<br />
             <br />
             endif;<br />
           </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }

           function acf_code_snippet_file_id_output($group, $is_sub_field = false){
             ob_start();
             ?>
             <code>
             $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");<br />
             <br />
             if( $<?php echo $group["name"]; ?> ):<br />
              &emsp;$url = wp_get_attachment_url( $<?php echo $group["name"]; ?>);<br />
             endif;<br />
           </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }

           function acf_code_snippet_gallery_output($group, $is_sub_field = false){
             ob_start();
             ?>
             <code>
&lt;?php $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");?&gt;<br />
&lt;?php if( $<?php echo $group["name"]; ?> ):?&gt;<br />
&lt;?php foreach( $<?php echo $group["name"]; ?> as $image ):?&gt;<br />
&lt;a href=&quot;&lt;?php echo $image['url'];?&gt;&quot;&gt;<br />
&lt;img src=&quot;&lt;?php echo $image['sizes']['thumbnail'];?&gt;&quot;&gt;<br />
&lt;/a&gt;<br />
&lt;?php endforeach;?&gt;<br />
&lt;?php endif;?&gt;<br />
           </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }

           function acf_code_snippet_select_multiple_output($group, $is_sub_field = false){
             ob_start();
             ?>
             <code>
             $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");<br />
             <br />
             if( $<?php echo $group["name"]; ?> ):<br />
              &emsp;$list = echo implode(', ', $<?php echo $group["name"]; ?>); ?><br />
             endif;<br />
           </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }

           function acf_code_snippet_select_array_output($group, $is_sub_field = false){
             ob_start();
             ?>
             <code>
             $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");<br />
             $value = $<?php echo $group["name"]; ?>['value'];<br />
             $label = $<?php echo $group["name"]; ?>['label'];<br />
           </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }

           function acf_code_snippet_select_array_multiple_output($group, $is_sub_field = false){
             ob_start();
             ?>
             <code>
             $<?php echo $group["name"]; ?> = get<?php echo $this->sub_field_code($is_sub_field); ?>_field("<?php echo $group["name"]; ?>");<br />
             <br />
             foreach($<?php echo $group["name"]; ?> as $option){<br />
             &emsp;$value = $option['value'];<br />
             &emsp;$label = $option['label'];<br />
             }
           </code>
             <?php
             $code = ob_get_contents();
             ob_end_clean();
             return $code;
           }
   }


 $acf_code_snippets = new ACF_CODE_SNIPPETS();
