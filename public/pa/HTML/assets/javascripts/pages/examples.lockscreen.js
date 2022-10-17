/*
Name: 			Pages / Locked Screen - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	1.3.0
*/

(function($) {
    console.log('lockeeeee');
	'use strict';

	var $document,
		idleTime;

	$document = $(document);

	$(function() {
		$.idleTimer( 10000 ); // 5 dakika 300.000 ms eder

		$document.on( 'idle.idleTimer', function() {
			// if you don't want the modal
			// you can make a redirect here
			console.log('lockkk');
            // console.log("document.URL : "+document.URL);
            // console.log("document.location.href : "+document.location.href);
            // console.log("document.location.origin : "+document.location.origin);
            // console.log("document.location.hostname : "+document.location.hostname);
            // console.log("document.location.host : "+document.location.host);
            // console.log("document.location.pathname : "+document.location.pathname);
            // window.location = document.location.origin+"/sds/public/makam-odasi/lock-screen/";
			LockScreen.show();
		});
	});

}).apply( this, [ jQuery ]);