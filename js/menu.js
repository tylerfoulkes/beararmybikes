$("#menu_icon").click(function () {
	$(".menu").toggle();
});

$("#sidebar_icon").click(function() {
	$("#sidebar_cont").toggle();
});
//document.querySelector(".searchform input").placeholder = "Search";
    
// adds placeholder text to search box
$("#s").attr("placeholder", "search");