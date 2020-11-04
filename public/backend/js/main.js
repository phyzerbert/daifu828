(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');
	if(sessionStorage.getItem('sidebar') === null){
		$('.app').removeClass('sidenav-toggled');
	}else{
		$('.app').addClass('sidenav-toggled');
	}
	
	$('[data-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		if($(".app").hasClass("sidenav-toggled")){
			sessionStorage.clear();
		}else{
			sessionStorage.setItem('sidebar', 'expanded');
		}
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

})();
