<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function contact()
	{
		$this->show('default/contact');
	}

	public function profile()
	{
		$this->show('default/profile');
	}
	public function inscription()
	{
		$this->show('default/inscription');
	}
	public function jeux()
	{
		$this->show('default/jeux');
	}
	public function messagerie()
	{
		$this->show('default/messagerie');
	}
	public function team()
	{
		$this->show('default/team');
	}


}
