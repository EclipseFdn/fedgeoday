/* ========================================================================
 * FedGeoDay Main JS file
 * Author: Christopher Guindon - Eclipse Foundation
 * ========================================================================
 * Copyright (c) 2015 Eclipse Foundation and others.
 * 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 * ======================================================================== */

(function($) {

	/* Enable smooth scrolling on all links with anchors */
	$("#main-menu.smoothscroll li a[href^='#']").on('click', function(event) {
		var target = this.hash;
		event.preventDefault();
		return $('html, body').animate({
			scrollTop: $(this.hash).offset().top}, 300, function() {
				return window.history.pushState(null, null, target);
		});
	});
	
	/* Code for the session schedule */
	$(".btn-showmore").click(function(event) {
		event.preventDefault();
		$(this).siblings('.body').toggle( "slow", function() {});
	});
	
	/* Hide extra sessions */
	var schedule_item_count = Math.round($('.timeline-entry').length/2);
	function hideSchedule() {
		var id = 0;
		$('.timeline-entry').each(function(){
			id++;
			if (id > schedule_item_count){
				$(this).toggle();
			}
		});
	}
	hideSchedule();

	$("#btn-schedule-toggle").click(function(event) {
		event.preventDefault();
		$(this).children('img').toggleClass('rotated');
		var text = $(this).children('span');
		if ($(text).text() === "View More") {
			$(text).text("View Less");
			$('.timeline-entry').show();
		} else {
			$(text).text("View More");
			$('html, body').animate({
				scrollTop: $("#schedule").offset().top,
				duration: 2000
			},  hideSchedule());
		}
	});

})(jQuery);