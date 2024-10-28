<div class="afaq-6310">
   <div class="afaq-6310-sm">
      <div class="afaq-6310-plugin-setting-left">
         <div class="afaq-6310-preview-box">
            <div class="afaq-6310-preview">
               Live Preview
               <div class="afaq_6310_add_media_body_shortcode">
                  Shortcode
                  <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value='[afaq_6310_faq id="<?php echo $styleId; ?>"]'  />
               </div>
            </div>
            <hr />
         </div>
         <div class="afaq_6310_tabs_panel_preview">
            <div 
               class="afaq-6310-faq-for-elementor-<?php echo $ids; ?> afaq-6310-faq-for-elementor" 
               data-up-arrow="<?php echo $cssData['title_active_icon']?>" 
               data-down-arrow="<?php echo $cssData['title_inactive_icon']?>" 
               data-icon-class="afaq-6310-faq-template-<?php echo $ids; ?>-right-icon" 
               data-database-id='<?php echo $ids; ?>'
               data-search-template-show-hide-id='<?php echo isset($cssData['search_template_show_hide']) ? 1 : 0 ?>'
               data-category-active='<?php echo isset($cssData['category_template_show_hide']) ? 1 : 0 ?>'
               data-default-category-active='<?php echo isset($cssData['activate_default_category']) ? 1 : 0 ?>'
               data-category-template='<?php echo (isset($cssData['activate_default_category']) && substr($cssData['selected_category_template'], -2)) ? substr($cssData['selected_category_template'], -2) : '01' ?>'
            >
               <?php
                 echo afaq_6310_load_search_template($cssData, $ids);
                 echo afaq_6310_load_category_template($cssData, $ids, $category_order);
                 $i = 1; 
               if ($faqs) {
                  foreach ($faqs as $faq) {
               ?>
                     <div class="afaq-6310-faq-template-<?php echo $ids . afaq_6310_explode_class_code($faq['class_code']); ?>">
                           <div class="afaq-6310-faq-template-<?php echo $ids; ?>-label-head <?php if ($i++ == 1) {echo "afaq-6310-faq-template-{$ids}-active"; } ?>">
                              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-left-icon"><i class="<?php echo $faq['icons_name'] ?>"></i></div>
                              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-head-title"><?php echo afaq_6310_scRemove($faq['title']) ?></div>
                              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-right-icon"><i class="<?php echo $cssData['title_inactive_icon'] ?>"></i></div>

                           </div>
                           <div class="afaq-6310-faq-template-<?php echo $ids; ?>-content">
                              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-content-feature">
                              <?php echo nl2br(stripslashes(html_entity_decode(esc_attr(afaq_6310_scRemove($faq['description']))))); 
                              if(isset($cssData['template_button']) && $cssData['template_button'] == 1 && afaq_6310_scRemove($faq['link_text']) != ''){
                              ?>
                              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-read-more-button">
                                 <a href="<?php echo $faq['link_url']?>" <?php if($faq['new_tab'] == 1) echo "target='_blank'" ?>><?php echo afaq_6310_scRemove($faq['link_text'])?></a>
                              </div>
                              <?php } ?>
                              </div>
                           </div>
                        </div>
               <?php
                  }
               }
               ?>
            </div>
         </div>
      </div>

      <div class="afaq-6310-plugin-setting-right">
         <?php afaq_6310_add_or_edit_template($styleId, $template_order, $category_order, esc_attr($styledata['style_name'])); ?>
      </div>
      </div>