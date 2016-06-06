<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/01/2016
 * Time: 3:30
 */
    function remove_unknown_fields($raw_data, $expected_fields){
        $new_data = array();
        foreach($raw_data as $field_name=> $field_value){
            if($field_value != "" && in_array($field_name, array_values($expected_fields))){
                $new_data[$field_name] = $field_value;
            }
        }
        return $new_data;
    }
