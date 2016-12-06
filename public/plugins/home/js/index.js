$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip(); 
  $(".category-menu-container").hide();
  $(".menu-header-container > li > a").on("click", function() {
    var target = $(this).attr("target");
    $(target).toggle();
  });
  $(".pft").on("click", function() {
    $(".category-menu-container").hide();
  });
  $(document).on("click", function() {
    $(".category-menu-container").hide();
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
      $(".search-tagging > li > a").on("click", function() {
        cls = $(this).attr("class");
        if(cls) {
          if(cls.search("disabled") === -1) {
            if($(this).attr("value")) {
              value = $(this).attr("value");
            }
            length = $(".search-tag-element-container").length + 1;
            if(length) {
              if($(this).attr("class").search("product_feature") !== -1) {
                html = "<div class='search-tag-element-container' value='" + value + "'><a class='delete-search-tag' target='" + value + "' href='javascript:void(0)'>x</a><span class='search-tag-element'>" + value + "</span><input type='text' class='search-tag-element' name='product[feature][" + length + "]' value='" + value + "' /></div>";
              }
              else if($(this).attr("class").search("female") !== -1) {
                name = $(this).attr("name");
                html = "<div class='search-tag-element-container' value='" + value + "'><a class='delete-search-tag' target='" + value + "' href='javascript:void(0)'>x</a><span class='search-tag-element'>" + name + "</span><input type='text' class='search-tag-element' name='cate[female][" + length + "]' value='" + value + "' /></div>";
              }
              else if($(this).attr("class").search("male") !== -1) {
                name = $(this).attr("name");
                html = "<div class='search-tag-element-container' value='" + value + "'><a class='delete-search-tag' target='" + value + "' href='javascript:void(0)'>x</a><span class='search-tag-element'>" + name + "</span><input type='text' class='search-tag-element' name='cate[male][" + length + "]' value='" + value + "' /></div>";
              }
            }
            $(".search-tag-container").append(html);
          }
          else {
            length = $(".search-tag-container > .search-tag-element-container").length;
            for(i = 0; i < length; i++) {
              if($(".search-tag-container > .search-tag-element-container").eq(i).attr("value") === $(this).attr("value")) {
                $(".search-tag-container > .search-tag-element-container").eq(i).remove();
              }
            }
          }
        }
        else {
          if($(this).attr("value")) {
              value = $(this).attr("value");
          }
          length = $(".search-tag-element-container").length + 1;
          if(length) {
            if($(this).attr("class").search("product_feature") !== -1) {
              html = "<div class='search-tag-element-container' value='" + value + "'><a class='delete-search-tag' target='" + value + "' href='javascript:void(0)'>x</a><span class='search-tag-element'>" + value + "</span><input type='text' class='search-tag-element' name='product[feature][" + length + "]' value='" + value + "' /></div>";
            }
            else if($(this).attr("class").search("female") !== -1) {
              name = $(this).attr("name");
              html = "<div class='search-tag-element-container' value='" + value + "'><a class='delete-search-tag' target='" + value + "' href='javascript:void(0)'>x</a><span class='search-tag-element'>" + name + "</span><input type='text' class='search-tag-element' name='cate[female][" + length + "]' value='" + value + "' /></div>";
            }
            else if($(this).attr("class").search("male") !== -1) {
              name = $(this).attr("name");
              html = "<div class='search-tag-element-container' value='" + value + "'><a class='delete-search-tag' target='" + value + "' href='javascript:void(0)'>x</a><span class='search-tag-element'>" + name + "</span><input type='text' class='search-tag-element' name='cate[male][" + length + "]' value='" + value + "' /></div>";
            }
          }
          $(".search-tag-container").append(html);
        }
        $(this).toggleClass("disabled");
      });

      $(document).on("click", ".delete-search-tag", function() {
        length = $(".search-tag-container > .search-tag-element-container").length;
        for(i = 0; i < length; i++) {
          if($(".search-tag-container > .search-tag-element-container").eq(i).attr("value") === $(this).attr("target")) {
            $(".search-tag-container > .search-tag-element-container").eq(i).remove();
          }
        }
        length = $(".disabled").length;
        for(i = 0; i < length; i++) {
          if($(".disabled").eq(i).attr("value") === $(this).attr("target")) {
            $(".disabled").removeClass("disabled");
          }
        }
      });
    }
  };
  window.ViewProduct = {
    init: function() {
      $(".product-image-container").on("click", function(e) {
        e.preventDefault();
        url = $(this).attr("href");
        $.ajax({
          type: 'GET',
          dataType: 'html',
          url: url,
          success: function(data) {
            $("body").prepend(data);
            $("#product-detail").modal({
              show: true,
              keyboard: 'static',
              backdrop: true
            });
            $("#product-detail").on('hidden.bs.modal', function () {
              $("#product-detail").remove();
            });
          }
        });
      });
    }
  }

});