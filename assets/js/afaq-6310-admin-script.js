jQuery(document).ready(function () {
  // var t = jQuery(".codemirror-textarea")[0];
  // CodeMirror.fromTextArea(t, { mode: "text/html", tabMode: "indent", autoCloseTags: !0, lineNumbers: !0, fixedGutter: !0, lineWrapping: !0, autoCloseBrackets: !0 });
  jQuery("#tab-2, #tab-3, #tab-4, #tab-5, #tab-6, #tab-7, #tab-8, #tab-9").hide(),
      jQuery("body").on("click", ".afaq-6310-mytab", function () {
          jQuery(".afaq-6310-mytab").removeClass("active"), jQuery(this).addClass("active");
          var t = jQuery(this).attr("id");
          return (
              (t = parseInt(t.substring(3))),
              jQuery("#tab-1, #tab-2, #tab-3, #tab-4, #tab-5, #tab-6, #tab-7, #tab-8, #tab-9").hide(),
              jQuery("#tab-" + t).show(),
              jQuery("#tab6").click(function (t) {
                  jQuery(".codemirror-textarea").focus();
              }),
              !1
          );
      });
});
