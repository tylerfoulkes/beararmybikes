$(".arrow").click(function() {
	$('#about_cont').animate({
		scrollTop: $("#about").offset().top
	}, 500);
});

$('#about_cont').scroll(function() {
	var height = $('#about_cont').scrollTop();
	if (height > 1) {
		$(".arrow").fadeOut("slow");
	}
	if (height < 1) {
		$(".arrow").fadeIn("slow");
	}
});

var about = document.getElementById('about_cont');
var height = $(document).height()-50;
about.style.height=height;
var new_height = 0;
window.addEventListener("resize", function() {
	new_height = $(document).height()-50;
	about.style.height=new_height;
});
        




