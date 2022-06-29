<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

/**
 * BaseController
 */
class ApiController extends RestController
{
    protected $formValidation;
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }


    /**
     * Generate successResponse for the client
     *
     * @param  mixed $data 
     * @param  mixed $message
     * @return void
     */
    public function successResponse($data, $message)
    {
        $array = array(
            'success'=>'true',
            'message' => $message,
            'data' => $data,
        );
        return $data == '' ?  $this->response(array(
            'success'=>'true',
            'message'=>$message,
        ),200) : $this->response($data,200);
    }

    
        
    /**
     * Generate errorResponse for client
     *
     * @param  mixed $message
     * @param  mixed $statusCode
     * @return void
     */
    public function errorResponse($statusCode,...$message)
    {
        $array = array(
            'success'=>'false',
            'status'=>'Error',
            'message' => $message==''?$message:'Upss something was happen',
        );
        return $this->response($array,$statusCode);
    }

        
    /**
     * Generate notFoundResponse for client
     *
     * @return void
     */
    public function notFoundResponse()
    {
        $array = array(
            'success'=>'false',
            'status'=>'Not Found',
            'message'=>'Data not found'
        );
        return $this->response($array,404);
        
    }

    
    /**
     * function postInput
     * Retrieved post input from request
     * @param  mixed $input
     * @return void
     */
    public function postRequest($input)
    {
        return $this->input->post($input);
    }
    

    /**
     * function getInput
     * Same as postInput Retrieved get input from request
     * @param  mixed $input
     * @return void
     */
    public function getRequest($input)
    {
        return $this->input->get($input);
    }


    public function putRequest($input='')
    {
        return $input == '' ? $this->put() : $this->put($input);
    }

    
    /**
     * function validateInput
     * validate Input and return the postInput
     * Note: $input optional, So the $input can be null..
     * @param  mixed $input array of input field
     * @return void
     */
    public function validateInput(...$input)
    {
        try {
			// $input = array('name','address');
			$form =  $input=='' ? $this->postRequest($input) : $this->input->post();
			$this->form_validation->set_data($form);
			$this->form_validation->set_rules($this->formValidation);
			if ($this->form_validation->run() != TRUE) {
				$this->errorResponse($this->form_validation->error_array(),400);
			}
            return $input=='' ? $this->postRequest($input) : $this->input->post();
			// $this->successResponse($this->postInput($input),'Success');
		} catch (\Throwable $th) {
			$this->errorResponse(500);
		}
    }

}
