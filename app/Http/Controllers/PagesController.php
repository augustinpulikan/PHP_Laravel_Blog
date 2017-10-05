<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {

		return view('pages.welcome');
	}

    public function getAbout() {

    	
    	$data = ["fullname" => "Augustin Pulikan", "email" => "augustinpulikan@gmail.com"];

    	return view('pages.about')->withData($data);
    }

    public function getContact() {

    	return view('pages.contact');
    }

}