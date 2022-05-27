<?php
class Admin extends CI_Controller{
    function __construct(){
		parent::__construct();
        $this->load->model('Model');

		$this->load->helper('url');
	}
    public function index()
    {
        $this->load->view('admin.dashboard');
    }
    public function insertOrder()
    {
        $date = new \DateTime('today');
    $tanggal = $date->format('Y-m-d');

        $nama = $this->input->post('nama');
        $nomer_hp = $this->input->post('nomer_hp');
        $kue = $this->input->post('kue');
        $jumlah = $this->input->post('jumlah');
        $catatan = $this->input->post('catatan');

        if ($kue == "blackforest") {
            $total = $jumlah * 200000;
            $data = array(
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('order/data'));
        } elseif ($kue == "redvelvet") {
            $total = $jumlah * 190000;
           $data = array(
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('order/data'));
        } elseif ($kue == "lapislegit") {
            $total = $jumlah * 150000;
           $data = array(
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('order/data'));
        } elseif ($kue == "bikaambon") {
            $total = $jumlah * 125000;
           $data = array(
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('order/data'));
        } elseif ($kue == "rotitawar") {
            $total = $jumlah * 40000;
           $data = array(
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('order/data'));
        } elseif ($kue == "puding") {
            $total = $jumlah * 160000;
           $data = array(
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('order/data'));
        }
        
    }
    public function konfirmasi_pembayaran()
    {
        $nama =  $this->input->post('nama');
        $bayar = $this->input->post('bayar');
        // $nama = $this->input->get('nama_pemesan',TRUE);
        $condition = array('nama_pemesan' => $nama);
        $data = array('pembayaran' => $bayar);
        $update = $this->Model->update($condition,'orders',$data);
        // var_dump($nama);
        $this->session->set_flashdata('bayar','true');
        redirect(base_url('order/data'));
    }
}