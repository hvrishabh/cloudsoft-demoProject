(function ($, window, Drupal) {
  Drupal.behaviors.cloudsoft = {
    attach: function (context, settings) {
      $(".features_class a").click(function (e) {
        items = document.getElementsByClassName("para");
        for (var i = 0; i < items.length; i++) {
          items[i].classList.add("d-none");
        }
        $(e.target.hash).toggleClass("d-none");
      });
      // on hover changeing the color of featues links
      // $(".features .features-list .menu .menu-item").mouseenter(function (e) {
      //   $(e.target + " a" ).css("color", "white");
      // });
      // $(".features .features-list .menu .menu-item").mouseleave(function () {
      //   $(".features .features-list .menu .menu-item a").css("color", "blue");
      // });

      $(".banner-bottom-inner .btn").click(function (e) {
        e.preventDefault();
        var pdfUrl =
          "https://websitesetup.org/wp-content/uploads/2020/09/Javascript-Cheat-Sheet.pdf";
        var link = document.createElement("a");
        link.href = pdfUrl;
        link.download = "your-pdf-filename.pdf";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      });
    },
  };
})(jQuery, window, Drupal);
