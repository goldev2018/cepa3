jQuery(document).ready(function(d){d(".big-cta").hover(function(){d(".cta a").addClass("animated shake")},function(){d(".cta a").removeClass("animated shake")});d(".box").hover(function(){d(this).find(".icon").addClass("animated fadeInDown");d(this).find("p").addClass("animated fadeInUp")},function(){d(this).find(".icon").removeClass("animated fadeInDown");d(this).find("p").removeClass("animated fadeInUp")});d(".accordion").on("show",function(f){d(f.target).prev(".accordion-heading").find(".accordion-toggle").addClass("active");d(f.target).prev(".accordion-heading").find(".accordion-toggle i").removeClass("icon-plus");d(f.target).prev(".accordion-heading").find(".accordion-toggle i").addClass("icon-minus")});d(".accordion").on("hide",function(f){d(this).find(".accordion-toggle").not(d(f.target)).removeClass("active");d(this).find(".accordion-toggle i").not(d(f.target)).removeClass("icon-minus");d(this).find(".accordion-toggle i").not(d(f.target)).addClass("icon-plus")});d(function(){d(".button-checkbox").each(function(){var k=d(this),h=k.find("button"),g=k.find("input:checkbox"),e=h.data("color"),f={on:{icon:"glyphicon glyphicon-check"},off:{icon:"glyphicon glyphicon-unchecked"}};h.on("click",function(){g.prop("checked",!g.is(":checked"));g.triggerHandler("change");j()});g.on("change",function(){j()});function j(){var l=g.is(":checked");h.data("state",(l)?"on":"off");h.find(".state-icon").removeClass().addClass("state-icon "+f[h.data("state")].icon);if(l){h.removeClass("btn-default").addClass("btn-"+e+" active")}else{h.removeClass("btn-"+e+" active").addClass("btn-default")}}function i(){j();if(h.find(".state-icon").length==0){h.prepend('<i class="state-icon '+f[h.data("state")].icon+'"></i> ')}}i()})});d(".social-network li a, .options_box .color a").tooltip();jQuery(".appear").appear();var b=true;jQuery(".stats").on("appear",function(g){var f={};var e=0;if(b){jQuery(".number").each(function(){f[this.id]=d(this).html();e++});jQuery.each(f,function(h,j){jQuery({countNum:0}).animate({countNum:j},{duration:3000,easing:"linear",step:function(){jQuery("#"+h).text(Math.floor(this.countNum))}})});b=false}});if(d(".parallax").length){d(window).stellar({responsive:true,scrollProperty:"scroll",parallaxElements:false,horizontalScrolling:false,horizontalOffset:0,verticalOffset:0})}d(window).scroll(function(){if(d(this).scrollTop()>100){d(".scrollup").fadeIn()}else{d(".scrollup").fadeOut()}});d(".scrollup").click(function(){d("html, body").animate({scrollTop:0},1000);return false});new UISearch(document.getElementById("sb-search"));var a=d("#grid-container"),c=d("#filters-container");a.cubeportfolio({defaultFilter:"*",animationType:"flipOutDelay",gapHorizontal:45,gapVertical:30,gridAdjustment:"responsive",caption:"overlayBottomReveal",displayType:"lazyLoading",displayTypeSpeed:100,lightboxDelegate:".cbp-lightbox",lightboxGallery:true,lightboxTitleSrc:"data-title",lightboxShowCounter:true});c.on("click",".cbp-filter-item",function(h){var g=d(this),f;if(!d.data(a[0],"cubeportfolio").isAnimating){if(c.hasClass("cbp-l-filters-dropdown")){f=d(".cbp-l-filters-dropdownWrap");f.find(".cbp-filter-item").removeClass("cbp-filter-item-active");f.find(".cbp-l-filters-dropdownHeader").text(g.text());g.addClass("cbp-filter-item-active")}else{g.addClass("cbp-filter-item-active").siblings().removeClass("cbp-filter-item-active")}}a.cubeportfolio("filter",g.data("filter"),function(){})});a.cubeportfolio("showCounter",c.find(".cbp-filter-item"));d(".cbp-l-loadMore-button-link").on("click",function(i){i.preventDefault();var g,h=d(this),f;if(h.hasClass("cbp-l-loadMore-button-stop")){return}g=d.data(this,"numberOfClicks");g=(g)?++g:1;d.data(this,"numberOfClicks",g);f=h.text();h.text("LOADING...");d.ajax({url:h.attr("href"),type:"GET",dataType:"HTML"}).done(function(e){var j,k;j=d(e).filter(function(){return d(this).is("div.cbp-loadMore-block"+g)});a.cubeportfolio("appendItems",j.html(),function(){h.text(f);k=d(e).filter(function(){return d(this).is("div.cbp-loadMore-block"+(g+1))});if(k.length===0){h.text("NO MORE WORKS");h.addClass("cbp-l-loadMore-button-stop")}})}).fail(function(){})})});$(".no-fouc").removeClass("no-fouc");

$(window).load(function(){
   $('#myModal').modal('show');
    });
