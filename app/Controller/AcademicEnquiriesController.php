<?php
App::uses('AppController', 'Controller');

class AcademicEnquiriesController extends AppController {

	public $uses = array();
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index','admission');
    }
    
    public function index() {
        $data = $this->request->data;
        
    
    }

    public function admission() {
        if (!empty($this->request->data)) {
            $data = $this->request->data;

            if ($this->AcademicEnquiry->save($data)) {
                $this->Session->setFlash('Academic Enquiry added successfully.', 'default', array('class' => 'alert alert-success'));
                
                $this->redirect(array('controller' => 'academic_enquiries', 'action' => 'index'));
            } else {
                $this->Session->setFlash('Academic Enquiry could be added.', 'default', array('class' => 'alert alert-danger'));
            }

            
        }
	}
    
    
    /*  ==========  ADMIN SECTION  ==========  */
    
    public function admin_index() {
        $this->set('title_for_layout', __('Academic Enquries'));

        $academicEnquries = $this->AcademicEnquiry->find('all', array(
            'conditions' => array(
            )
        ));

        $this->set(compact('academicEnquries'));
	}
    
    public function admin_add() {
        if (!empty($this->request->data)) {
            $data = $this->request->data;

            if ($this->AcademicEnquiry->save($data)) {
                $this->Session->setFlash('Academic Enquiry added successfully.', 'default', array('class' => 'alert alert-success'));
                
                $this->redirect(array('controller' => 'academic_enquiries', 'action' => 'index'));
            } else {
                $this->Session->setFlash('Academic Enquiry could be added.', 'default', array('class' => 'alert alert-danger'));
            }

            
        }
	}
}