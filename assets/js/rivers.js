/**
 * The Rivers global singleton-
 */

if(typeof console == 'undefined') { // ensure a console.log exists (looking at you internet explorer)
	console = {log: function() { }};
}

if(typeof Modernizr == 'undefined') { // make a fake modernizr if one doesn't exist
	window.Modernizr = {};
}

var Rivers = (function() {
	'use strict';

	var methods = {
		options: {
			development: true, //runmode
		},

		getQueryStringParameter: function(name) {
		    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		        results = regex.exec(location.search);
		    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		},

		throttle: function(callback, limit) {
	        var allowFire = true,
	            deadmanTrigger = null; // always fire at the very end

	        return function() {

	            clearTimeout(deadmanTrigger); // ensure the last triggered function runs after limit is reached
	            deadmanTrigger = setTimeout(function() {
	                callback.apply(null, arguments);
	            }, limit);

	            if(allowFire) {
	                setTimeout(function() {
	                    allowFire = true;
	                }, limit);

	                allowFire = false;
	                callback.apply(null, arguments);
	            }
	        };
	    },

		extend: function (defaults, options) {
		    var extended = {},
				prop;

		    for(prop in defaults) {
		        if(Object.prototype.hasOwnProperty.call(defaults, prop)) {
		            extended[prop] = defaults[prop];
		        }
		    }

		    for(prop in options) {
		        if(Object.prototype.hasOwnProperty.call(options, prop)) {
		            extended[prop] = options[prop];
		        }
		    }

		    return extended;
		},

		Events: function(defaultContext) {
			var events = {};

			if(typeof defaultContext === undefined) {
				defaultContext = this;
			}

			return {
				setDefaultContext: function(context) {
					defaultContext = context;
				},
				fire: function(label, args) {
					if(label in events === false) {
						return;
					}

					events[label].map(function(el) {
						el[0].apply(el[1], args);
					});
				},
				off: function(label, callback) {
					if(callback === undefined) {
						// wipe out all the callbacks under that label
						events[label] = [];
					} else {
						throw "You need to program this in still";
					}
				},
				on: function(label, callback, context) {
					if(context === undefined) {
						context = defaultContext;
					}

					if(label in events === false || events[label] === undefined) {
						events[label] = [];
					}

					events[label].push([callback, context]);

					return context; // so by default we can chain events
				},
			};
		},

		log: function(text) {
			if(this.options.development) {
				console.log(text);
			}
		},

		on: function(el, eventName, handler) {
			if(el.addEventListener) {
				el.addEventListener(eventName, handler);
			} else {
				el.attachEvent('on' + eventName, function() {
					handler.call(el);
				});
			}
		},

		off: function(el, eventName, handler) {
			if(el.removeEventListener) {
				el.removeEventListener(eventName, handler);
			} else {
				el.detachEvent('on' + eventName, handler);
			}
		}
	};

	return methods;

})();
