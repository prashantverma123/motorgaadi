<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/01/2016
 * Time: 2:44
 */
$config = array(
    'city_put'=>array(
        array('field'=>'name','label'=>'name','rules'=>'trim|required|max_length[50]'),
        array('field'=>'city_tier','label'=>'city_tier','rules'=>'trim|required|max_length[50]'),
        // array('field'=>'first_name','label'=>'first_name','rules'=>'trim|required|max_length[50]'),
        // array('field'=>'last_name','label'=>'last_name','rules'=>'trim|required|max_length[50]'),
        // array('field'=>'phone_number','label'=>'phone_number','rules'=>'trim|required|alpha_dash')
    ),
    'city_post'=>array(
        array('field'=>'name','label'=>'name','rules'=>'trim|required|max_length[50]'),
        array('field'=>'city_tier','label'=>'city_tier','rules'=>'trim|required|max_length[50]'),
        // array('field'=>'last_name','label'=>'last_name','rules'=>'trim|max_length[50]'),
        // array('field'=>'phone_number','label'=>'phone_number','rules'=>'trim|alpha_dash')
    ),
    'orders_post'=>array(
        array('field'=>'name','label'=>'name','rules'=>'trim|required|max_length[50]'),
        array('field'=>'lead_source','label'=>'lead_source','rules'=>'trim|required|max_length[50]'),
        array('field'=>'mobile_no','label'=>'mobile_no','rules'=>'trim|required|max_length[50]'),
        array('field'=>'alternate_no','label'=>'alternate_no','rules'=>'trim|max_length[50]'),
        array('field'=>'email_id','label'=>'email_id','rules'=>'trim|required|valid_email'),
        array('field'=>'address','label'=>'address','rules'=>'trim|max_length[50]'),
        array('field'=>'landmark','label'=>'name','landmark'=>'trim|max_length[50]'),
        array('field'=>'location','label'=>'location','rules'=>'trim|max_length[50]'),
        array('field'=>'city','label'=>'city','rules'=>'trim|required|max_length[50]'),
        array('field'=>'state','label'=>'state','rules'=>'trim|max_length[50]'),
        array('field'=>'pincode','label'=>'pincode','rules'=>'trim|max_length[50]'),
        array('field'=>'service','label'=>'service','rules'=>'trim|required|max_length[50]'),

        // array('field'=>'last_name','label'=>'last_name','rules'=>'trim|max_length[50]'),
        // array('field'=>'phone_number','label'=>'phone_number','rules'=>'trim|alpha_dash')
    ),
    'signup_post'=>array(
        array('field'=>'email','label'=>'email','rules'=>'trim|required|max_length[50]'),
        array('field'=>'fullname','label'=>'fullname','rules'=>'trim|required|max_length[50]'),
        array('field'=>'password','label'=>'password','rules'=>'trim|required|max_length[50]'),

    ),

    'leadform_post'=>array(
        array('field'=>'email','label'=>'email','rules'=>'trim|max_length[250]'),
        array('field'=>'name','label'=>'name','rules'=>'trim|required|max_length[250]'),
        array('field'=>'mobile','label'=>'mobile','rules'=>'trim|required|max_length[50]'),
        array('field'=>'location','label'=>'mobile','rules'=>'trim|required|max_length[50]'),
        array('field'=>'loan','label'=>'mobile','rules'=>'trim|max_length[50]'),
        array('field'=>'offers','label'=>'mobile','rules'=>'trim|max_length[50]'),
        array('field'=>'insurance','label'=>'mobile','rules'=>'trim|max_length[50]'),

    ),

    'bookingform_post'=>array(
        array('field'=>'email','label'=>'email','rules'=>'trim|max_length[250]'),
        array('field'=>'name','label'=>'name','rules'=>'trim|required|max_length[250]'),
        array('field'=>'mobile','label'=>'mobile','rules'=>'trim|required|max_length[50]'),
        array('field'=>'location','label'=>'mobile','rules'=>'trim|required|max_length[50]'),
        array('field'=>'loan','label'=>'mobile','rules'=>'trim|max_length[50]'),
        array('field'=>'offers','label'=>'mobile','rules'=>'trim|max_length[50]'),
        array('field'=>'insurance','label'=>'mobile','rules'=>'trim|max_length[50]'),

    ),
);
