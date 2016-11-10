<?php

namespace Adceo\Frontend\Controllers;


class InstitucionalController extends ControllerBase
{
	/**
	 *  Info about club 
	 */
	public function clubAction()
	{
		$this->tag->setTitle("ADCEO - Clube");
		$this->view->page="Clube";
		
	}
	
	/**
	 *  Statutes the club
	 */
	public function statutesAction()
	{
		$this->tag->setTitle("ADCEO - Estatutos");
		$this->view->page="Estatutos";
	
	}
	
	/**
	 * Social entities the club
	 */
	public function socialsAction()
	{
		$this->tag->setTitle("ADCEO - Órgãos Sociais");
		$this->view->page="Sociais";
	
	}
	
	


}
