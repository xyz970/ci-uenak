<?php

class Resep extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
    public function blackforest()
    {
        $this->load->view('resep1');
    }
    public function redvelvet()
    {
        $this->load->view('resep2');
    }
    public function lapislegit()
    {
        $this->load->view('resep3');
    }
    public function bikaambon()
    {
        $this->load->view('resep4');
    }
    public function rotitawar()
    {
        $this->load->view('resep5');
    }
    public function puddingcake_buah()
    {
        $this->load->view('resep6');
    }
}