<?php

App::uses('AppController', 'Controller');

class LanguagesController extends AppController
{
    public $uses = array();
    
    public function change($lang)
    {
        $set = 'pol';
        
        switch ($lang)
        {
            case 'eng':
            {
                $set = 'eng';
                break;
            }
        }
        $this->Session->write('ce.language', $set);
        
        $this->redirect($this->referer());
    }
}