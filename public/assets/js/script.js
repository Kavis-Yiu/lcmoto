/* Custom JS */
$(function() {
	// image parallax effect
	var $bg0 = $("div.bg0").on("mousemove", function(e) {
		$bg0.css("background-position", (48 + (e.pageX / window.innerWidth * 2))+"% "+(98 + (e.pageY / window.innerHeight * 2))+"%");
	});
	
	// minimizable nav effect
	var $doc = $(document), $header = $("header");
	$(window).on("scroll", function() {
		$header[$doc.scrollTop() >= 266? "addClass": "removeClass"]("float");
	}).trigger("scroll");
	
	// toggle minified menu
	var $menu = $header.find(".menu"), $sub = $header.children(".sub");
	$menu.on("click", function(e) {
		e.stopPropagation();
		
		$sub.stop();
		
		if ($menu.hasClass("open")) {
			$menu.removeClass("open");
			$sub.fadeOut(200);
		}
		else {
			$menu.addClass("open");
			$sub.fadeIn(200);
		}
	});
	
	// click on nav item
	var $hb = $("html, body"), $section = {
		"about": $("section.about"),
		"service": $("section.service"),
		"ocr": $("section.ocr"),
		"contact": $("section.contact"),
	};
	$(".item").on("click", "a[class]", function() {
		$hb.stop(true).animate({
			scrollTop: $section[$(this).attr("class")].offset().top-60+"px"
		}, 250);
		
		$menu.removeClass("open");
		$sub.fadeOut(200);
	});
	
	// hide the minified menu
	$hb.on("click", function() {
		$menu.removeClass("open");
		$sub.fadeOut(200);
	});
	
	// toggle use of cookies
	var $uoc = $("#uoc"), $body = $("body");
	$("footer").on("click", "a.uoc", function() {
		$body.addClass("noScroll");
		$uoc.fadeIn(200);
	});
	$uoc.on("click", "a.uoc", function() {
		$uoc.fadeOut(200);
		$body.removeClass("noScroll");
	});
});