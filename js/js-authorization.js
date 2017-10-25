$ (document).ready (function () {
// --------- Authorization ------------------------------------------------------------
	
//переключение вкладок login\signup -------------------------------------------

	var allTabsMenu = $ ("#authorization-tab").find ("input");
	var allForms = $ (".authorization-form").find ("div");

	allForms.not(':first-of-type').hide();

	allForms.each (function (index) {
    	$ (this).attr ("data-tab", "tab" + index + 1);
  	});

  	allTabsMenu.each (function (index) {
    	$ (this).attr ("data-tab", "tab" + index + 1);
  	});
	

	allTabsMenu.on ("click", function () {
		var dataTab = $ (this).data ('tab');

		allTabsMenu.addClass ("tab-noactiv");
		$ (this).removeClass ("tab-noactiv");

		allForms.hide ();
		allForms.filter ('[data-tab =' + dataTab + ']').show();
	});

//проверка корректного ввода данных login/signup ------------------------------

// Login
	var loginLogin = $ ("#login-login");
	var helpLogin = $ ("#help-login");
	var loginPattern = (/^[\w-\.]{4,20}$/i);
	validCheck (loginLogin, loginPattern, helpLogin);

	var loginPassword = $ ("#login-password");
	var helpPassword = $ ("#help-password");
	var passwordPattern = (/^[\w]{8,20}$/i);
	validCheckPassSimple (loginPassword, passwordPattern, helpPassword);

	loginBut ();

// Signup
	var signupLogin = $ ("#signup-login");
	var helpLoginSignup = $ ("#help-login-singup");
	var loginPatternSignup = (/^[\w-\.]{4,20}$/i);
	validCheck (signupLogin, loginPatternSignup, helpLoginSignup);

	var signupEmail = $ ("#signup-email");
	var helpEmailSingup = $ ("#help-email-singup");
	var emailPattern = (/^[\w]{1}[\w-\.]*@[\w-]+\.[a-z]{2,4}$/i);
	validCheck (signupEmail, emailPattern, helpEmailSingup);

	var signupPassword = $ ("#signup-password");
	var signupPassword2 = $ ("#signup-password2");
	var helpPasswordSingup = $ ("#help-password-singup");
	var helpPasswordSingup2 = $ ("#help-password-singup2");
	var passwordPatternSignup = (/^[\w]{8,20}$/i);
	validCheckPass (signupPassword, signupPassword2, passwordPatternSignup, helpPasswordSingup, helpPasswordSingup2);
	validCheckPass2 (signupPassword, signupPassword2, helpPasswordSingup, helpPasswordSingup2);	

	signupBut ();

// Logout
	//logoutBut ();

//функция проверки ввода (login, email)
	function validCheck (object, pattern, helper) {
		var value = object.val ();
		object.keyup (function () {	
			var value = object.val ();	
			if (value != "") {
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

//функция проверки ввода (password simple)
	function validCheckPassSimple (object, pattern, helper) {
		var value = object.val ();
		object.keyup (function () {	
			var value = object.val ();
			if (value != "") {
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

//функция проверки ввода (password)
	function validCheckPass (object, object2, pattern, helper, helper2) {
		var value = object.val ();
		object.keyup (function () {	
			var value = object.val ();
			var value2 = object2.val ();
			if (value != "" && value2 == "") {
				if (pattern.test (value)) {
					helper.hide ();
					object.css ({"background-color": "#aaffb1"}); //valid
				} else {
					helper.show ();
					object.css ({"background-color": "#fcbfc1"}); //novalid
				}
			} else if (value != 0 && value2 != 0) {
				if (value == value2 && value.length >= 8 && value.length <= 20) {
					helper.hide ();
					helper2.hide ();
					object.css ({"background-color": "#aaffb1"}); //valid
					object2.css ({"background-color": "#aaffb1"}); //valid
				} else {
					helper.show ();
					helper2.show ();
					object.css ({"background-color": "#fcbfc1"}); //novalid
					object2.css ({"background-color": "#fcbfc1"}); //novalid
				}
			} else {
				helper.hide ();
				object.css ({"background-color": "#fff"});
			}
		});
		return (pattern.test (value));
	};

//функция проверки ввода (password2)
	function validCheckPass2 (object, object2, helper, helper2) {
		var value = object2.val ();
		var pattern = object.val ();
		object2.keyup (function () {
			var value = object2.val ();
			var pattern = object.val ();	
			if (value != "") {
				if (value == pattern && pattern.length >= 8 && pattern.length <= 20) {
					helper.hide ();
					helper2.hide ();
					object.css ({"background-color": "#aaffb1"}); //valid
					object2.css ({"background-color": "#aaffb1"}); //valid
				} else {
					helper2.show ();
					object.css ({"background-color": "#fcbfc1"}); //novalid
					object2.css ({"background-color": "#fcbfc1"}); //novalid
				}
			} else {
				helper2.hide ();
				object2.css ({"background-color": "#fff"});
			}
		});
		return (value == pattern);
	};

// функция отправки данных на регистрацию при нажатии на button
	function signupBut () {
		$ ("#signup-button").click (function () {
			$ ('#signup-button[type=button]').prop('disabled', true);
			$ ("#loading").show ();
			if (validCheck (signupLogin, loginPatternSignup, helpLoginSignup) &&
				validCheck (signupEmail, emailPattern, helpEmailSingup) &&
				validCheckPass (signupPassword, signupPassword2, passwordPatternSignup, helpPasswordSingup, helpPasswordSingup2) &&
				validCheckPass2 (signupPassword, signupPassword2, helpPasswordSingup, helpPasswordSingup2)
				) {
				$.ajax ({
					url: "/php/php-signup.php",
					type: "POST",
					cache: false,
					data: {"signup-login": signupLogin.val(),
						   "signup-email": signupEmail.val(),
						   "signup-password": signupPassword.val()
						},
					success: function (data) {
						if (data == 0) {
							$ ("#loading").hide ();
							alert ("Data for registration sent");
							$ (location).attr ('href', 'loginsignup.php');
						} else {
							$ ("#loading").hide ();
							alert ("Error: " + data);
							$ ('#signup-button[type=button]').prop('disabled', false);
						}
					}
				});
			} else {
				$ ("#loading").hide ();
				alert ("Data for registration not sent. ZAPOLNI POLYA BLYAD'");
				$ ('#signup-button[type=button]').prop('disabled', false);
			}
		});
	};

// функция отправки данных на вход при нажатии на button
	function loginBut () {
		$ ("#login-button").click (function () {
			$ ('#login-button[type=button]').prop('disabled', true);
			$ ("#loading").show ();
			if (validCheck (loginLogin, loginPattern, helpLogin) &&
				validCheckPassSimple (loginPassword, passwordPattern, helpPassword)
				) {
				$.ajax ({
					url: "/php/php-login.php",
					type: "POST",
					cache: false,
					data: {"login-login": loginLogin.val(),
						   "login-password": loginPassword.val()
						},
					success: function (data) {
						if (data == 0) {
							$ ("#loading").hide ();
							alert ("You are authorized");
							$ (location).attr ('href', '/');
						} else {
							$ ("#loading").hide ();
							alert ("Error: " + data);
							$ ('#login-button[type=button]').prop('disabled', false);
						}
					}
				});
			} else {
				$ ("#loading").hide ();
				alert ("Login data submitted not sent. ZAPOLNI POLYA BLYAD'");
				$ ('#login-button[type=button]').prop('disabled', false);
			}
		});
	};

// функция logOut
/*	function logoutBut () {
		$ ("#logout").click (function () {
			var a = confirm ("Really?");
			if (a) {
				$ (location).attr ("href", "../php/php-logout.php");
			};
		});
	};*/




});

// ------------------------------------------------------------------------------------