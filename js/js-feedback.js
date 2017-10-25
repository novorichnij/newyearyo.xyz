$ (document).ready (function () {
// --------- Feedback -----------------------------------------------------------------

	var nameObject = $ ("#feedback-name");
	var helpName = $ ("#help-name");
	var namePattern = (/^[\w-\.\sа-яА-ЯёЁ]{3,40}$/i);
	validCheck (nameObject, namePattern, helpName);

	var emailObject = $ ("#feedback-email");
	var helpEmail = $ ("#help-email");
	var emailPattern = (/^[\w]{1}[\w-\.]*@[\w-]+\.[a-z]{2,4}$/i);
	validCheck (emailObject, emailPattern, helpEmail);

	var subjectObject = $ ("#feedback-subject");
	var helpSubject = $ ("#help-subject");
	var subjectPattern = (/^[\w-\.\s\(\)а-яА-ЯёЁ]{3,40}$/i);
	validCheck (subjectObject, subjectPattern, helpSubject);

	var messageObject = $ ("#feedback-message");
	var helpMessage = $ ("#help-message");
	validMessage (messageObject, helpMessage);

	feedbackBut ();

//функция проверки ввода (name, email, subject)
	function validCheck (object, pattern, helper) {
		var value = object.val ();
		object.keyup (function () {	
			var value = object.val ();	
			if (value != 0) {
				if (pattern.test (value)) {
					helper.hide ();
					object.css ({"background-color": "#aaffb1"}); //valid
				} else {
					helper.show ();
					object.css ({"background-color": "#fcbfc1"}); //novalid
				}
			} else {
				helper.hide ();
				object.css ({"background-color": "#fff"});
			}
		});
		return (pattern.test (value));
	};

//функция проверки ввода message
	function validMessage (object, helper) {
		var lengthMessage = object.val ().length;
		object.keyup (function () {
			var lengthMessage = object.val ().length;
			if (lengthMessage != 0) {
				if (lengthMessage >= 20 && lengthMessage <= 1000) {
					helper.hide ();
					object.css ({"background-color": "#aaffb1"}); //valid
				} else {
					helper.show ();
					object.css ({"background-color": "#fcbfc1"}); //novalid
				}	
			} else {
				helper.hide ();
				object.css ({"background-color": "#fff"});
			}
		});
		return (lengthMessage >= 20 && lengthMessage <= 1000);
	};


// функция отправки сообщения при нажатии на button
	function feedbackBut () {
		$ ("#feedback-button").click (function () {
			if (validCheck (nameObject, namePattern, helpName) &&
				validCheck (emailObject, emailPattern, helpEmail) &&
				validCheck (subjectObject, subjectPattern, helpSubject) &&
				validMessage (messageObject, helpMessage)
				) {
				$ ('#feedback-button[type=button]').prop('disabled', true);
				$.ajax ({
					url: "/php/php-feedback.php",
					type: "POST",
					cache: false,
					data: {"name": nameObject.val(),
						   "email": emailObject.val(),
						   "subject": subjectObject.val(),
						   "message": messageObject.val()
						},
					dataType: "html",
					success: function (data) {
						if (data == "Done") {
							alert ("Message sent");
							$ (location).attr ('href', '/');
						} else {
							alert ("Error 404");
						}
					}
				});
			} else {
				alert ("Message not sent. ZAPOLNI POLYA BLYAD'");
			}
		});
	};



});






// ------------------------------------------------------------------------------------