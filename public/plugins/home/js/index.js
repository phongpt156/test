$(document).ready(function () {

  $(".category-menu-container").hide();
  $(".menu-header-container > li > a").on("click", function() {
    var target = $(this).attr("target");
    $(target).toggle();
  });
  var jssor_1_SlideoTransitions = [
    [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
    [{b:1900,d:2000,x:-379,e:{x:7}}],
    [{b:1900,d:2000,x:-379,e:{x:7}}],
    [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:1000,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:1900,d:1600,x:-200,o:-1,e:{x:16}}]
  ];

  var jssor_1_options = {
    $AutoPlay: true,
    $SlideDuration: 800,
    $SlideEasing: $Jease$.$OutQuint,
    $CaptionSliderOptions: {
      $Class: $JssorCaptionSlideo$,
      $Transitions: jssor_1_SlideoTransitions
    },
    $ArrowNavigatorOptions: {
      $Class: $JssorArrowNavigator$
    },
    $BulletNavigatorOptions: {
      $Class: $JssorBulletNavigator$
    }
  };

  var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

  //responsive code begin
  //you can remove responsive code if you don't want the slider scales while window resizing
  function ScaleSlider() {
      var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
      if (refSize) {
          refSize = Math.min(refSize, 1920);
          jssor_1_slider.$ScaleWidth(refSize);
      }
      else {
          window.setTimeout(ScaleSlider, 10);
      }
  }
  ScaleSlider();
  $(window).bind("load", ScaleSlider);
  $(window).bind("resize", ScaleSlider);
  $(window).bind("orientationchange", ScaleSlider);
  //responsive code end
  $(".product-action ul li").on("click", function () {
    $(this).toggleClass("active");
  });
  window.Scroll = {
    init: function(c, p, id, url, append_pos) {
      var current_page = id.attr("current-page");
      if(p.scrollTop() >= c.height() - p.height()) {
        if(current_page < id.attr("total-page")) {
          current_page++;
          $.ajax({
            async: true,
            url: url + current_page,
            type: "GET",
            dataType: "html",
            success: function(data) {
              c.append(data);
            }
          })
        }
      }
      p.scroll( function() {
        if(p.scrollTop() >= c.height() - p.height()) {
          if(current_page < id.attr("total-page")) {
            current_page++;
            $.ajax({
              async: true,
              url: url + current_page,
              type: "GET",
              dataType: "html",
              success: function(data) {
                append_pos.append(data);
              }
            })
          }
        }
      });
    }
  };
  window.ProductHome = {
    init: function() {
      p = $(".product");
      c = $(".product-item-container");
      length = $(".kindof-product > li").length;
      for(i = 0; i < length; i++) {
        if($(".kindof-product > li").eq(i).attr("class") == "active") {
          target = $(".kindof-product > li").eq(i).attr("data-target");
          url = target;
          id = "." + target + "-product-total-page";
        }
      }
      current_page = $(id).attr("current-page");
      total_page = $(id).attr("total-page");
      $(".kindof-product > li").on("click", function() {
        $(".product").scrollTop(0);
        for(i = 0; i < length; i++) {
          if($(".kindof-product > li").eq(i).attr("class") == "active") {
            $(".kindof-product > li").eq(i).attr("class", "");
          }
        }
        $(this).attr("class", "active");
        url = $(this).attr("data-target");
        $.ajax({
          asyn: true,
          url: "http://localhost:8000/product/" + url,
          type: "GET",
          dataType: "html",
          success: function(data) {
            $(".product-item-container").html(data);
            id = "." + url + "-product-total-page";
            current_page = $(id).attr("current-page");
            total_page = $(id).attr("total-page");
          }
        });
      });
      $(".product").on("scroll", function() {
        if(p.scrollTop() >= c.height() - p.height()) {
          if(current_page < total_page) {
            current_page++;
            $.ajax({
              url: "http://localhost:8000/product/" + url + "?page=" + current_page,
              type: "GET",
              dataType: "html",
              success: function(data) {
                $(".product-item-container").append(data);
              }
            })
          }
        }
      });
    }
  };

  window.SearchTagging = {
    init: function() {
      $(".search-tagging").on("click", function() {
        html = "<input type='text' class='search-tag-element'/>";
        $(".search-form").append(html);
      });
    }
  };

});