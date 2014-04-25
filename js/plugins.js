// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.


 $(document).ready (function() {
      $('#slides').slidesjs({
        width: 1300,
        height: 550,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });



//Eventos al cambair de tamaño la ventana

$(window).resize(function() {
 
});

// Cargar cuenta regresiva
/*(function(){
		now = new Date();
		y2k = new Date("Jun 30 2013 23:59:59");
		days = (y2k - now) / 1000 / 60 / 60 / 24;
		daysRound = Math.floor(days);
		if(daysRound<10)daysRound = '0'+daysRound;
		hours = (y2k - now) / 1000 / 60 / 60 - (24 * daysRound);
		hoursRound = Math.floor(hours);
		if(hoursRound<10)hoursRound = '0'+hoursRound;
		minutes = (y2k - now) / 1000 /60 - (24 * 60 * daysRound) - (60 * hoursRound);
		minutesRound = Math.floor(minutes);
		if(minutesRound<10)minutesRound = '0'+minutesRound;
		seconds = (y2k - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
		secondsRound = Math.round(seconds);
		if(secondsRound<10)secondsRound = '0'+secondsRound;
		sec = (secondsRound == 1) ? " segundo" : " segundos";
		min = (minutesRound == 1) ? " minuto" : " minutos, ";
		hr = (hoursRound == 1) ? " hora" : " horas, ";
		dy = (daysRound == 1)  ? " día" : " d&iacute;as, ";alert("hol");

        $('#counter').countdown({
          image: '../img/digits.png',
         startTime: daysRound+':'+hoursRound+':'+minutesRound+':'+secondsRound,
        });
	
      });*/