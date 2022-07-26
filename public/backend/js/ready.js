
(function ($) {
	"use strict";
	var Petsooq_panel = {
		initialised: false,
		version: 1.0,
		Solar: false,
		init: function () {

			if (!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}

			// Functions Calling
			this.toogle_sidebar();
			this.toggle_topbar();
			this.tooltip();
			this.sidebarActive();
			this.tinyMce();
			this.toggleChanges();
			this.datentime();
			this.selection();
		},
		// toggle sidebar
		toogle_sidebar: function () {
			var toggle_sidebar = false;
			var nav_open = 0;
			if (!toggle_sidebar) {
				var toggle = $('.sidenav-toggler');
				toggle.click(function () {
					if (nav_open == 1) {
						$('html').removeClass('nav_open');
						toggle.removeClass('toggled');
						nav_open = 0;
					} else {
						$('html').addClass('nav_open');
						toggle.addClass('toggled');
						nav_open = 1;
					}
				});
				toggle_sidebar = true;
			}
		},
		// toggle topbar
		toggle_topbar: function () {
			var toggle_topbar = false;
			var topbar_open = 0;
			if (!toggle_topbar) {
				var topbar = $('.topbar-toggler');
				console.log(topbar_open);
				topbar.click(function () {
					if (topbar_open == 1) {
						$('html').removeClass('topbar_open');
						$topbar.removeClass('toggled');
						topbar_open = 0;
					} else {
						$('html').addClass('topbar_open');
						$topbar.addClass('toggled');
						topbar_open = 1;
					}
				});
				toggle_topbar = true;
			}
		},
		// tooltip
		tooltip: function () {
			$('[data-toggle="tooltip"]').tooltip();
		},
		// sidebar active
		sidebarActive: function () {
			var navItem = $(".nav .nav-item");
			navItem.click(function () {
				$(".sidebar .nav .nav-item").removeClass("active");
				$(this).addClass("active");
				$(this).event.preventDefault();
			})

		},
		// Tiny MCE
		tinyMce: function () {
			tinymce.init({
				selector: '.tiny-editor'
			});
		},
		// Toggle plus minus icon on show hide of collapse element
		toggleChanges: function () {
			$(".collapse").on('show.bs.collapse', function () {
				$(this).parent(".card").find(".toggle").addClass("rotate");
			}).on('hide.bs.collapse', function () {
				$(this).parent(".card").find(".toggle").removeClass("rotate");
			});
		},
		datentime: function () {
			/* ----- Flat Picker ----- */
			flatpickr('#pickupDateTime', {
				enableTime: true,
				dateFormat: "h:i K"
			});
			flatpickr('#pickupDate', {
				enableTime: false,
			});
			flatpickr('#pickupTime', {
				noCalendar: true,
				enableTime: true,
				dateFormat: 'h:i K'
			});
			flatpickr('#pickupDateRange', {
				mode: "range",
				minDate: "today",
				dateFormat: "Y-m-d",
			});
			flatpickr('#pickupDateTime2', {
				enableTime: true,
				dateFormat: "h:i K"
			});
			flatpickr('#newDateStart', {
				altInput: true,
				altFormat: "F j, Y",
				dateFormat: "Y-m-d H:i:k",
				enableTime: true,
				minDate: new Date(),
				"plugins": [new rangePlugin({ input: "#newDateEnd" })],
				onChange: [function (selectedDates) {
					const dateArr = selectedDates.map(date => this.formatDate(date, "Y-m-d H:i:k"));
					$('#newDateStart').val(dateArr[0]);
				}]
			});
		},
		// Select 2 
		selection: function () {
			$('.qb-select').select2({
				width: 'resolve',
			}),
				$('.businessid').select2({
					width: 'resolve',
				}),
				$('.categoryid').select2({
					width: 'resolve',
				}),

				$('#searchSelect').select2({
					tags: false,
					search: true,
					allowNewOption: false,
					multiple: true,
				})
			$('#searchSelectTags').select2({
				tags: true,
				search: true,
				noOptionsText: 'No results found',
				multiple: true,
			})
		}

	};
	Petsooq_panel.init();

})(jQuery);