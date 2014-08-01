<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroStreams Ratings Field Type
 *
 * @package		PyroStreams
 * @author		Jose Luis Fonseca
 * @team                WeDreamPro
 * @copyright           Copyright (c) 2014, Jose Fonseca
 */
class Field_ratings {

    public $field_type_slug = 'ratings';
    public $db_col_type = 'text';
    public $version = '1.0.0';
    public $author = array('name' => 'Jose Fonseca', 'url' => 'http://josefonseca.me');
    
    /**
     * Output form input
     *
     * @access	public
     * @param   $params	array
     * @return	string
     */
    public function form_output($params) {
        
        return $this->CI->type->load_view('ratings', 'input', array(
                    'field' => (object) $params
                ));
    }
    
    /**
     * Tag output variables
     *
     *
     * @access 	public
     * @param	string
     * @param	array
     * @return	array
     */
    public function pre_output($input, $params) {
        return $input;
    }
    
    // ----------------------------------------------------------------------

    public function pre_output_plugin($input, $params) {
        $field = new stdClass;
        $field->form_slug = $params['field_slug'];
        $field->value = $input;
        $field->html = $this->CI->type->load_view('ratings', 'plugin', array(
                    'field' => $field
                ), TRUE);
        return (array) $field;
    }
    
    /**
     * Event
     *
     * Load assets
     *
     * @access public
     * @param $field object
     * @return void
     */
    public function event() {
        $this->CI->type->add_css('ratings', 'raty.css');
        $this->CI->type->add_js('ratings', 'raty.js');
    }
    
}
