<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{

      function __construct(){
              parent::__construct();
            $this->load->helper('my_api');
      }



      function clientSignIn_get(){
        $id = $this->input->get();

        $this->load->model('Model_Signup');
        $orders= $this->Model_Signup->get_many_by(array(
				'city_id'=>$id,
				'status'=>'0'
		      ));
        if(isset($orders)){
          $this->response(array('status'=>'success','message'=>$orders));
        }

        else{
          $this->response(array('status'=>'failure','message'=>"City Not Found"),REST_Controller::HTTP_NOT_FOUND);
        }

      }



      function clientSignUp_post(){
        //var_dump($this->put());
        $this->load->library('form_validation');
        $this->form_validation->set_data($this->post());
         if($this->form_validation->run('signup_post') != false){
            $this->load->model('Model_Signup');
            $client = $this->post();
            $id = $this->Model_Signup->insert($client);
            if(!$id){
                $this->response(
                    array('status'=>'failure','message'=>'An unexpected error occurred on db !'),REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }else{
               $this->response(array('status'=>'success','message'=>'Created'));
            }

         }
         else{
           $this->response(array('status'=>'failure','message'=>$this->form_validation->get_errors_as_array()),REST_Controller::HTTP_NOT_FOUND);
         }
      }


      function carmake_get(){
        // $id = $this->input->get();

        $this->load->model('Model_Carmake');
        $carmake= $this->Model_Carmake->get_all();
        if(isset($carmake)){
          $this->response(array('status'=>'success','message'=>$carmake));
        }

        else{
          $this->response(array('status'=>'failure','message'=>"Make Not Found"),REST_Controller::HTTP_NOT_FOUND);
        }

      }
      function carmodels_get(){
        $carmake = $this->uri->segment(3);

        $this->load->model('Model_CarModels');
        $carmodels= $this->Model_CarModels->get_many_by(array(
          'brand_id' =>$carmake
          ));
        if(isset($carmodels)){
          $this->response(array('status'=>'success','message'=>$carmodels));
        }

        else{
          $this->response(array('status'=>'failure','message'=>"Model Not Found"),REST_Controller::HTTP_NOT_FOUND);
        }

      }

      function carvariant_get(){
      $carmake = $this->uri->segment(3);
      $carmodel = $this->uri->segment(4);

        $this->load->model('Model_CarVariant');
        $carvariant= $this->Model_CarVariant->get_many_by(array(
          'model_id' =>$carmodel,
          'brand_id' =>$carmake
        ));
        if(isset($carvariant)){
          $this->response(array('status'=>'success','message'=>$carvariant));
        }

        else{
          $this->response(array('status'=>'failure','message'=>"Variant Not Found"),REST_Controller::HTTP_NOT_FOUND);
        }

      }

      function carfueltype_get(){


        $this->load->model('Model_CarVariant');
        $carfueltype= $this->Model_CarVariant->get_all();

        if(isset($carfueltype)){
          $this->response(array('status'=>'success','message'=>$carfueltype));
        }

        else{
          $this->response(array('status'=>'failure','message'=>"Fuel Type Not Found"),REST_Controller::HTTP_NOT_FOUND);
        }

      }

      function leadForm_post(){
        $this->load->library('form_validation');
        $this->form_validation->set_data($this->post());
         if($this->form_validation->run('leadform_post') != false){
            $this->load->model('Model_Leadform');
            $client = $this->post();
            $id = $this->Model_Leadform->insert($client);
            if(!$id){
                $this->response(
                    array('status'=>'failure','message'=>'An unexpected error occurred on db !'),REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }else{
               $this->response(array('status'=>'success','message'=>'Lead Captured!!!'));
            }

         }
         else{
           $this->response(array('status'=>'failure','message'=>$this->form_validation->get_errors_as_array()),REST_Controller::HTTP_NOT_FOUND);
         }
      }


}
