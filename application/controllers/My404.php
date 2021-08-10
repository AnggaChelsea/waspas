<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My404 extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
   }

   public function index()
   {
      $data['error'] = '';
      $this->load->view('vnotfound', $data);
   }
}
