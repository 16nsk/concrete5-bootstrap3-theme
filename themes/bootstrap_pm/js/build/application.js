// Hello.
//
// This is JSHint, a tool that helps to detect errors and potential
// problems in your JavaScript code.
//
// To start, simply enter some JavaScript anywhere on this page. Your
// report will appear on the right side.
//
// Additionally, you can toggle specific options in the Configure
// menu.
var percent = 0;
function progressBar() {
	var bar = $('.pg1'), pc = $('.percentage-counter');
	bar.css({width:percent+'%'});
	pc.html(percent+'% Complete');
	//console.log(percent);
	percent = percent +1;
	if (percent>100) {
		percent=0;
	}
}

$(function(){
setInterval(progressBar, 300);

});