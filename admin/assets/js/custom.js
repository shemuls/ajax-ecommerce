(function ($) {
  $(document).ready(function () {
    //All a tag preventDefault
    $("a").click(function (e) {
      e.preventDefault();
    });
    $(document).on("click", "a", function (e) {
      e.preventDefault();
    });

    //All product load
    $(document).on("click", "a#allProducts_nav_btn", function (e) {
      $.ajax({
        url: "products/all.php",
        success: function (data) {
          $("#app").html(data);
        },
      });
    });

    //add new product form load
    $(document).on("click", "a#addNewProduct_nav_btn", function (e) {
      $.ajax({
        url: "products/create.php",
        success: function (data) {
          $("#app").html(data);
        },
      });
    });

    //deafult load
    function defaultLoad() {
      $.ajax({
        url: "products/all.php",
        success: function (data) {
          $("#app").html(data);
        },
      });
    }
    defaultLoad();
  });
})(jQuery);
