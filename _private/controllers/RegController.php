<?php

namespace Website\Controllers;

// Deze handeld het registreren af
class RegController {

	public function registerForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('register');

	}
}

