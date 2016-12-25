$(document).ready(function () {
	window.Scroll = {
		init: function() {
			$('[data-toggle="tooltip"]').tooltip();
      		p = $(".product");
      		c = $(".product-item-container");
      		id = ".newest-product-total-page";
      		url = "newest";
      		current_page = $(id).attr("current-page");
      		total_page = $(id).attr("total-page");
      		$(".product").on("scroll", function() {
		        if(p.scrollTop() >= c.height() - p.height()) {
		          if(current_page < total_page) {
		            current_page++;
		            $.ajax({
		              async: true,
		              url: "/product/" + url + "?page=" + current_page,
		              type: "GET",
		              dataType: "html",
		              success: function(data) {
		                $(".product-item-container").append(data);
		                $('[data-toggle="tooltip"]').tooltip();
		              }
		            });
		          }
		        }
		    });
		}
	};
});