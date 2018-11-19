$(document).ready(function() {
	$("#form").validate({
		//setup handling of form errors
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",

		//rules here define what is good or bad input
		//each rule starts with the form input element's NAME attribute
		rules: {
			name: {
				required: true
			},
		email: {
			email: true,
				required: true
		},
		message: {
			required: true,
			maxLength: 2000
			}
		},

		//error messages to display to the end user when rules above don't pass
		messages: {
			name: {
				required: "Please enter your name."
			},
			email: {
				email: "Please enter a valid email address.",
				required: "Please enter a valid email address."
			}
		},
		message: {
			required: "Please enter a message.",
			maxLength: "2000 characters max."
			}
		},

		rules: {
			name: {
				required
			}
	}
	})
})