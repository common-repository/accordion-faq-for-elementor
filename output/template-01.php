<div 
    class="afaq-6310-faq-for-elementor-<?php echo $ids; ?> afaq-6310-faq-for-elementor" 
    data-up-arrow="<?php echo $cssData['title_active_icon']?>" 
    data-down-arrow="<?php echo $cssData['title_inactive_icon']?>" 
    data-icon-class="afaq-6310-faq-template-<?php echo $ids; ?>-head-right-icon" 
    data-database-id='<?php echo $ids; ?>'
    data-search-template-show-hide-id='0'
    data-category-active='0'
    data-default-category-active='0'
    data-category-template='01'
    data-animation-duration='0.5'
    data-faq-mode='1'
    data-enable-collapsible='0'
>
    <?php     
    $i = 1;
    if($faqs){
      foreach($faqs as $faq) {
    ?>
        <div class="afaq-6310-faq-template-<?php echo $ids . afaq_6310_explode_class_code($faq['class_code']); ?>">
          <div class="afaq-6310-faq-template-<?php echo $ids; ?>-label-head afaq-6310-faq-template-common-head <?php if($i++ == 1){echo " afaq-6310-faq-template-{$ids}-active"; } ?>">
              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-head-left-icon"><i class="<?php echo $faq['icons_name'] ?>"></i>
              </div>
              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-head-title"><?php echo afaq_6310_scRemove($faq['title']) ?></div>
              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-head-right-icon"> <i class="<?php echo $cssData['title_inactive_icon']?>"></i></div>
          </div>

          <div class="afaq-6310-faq-template-<?php echo $ids; ?>-content">
              <div class="afaq-6310-faq-template-<?php echo $ids; ?>-content-feature">
              <?php 
                    echo nl2br(stripslashes(html_entity_decode(esc_attr(afaq_6310_scRemove($faq['description'])))));; 
                    if(isset($cssData['template_button']) && $cssData['template_button'] == 1 && afaq_6310_scRemove($faq['link_text']) != ''){
                  ?>
                      <div class="afaq-6310-faq-template-<?php echo $ids; ?>-read-more-button">
                      <a href="<?php echo $faq['link_url']?>" <?php if($faq['new_tab'] == 1) echo "target='_blank'" ?>><?php echo afaq_6310_scRemove($faq['link_text'])?></a>
                    </div>
                  <?php
                    }
                  ?>
              </div>                              
          </div>
        </div>
  <?php
    }
  }
  ?>
  </div>