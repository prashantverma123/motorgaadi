<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Model_CarModels extends MY_Model
{
  protected $_table = 'p1iqp_mg_car_details_model';
  protected $primary_key = 'id';
  protected $return_type = 'array';
  // protected $after_get = array('remove_sesitive_data');
  // protected $before_create = array('prep_data');
  // protected $before_update = array('update_timestamp');

  protected  function remove_sesitive_data($key){
      // unset($city['author_id']);
      // unset($city['author_name']);
      unset($key['is_private_key']);
      unset($key['ip_addresses']);
      // unset($city['ip']);
      return $key;
    }

  protected  function prep_data($key){
        // $city['author_id'] = '4';
        // $city['ip'] = $this->input->ip_address();
        $key['date_created'] = date('Y-m-d H:i:s');
        //$cars['update_date'] = date('Y-m-d H:i:s');
        return $key;
    }

  protected  function update_timestamp($key){
        $key['date_created'] = date('Y-m-d H:i:s');
        return $key;
    }

}
