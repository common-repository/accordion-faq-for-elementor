var $ = jQuery;
jQuery(document).ready(function() {
    jQuery("body").on("click", ".open_in_new_tab_class", function() { return "_blank" == jQuery(".open_in_new_tab_class").attr("target") ? window.open(jQuery(this).attr("href"), "_blank").focus() : window.open(jQuery(this).attr("href"), "_parent").focus(), !1 }), jQuery("body").on("click", ".afaq_6310_faq_faq_info", function() {
        jQuery("body").prepend('<div id="myafaq_6310_modal" class="afaq_6310_modal"><div class="afaq_6310_modal-content"><span class="afaq-6310-close">&times;</span><div class="afaq_6310_modal_body_picture"><img src="" id="afaq_6310_modal_img" /></div><div class="afaq_6310_modal_body_content"><div id="afaq_6310_modal_designation"></div><div id="afaq_6310_modal_name"></div><div id="afaq_6310_modal_details"></div><br><br><div class="afaq_6310_modal_social"></div></div><br class="afaq_6310_clear" /></div><br class="afaq-6310-clear" /></div>');
        var s = parseInt(jQuery(this).attr("faq-for-elementorid"));
        parseInt(jQuery(this).attr("link-id")) > 0 ? "1" == jQuery(this).attr("target") ? window.open(jQuery(this).attr("link-url"), "_blank").focus() : window.open(jQuery(this).attr("link-url"), "_parent").focus() : s > 0 && (jQuery("#afaq_6310_loading").show(), jQuery("body").css({ overflow: "hidden" }), $.ajax({ type: "GET", dataType: "json", url: afaq_6310_ajax_object.afaq_6310_ajax_url, data: { action: "afaq_6310_faq_faq_details", ids: s }, success: function(s) { jQuery("#afaq_6310_loading").hide(), jQuery(".afaq_6310_modal-content").css({ "animation-name": "afaq-6310-animate" + s.styledata.effect }), jQuery("#myafaq_6310_modal").show(), jQuery("#afaq_6310_modal_img").attr("src", s.styledata.image), jQuery("#afaq_6310_modal_img").attr("image_hover", s.styledata.image_hover), jQuery("#afaq_6310_modal_designation").text(s.styledata.designation), jQuery("#afaq_6310_modal_name").text(s.styledata.name), jQuery(".afaq_6310_modal_social").html(""), jQuery(".afaq_6310_modal_social").append(s.link), jQuery("#afaq_6310_modal_details").html(s.styledata.profile_details.replace(/\n/g, "<br>")) } }))
    })
});