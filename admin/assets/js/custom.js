(function ($) {
  $(document).ready(function () {
    //All a tag preventDefault
    // $("a").click(function (e) {
    //   e.preventDefault();
    // });
    $(document).on("click", "a#product_nav_", function (e) {
      e.preventDefault();
    });

    //All product load
    $(document).on("click", "a#allProducts_nav_btn", function (e) {
      e.preventDefault();
      $.ajax({
        url: "products/all.php",
        success: function (data) {
          $("#app").html(data);
          allProductShow();
        },
      });
    });

    //add new product form load
    $(document).on("click", "a#addNewProduct_nav_btn", function (e) {
      e.preventDefault();
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
          allProductShow();
        },
      });
    }
    defaultLoad();

    // showing all product data in table
    function allProductShow() {
      $.ajax({
        url: "products/inc/ajax/all_products.php",
        success: function (data) {
          $("#allProductDataShow_tbody").html(data);
        },
      });
    }
    allProductShow();

    // deleteProduct by id
    $(document).on("click", "a#deleteProduct", function (e) {
      e.preventDefault();
      let deleteId = $(this).attr("delete-id");

      swal({
        title: "Are you sure?",
        text:
          "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
          $.ajax({
            url: "products/inc/ajax/delete_product.php",
            method: "POST",
            data: {
              id: deleteId,
            },
            success: function (data) {
              allProductShow();
            },
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });
    });

    // Product status_update by id
    $(document).on("click", "a#productStatus", function (e) {
      e.preventDefault();
      let status_update_id = $(this).attr("status_update_id");
      let status = $(this).attr("status");
      $.ajax({
        url: "products/inc/ajax/status_update.php",
        method: "POST",
        data: {
          id: status_update_id,
          status: status,
        },
        success: function (data) {
          allProductShow();
        },
      });
    });

    // product_add_new_form submit
    $(document).on("submit", "form#product_add_new_form", function (e) {
      e.preventDefault();

      $.ajax({
        url: "products/inc/ajax/add_product.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        processData: false,
        success: function (data) {
          if (data == true) {
            swal({
              title: "Great job!",
              text: "Product uploaded successfully",
              icon: "success",
            });
          } else {
            swal({
              title: "Warning!",
              text: "Some fields are required",
              icon: "warning",
            });
          }

          $("form#product_add_new_form")[0].reset();
          $("form#product_add_new_form img#img_preload_product").attr(
            "src",
            ""
          );
        },
      });
    });
  });

  // Product image preload
  $(document).on(
    "change",
    "form#product_add_new_form input#productimgs",
    function (e) {
      let fileUrl = URL.createObjectURL(e.target.files[0]);
      $("#myProgress").css("display", "block");
      $("img#imgUploader_icon").css("display", "none");

      var elem = document.getElementById("myBar");
      var width = 0;
      var id = setInterval(frame, 10);
      function frame() {
        if (width == 100) {
          clearInterval(id);
          $("form#product_add_new_form img#img_preload_product").attr(
            "src",
            fileUrl
          );
          $("#myProgress").css("display", "none");
          $("a#removeLoadedPhoto").css("display", "inline-block");
          $("a#removeLoadedPhoto").css("display", "inline-block");
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  );

  // removeLoadedPhoto by click
  $(document).on("click", "a#removeLoadedPhoto", function (e) {
    e.preventDefault();
    $("img#img_preload_product").attr("src", "");
    $("img#imgUploader_icon").css("display", "block");
    $("a#removeLoadedPhoto").css("display", "none");
  });

  // end
})(jQuery);
