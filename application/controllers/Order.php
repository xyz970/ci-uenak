<?php

class Order extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Model');
        $this->load->helper('url');
        
    }

    public function index()
    {
        if($this->session->userdata('status') != "login" && $this->session->userdata('role') != "Member" ){
			redirect(base_url("login"));
		}
        $this->load->view('order');
        
    }

    public function tambah_pesanan()
    {
        // $nama = $_POST['nama'];
        // $nomer_hp = $_POST['nomer_hp'];
        // $kue = $_POST['kue'];
        // $jumlah = $_POST['jumlah'];
        // $bayar = $_POST['bayar'];
        // $catatan = $_POST['catatan'];
        date_default_timezone_set('Asia/Jakarta');
    $date = new \DateTime('today');
    $tanggal = $date->format('Y-m-d');
    $newDate = $date->format('Ymd');
        $random = rand(1,10000);
        $nama = $this->input->post('nama');
        $nomer_hp = $this->input->post('nomer_hp');
        $kue = $this->input->post('kue');
        $jumlah = $this->input->post('jumlah');
        $alamat = $this->input->post('alamat');
        $catatan = $this->input->post('catatan');
        $id = $random."_".$newDate."_".$nama;

        if ($kue == "blackforest") {
            $total = $jumlah * 200000;
            $data = array(
                'id' => $id,
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('index.php/order/total?id='.$id));
        } elseif ($kue == "redvelvet") {
            $total = $jumlah * 190000;
           $data = array(
            'id' => $id,
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('index.php/order/total?id='.$id));
        } elseif ($kue == "lapislegit") {
            $total = $jumlah * 150000;
           $data = array(
            'id' => $id,
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('index.php/order/total?id='.$id));
        } elseif ($kue == "bikaambon") {
            $total = $jumlah * 125000;
           $data = array(
            'id' => $id,
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('index.php/order/total?id='.$id));
        } elseif ($kue == "rotitawar") {
            $total = $jumlah * 40000;
           $data = array(
            'id' => $id,
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert','true');
            redirect(base_url('index.php/order/total?id='.$id));
        } elseif ($kue == "puding") {
            $total = $jumlah * 160000;
           $data = array(
            'id' => $id,
                'nama_pemesan' => $nama,
                'total'=>$total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            redirect(base_url('index.php/order/total?id='.$id));
        }
    } 
    public function total()
    {
        $qs = $_SERVER['QUERY_STRING'];
        $ru = $_SERVER['REQUEST_URI'];
        $pp = substr($ru, strlen($qs)+1);
        // $nama = parse_str($pp, $_GET);
        $id = $_GET['id'];
        // $nama = $this->input->get('nama_pemesan',TRUE);
        $condition = array('id' => $id);
        // $data['pesanan'] = $this->Model->select()->result();
        $data['pesanan'] = $this->Model->selectName('orders',$condition )->result();
        $this->load->view('total', $data);
        // var_dump($data);
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
        redirect(base_url('index.php/order'));
    }

    public function data()
    {
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $data['pesanan'] = $this->Model->select('orders')->result();
        $this->load->view('admin/data-order',$data);    
    }

    public function hapus($id)
    {
        $this->Model->delete('orders',array('id'=>$id));
        $this->session->set_flashdata('delete', 'true');
        redirect(base_url('/order/data'));
    }
}
