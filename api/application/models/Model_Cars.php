<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Model_Cars extends MY_Model
{
  protected $_table = 'tbl_model';
  protected $primary_key = 'id';
  protected $return_type = 'array';
  protected $after_get = array('remove_sesitive_data');
  protected $before_create = array('prep_data');
  // protected $before_update = array('update_timestamp');

  protected  function remove_sesitive_data($cars){
      // unset($city['author_id']);
      // unset($city['author_name']);
      unset($cars['create_date']);
      unset($cars['update_date']);
      // unset($city['ip']);
      return $cars;
    }

  protected  function prep_data($cars){
        // $city['author_id'] = '4';
        // $city['ip'] = $this->input->ip_address();
        $cars['create_date'] = date('Y-m-d H:i:s');
        $cars['update_date'] = date('Y-m-d H:i:s');
        return $cars;
    }

  protected  function update_timestamp($city){
        $city['update_date'] = date('Y-m-d H:i:s');
        return $city;
    }

}
