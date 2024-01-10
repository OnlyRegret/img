$(function() {
  $(".links-card ul.list-inline img").each(function() {
    if ("" == $(this).attr("data-src")) {
      var a = "" + $(this).parent().attr("href");
      $(this).attr("src", a)
    }
  }), $(document).on("click", ".sm", function() {
    var a = $(this);
    if (a.hasClass("private_now")) return notyf("您之前已设过私密评论", "warning"), !1;
    a.addClass("private_now");
    var t = a.data("idp"),
      e = a.data("actionp"),
      n = a.children(".has_set_private"),
      r = {
        action: "mrhe_private",
        p_id: t,
        p_action: e
      };
    return $.post("/wp-admin/admin-ajax.php", r, function(a) {
      n.html(a)
    }), !1
  })
});