// Freelancer Theme JavaScript

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.menu-list a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 0)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
		return false;
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function(){ 
            $('.navbar-toggle:visible').click();
    });
	
	//Call Tooltips
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	});
	
	// Change styles based on cell contents
	var table = document.getElementById('slayer');
	var tbody = table.getElementsByTagName('tbody')[0];
	var cells = tbody.getElementsByTagName('td');

	for (var i=0, len=cells.length; i<len; i++){
		if (cells[i].innerHTML === 'x'){
			cells[i].style.backgroundColor = 'red';
		}
		else if (parseInt(cells[i].innerHTML,10) < -5){
			cells[i].style.backgroundColor = 'green';
		}
	};


})(jQuery); // End of use strict
