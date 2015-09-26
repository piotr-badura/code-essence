<?php

App::uses('AppController', 'Controller');

class NewslettersController extends AppController
{
    public $uses = array('Newsletter');
    
    public function subscribe()
    {
        $status = array('status' => 0, 'msg' => __('newsletter.error.default'));
        
        if ($this->request->is('post') || $this->request->is('put'))
        {        
            $data = $this->request->data;                        
            
            if (!isset($data['Newsletter']['email']) || !$data['Newsletter']['email'])
            {
                $status['msg'] = __('newsletter.error.not.empty');
                echo json_encode($status);
                die;                
            }                    
            
            $input = $data['Newsletter']['email'];
            $input = trim($input);
            $email = $input;
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $status['msg'] = __('newsletter.error.invalid.email');
                echo json_encode($status);
                die;
            }
            
            $founded = $this->Newsletter->find
            (
                'first', 
                array
                (
                    'conditions' => array
                    (
                        'Newsletter.email' => $email
                    )
                )
            );
            
            if ($founded)
            {
                $status['msg'] = __('newsletter.error.already.exists');
                echo json_encode($status);
                die;
            }
            
            $this->Newsletter->create();
            $this->Newsletter->set
            (
                array
                (
                    'email' => $email,
                    'ip' => $_SERVER['REMOTE_ADDR']
                )
            );
            if ($this->Newsletter->save())
            {
                $status['status'] = 1;
                $status['msg'] = __('newsletter.success.subscribed');
            }
        }
        
        echo json_encode($status);
        die;
    }
}