Rivers.breakpoint = (function() {

	var breakpointInstance = this,
		$ = jQuery,
		breakpointOrder = [], //{label: small, width: 480} <- array of these sorted from low to high
		breakpoints = {},
		breakpointDefaults = {
			any: {
				width: 999999
			},
			small: {
				width: 480
			},
			phone: {
				width: 600
			},
			tablet: {
				width: 1024
			},
			desktop: {
				width: 1290,
				boundless: true //set even if screen is over width
			}
		};

	breakpointInstance.device = null;

	breakpointInstance.options = {
		pollingSpeed: 50
	};

	breakpointInstance.add = function(breakpointLabel, details) {

		var existingDetails = breakpoints[breakpointLabel];

		details = $.extend({ //our bare minimum properties for breakpoints
			width: 0,
			stopLooking: true, //keeps firing on future matches
			boundless: false, //ensures the breakpoint is used for all values above the current
			on: [],
			off: []
		}, existingDetails, details);

		var breakpointEntry = {};
		breakpointEntry[breakpointLabel] = details;

		$.extend(breakpoints, breakpointEntry);

		breakpointOrder = [];

		for(breakpointLabel in breakpoints) {
			breakpointOrder.push({label: breakpointLabel, width: breakpoints[breakpointLabel].width});
		}

		breakpointOrder = breakpointOrder.sort(function(a, b) {
			return a.width - b.width;
		});

		return breakpointInstance;
	};

	function implicitlyCreateBreakpointIfRequired(screenSizeLabel) {
		if(typeof breakpoints[screenSizeLabel] == 'undefined') {
			Rivers.log("Warning: Implicitly creating new breakpoint: "+screenSizeLabel);
			breakpointInstance.add(screenSizeLabel, {});
		}
	}

	breakpointInstance.leave = function(screenSizeLabel, callback) {
		implicitlyCreateBreakpointIfRequired(screenSizeLabel);

		breakpoints[screenSizeLabel].off.push(callback);

		return breakpointInstance;
	};

	breakpointInstance.enter = function(screenSizeLabel, callback) {
		implicitlyCreateBreakpointIfRequired(screenSizeLabel);

		breakpoints[screenSizeLabel].on.push(callback);

		if(screenSizeLabel === 'any') {
			callback.call(breakpointInstance);
			return;
		}

		testBreakpoints(function(breakpointLabel, breakpoint) {

			if(breakpointLabel === screenSizeLabel) {
				//we're already on the current device. immediately fire.
				breakpointInstance.device = breakpointLabel;
				callback.call(breakpointInstance);
			}
		});

		return breakpointInstance;
	};

	breakpointInstance.init = function() {

		var updateThrottled = update,
			breakpointLabel;

		for(breakpointLabel in breakpointDefaults) {
			breakpointInstance.add(breakpointLabel, breakpointDefaults[breakpointLabel]);
		}

		updateThrottled = Rivers.throttle(update, breakpointInstance.options.pollingSpeed);

		updateThrottled(); //run once on initialize to set Rivers.breakpoint.device
		Rivers.on(window, 'resize', updateThrottled);
	};

	breakpointInstance.init();

	function testBreakpoints(onMatchedBreakpoint) {
		var windowWidth = $('body').width();

		for(var i = 0; i < breakpointOrder.length; ++i) {
			var breakpointLabel = breakpointOrder[i].label,
				breakpoint = breakpoints[breakpointLabel];

			if(windowWidth < breakpoint.width || breakpoint.boundless) {

				onMatchedBreakpoint(breakpointLabel, breakpoint);

				if(breakpoint.stopLooking) {
					break;
				}
			}
		}

	}

	function update() {

		testBreakpoints(function(breakpointLabel, breakpoint) {

			if(breakpointLabel === breakpointInstance.device) {
				return; //we don't want to double-run our callback
			}

			var currentDevice = breakpointInstance.device;

			if(currentDevice) { //run any off callbacks
				breakpoints[currentDevice].off.map(function(callback) {
					if(callback) callback.call(breakpointInstance);
				});
			}

			breakpointInstance.device = breakpointLabel;

			breakpoint.on.map(function(callback) {
				if(callback) callback.call(breakpointInstance);
			});

			breakpoints.any.on.map(function(callback) {
				if(callback) callback.call(breakpointInstance);
			});

		});
	}

	return breakpointInstance;
})();
