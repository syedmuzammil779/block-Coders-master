// detecting the elements in viewport
	// $(window).scroll( function(e) {
	// 	e.preventDefault();
	// 	var scroll = $(window).scrollTop();
	// 	var sectionLength = $('.sections')
	// 	for (var i = 0; i <= sectionLength.length; i++) {
	// 	if (i <= sectionLength.length -1) {
	// 		var els = $(sectionLength[i]);
	// 		var nextEle = els.next();
	// 		var position = els.position();
	// 		var positionFromTop = position.top;
	// 		var nextElePosition = nextEle.position();
	// 		var NextElepositionFromTop = nextElePosition.top;
	// 		if (scroll >= positionFromTop - 20 && scroll < NextElepositionFromTop + 20) {
	// 			els.prevAll().removeClass('active');
	// 			els.nextAll().removeClass('active');
	// 			els.addClass('active');
	// 			if (els.attr('id') == 'section3') {
	// 					// $.fn.disableScroll();
	// 				}
	// 			}
	// 		}

	// 	}
	// });
// detecting the elements in viewport


// sticky elements
	// const myImgs = document.querySelectorAll('.innerCOntainerServicesSection');
	// observer = new IntersectionObserver(entries => {
	//   entries.forEach(entry => {
	//     if (entry.intersectionRatio > 0) {
	//     	var elems = document.querySelectorAll('.innerCOntainerServicesSection');
	// 		[].forEach.call(elems, function(el) {
	// 		    el.classList.remove("fancy");
	// 		});
	// 		entry.target.classList.add('fancy');
	//     } else {
	//       entry.target.classList.remove('fancy');
	//     }

	//   });
	// });

	// myImgs.forEach(image => {
	//   observer.observe(image);
	// });
// sticky elements