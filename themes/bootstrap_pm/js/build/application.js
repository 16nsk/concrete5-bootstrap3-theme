
/*
Comments
 */

(function() {
  var percent, progressBar;

  percent = 0;

  progressBar = function() {
    var bar, pc;
    bar = $('.pg1');
    pc = $('.percentage-counter');
    bar.css({
      width: percent + '%'
    });
    pc.html(percent + '% Complete');
    percent++;
    if (percent > 100) {
      percent = 0;
    }
    return true;
  };

  setInterval(progressBar, 300);

}).call(this);
