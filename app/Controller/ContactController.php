<?php

App::uses('AppController', 'Controller');

class ContactController extends AppController 
{
    public $uses = array('Contact');
    
    public function index()
    {
        
    }
    
    public function send()
    {
        $status = array('status' => 0, 'msg' => __('contact.error.default'));
        
        if ($this->request->is('post') || $this->request->is('put'))
        {
            $data = $this->request->data;
            
            if (!isset($data['Contact']['name']) || !isset($data['Contact']['email']) || !isset($data['Contact']['message']))
            {
                $status['msg'] = __('contact.error.lack.fields');
                echo json_encode($status);
                die;
            }
            
            $this->Contact->create();
            $this->Contact->set
            (
                array
                (
                    'name' => $data['Contact']['name'],
                    'email' => $data['Contact']['email'],
                    'message' => $data['Contact']['message'],
                    'ip' => $_SERVER['REMOTE_ADDR']
                )
            );
            if ($this->Contact->save())
            {
                $status['status'] = 1;
                $status['msg'] = __('contact.success.send');
            }
        }
        
        echo json_encode($status);
        die;
    }
}