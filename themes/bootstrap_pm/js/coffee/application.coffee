###
Comments
###
percent = 0;
progressBar = () ->
	bar = $('.pg1')
	pc = $('.percentage-counter')
	bar.css({width:percent+'%'})
	pc.html(percent+'% Complete')
	percent++
	percent = 0 if percent > 100
	true



setInterval(progressBar, 300)