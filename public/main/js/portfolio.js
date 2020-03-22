/* ==============================================
 portfolio-filter
 =============================================== */

// filter items on button click

// var $grid = $('.grid').isotope({
//     // set itemSelector so .grid-sizer is not used in layout
//     itemSelector: '.grid-item',
//     percentPosition: true,
//     masonry: {
//         // use element for option
//         columnWidth: '.grid-sizer'
//     }
// });
//
// $grid.imagesLoaded().progress( function() {
//     $grid.isotope('layout');
// });

// var $grid = $('.grid').isotope({
//   itemSelector: '.grid-item',
//   percentPosition: true,
//   masonry: {
//     columnWidth: '.grid-sizer'
//   }
// });
// layout Isotope after each image loads
// $grid.imagesLoaded().progress( function() {
//   $grid.isotope('layout');
// });
//
//
// $('#filtr-container').on( 'click', 'li', function(e) {
//     e.preventDefault();
//     $('#filtr-container li').removeClass('active');
//     $(this).closest('li').addClass('active');
//     var filterValue = $(this).attr('data-filter');
//     $grid.isotope({ filter: filterValue });
// });

/* ==============================================
 pop up
 =============================================== */

// portfolio-pop up

// $('.img-container').magnificPopup({
//     delegate: 'a',
//     type: 'image',
//     tLoading: 'Loading image #%curr%...',
//     mainClass: 'mfp-img-mobile',
//     gallery: {
//         enabled: true,
//         navigateByImgClick: true,
//         preload: [0,1] // Will preload 0 - before current, and 1 after the current image
//     },
//     image: {
//         tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
//         titleSrc: function(item) {
//             return item.el.attr('title');
//         }
//     },
//     zoom: {
//         enabled: true,
//         duration: 300, // don't foget to change the duration also in CSS
//         opener: function (element) {
//             return element.find('img');
//         }
//     }
// });


	// $('.popup-gallery').magnificPopup({
	// 	delegate: 'a',
	// 	type: 'image',
	// 	tLoading: 'Loading image #%curr%...',
	// 	mainClass: 'mfp-img-mobile',
	// 	gallery: {
	// 		enabled: true,
	// 		navigateByImgClick: true,
	// 		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	// 	},
	// 	image: {
	// 		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
	// 		titleSrc: function(item) {
	// 			return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
	// 		}
	// 	}
	// });
