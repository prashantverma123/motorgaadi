<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Model_Cardetails extends MY_Model
{
  protected $_table = 'p1iqp_mg_car_details_model';
  protected $primary_key = 'id';
  protected $return_type = 'array';
  // protected $after_get = array('remove_sesitive_data');
  // protected $before_create = array('prep_data');
  // protected $before_update = array('update_timestamp');

  protected  function remove_sesitive_data($city){
      unset($city['author_id']);
      unset($city['author_name']);
      unset($city['insert_date']);
      unset($city['update_date']);
      unset($city['ip']);
      unset($city['status']);
      return $city;
    }

  protected  function prep_data($city){
        $city['author_id'] = '4';
        $city['ip'] = $this->input->ip_address();
        $city['insert_date'] = date('Y-m-d H:i:s');
        $city['update_date'] = date('Y-m-d H:i:s');
        return $city;
    }

  protected  function update_timestamp($city){
        $city['update_date'] = date('Y-m-d H:i:s');
        return $city;
    }

}
