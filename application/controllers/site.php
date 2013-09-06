<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class site extends CI_Controller {

       function index() {
	         echo 'hello world';
	   }
	   
	   function dosomething()  {
	         echo 'do something';
	   }
}