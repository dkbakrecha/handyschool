<?php

App::uses('AppModel', 'Model');
App::uses('CakeEmail', 'Network/Email');

class AcademicEnquiry extends AppModel {

    public $name = 'AcademicEnquiry';

    public $validate = array(
        'student_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        ),
        'student_gender' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        ),
        'student_dob' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        ),
        'class_id' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        ),
        'current_institute' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        ),
        'father_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        ),
        'mother_name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        ),
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        ),
        'contact_number' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'This field is required.'
            ),
        )
    );


}
