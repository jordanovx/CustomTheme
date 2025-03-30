jQuery(document).ready(function ($) {
	"use strict";

	// Owl Carousel Init
	$(".owl-carousel").owlCarousel({
		items: 4,
		lazyLoad: true,
		loop: true,
		dots: true,
		margin: 20,
		responsiveClass: true,
		responsive: {
			0: { items: 1 },
			600: { items: 2 },
			1000: { items: 4 },
		},
	});

	// Isotope Init
	var $container = $(".posts").isotope({
		itemSelector: ".item",
		isFitWidth: true,
	});

	$(window).smartresize(function () {
		$container.isotope({ columnWidth: ".col-sm-3" });
	});

	$container.isotope({ filter: "*" });

	// Filter items on button click
	$("#filters").on("click", "button", function () {
		var filterValue = $(this).attr("data-filter");
		$container.isotope({ filter: filterValue });
	});

	// FlexSlider Init
	$("#carousel").flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 210,
		itemMargin: 5,
		asNavFor: "#slider",
	});

	$("#slider").flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#carousel",
	});

	// FAQ Toggle Functionality
	$(".accordion__header").on("click", function () {
		let target = $(this).attr("data-toggle"); // Get target ID
		let $content = $(target);

		// Close all other FAQs before opening the selected one
		$(".accordion__content")
			.not($content)
			.each(function () {
				$(this).css("max-height", "0px");
			});
		$(".accordion__header").not(this).removeClass("active");

		// Toggle the clicked FAQ
		if ($content.css("max-height") !== "0px") {
			$content.css("max-height", "0px");
			$(this).removeClass("active");
		} else {
			let extraHeight = 50; // Add extra height (adjust this value)
			let fullHeight = $content.prop("scrollHeight") + extraHeight + "px"; // Get actual height + extra
			$content.css("max-height", fullHeight);
			$(this).addClass("active");
		}
	});

	// Function to validate form inputs
	function validateForm() {
		let isValid = true;
		$("#customForm input[required]").each(function () {
			if ($(this).val().trim() === "") {
				$(this).addClass("is-invalid").removeClass("is-valid");
				isValid = false;
			} else {
				$(this).addClass("is-valid").removeClass("is-invalid");
			}
		});
		return isValid;
	}

	// Function to submit form
	function submitCustomForm(event) {
		event.preventDefault(); // Prevent default form submission
		console.log("Form submission triggered");

		if (!validateForm()) {
			console.log("Form validation failed.");
			return false;
		}

		console.log("Form validation passed!");

		let formData = $("#customForm").serialize();
		console.log("Form data:", formData);

		let baseUrl =
			"https://crm.pabau.com/OAuth2/leads/lead-curl.php?api_key=MTUyMTc5c6555c14e129a73a29c7cfd29ecd593&redirect_link=https://google.com";

		let newUrl = baseUrl + (baseUrl.indexOf("?") > -1 ? "&" : "?") + formData;
		console.log("Request URL:", newUrl);

		$.ajax({
			url: newUrl,
			method: "POST",
			headers: { "Content-Type": "application/x-www-form-urlencoded" },
		})
			.done((response) => {
				console.log("Success:", response);
			})
			.fail((xhr, status, error) => {
				console.error("Error:", status, error);
			});
	}

	// Ensure jQuery binds the form event properly
	$(document).on("submit", "#customForm", submitCustomForm);

	// Live validation on input
	$(document).on("input", "#customForm input[required]", function () {
		$(this).val().trim() === ""
			? $(this).addClass("is-invalid").removeClass("is-valid")
			: $(this).addClass("is-valid").removeClass("is-invalid");
	});
});
