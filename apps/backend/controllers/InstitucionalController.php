<?php

namespace Adceo\Backend\Controllers;

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

}

