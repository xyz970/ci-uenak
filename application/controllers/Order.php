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
            redirect(base_url('index.php/order/total?nama_pemesan='.$nama));
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
            redirect(base_url('index.php/order/total?nama_pemesan='.$nama));
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
            redirect(base_url('index.php/order/total?nama_pemesan='.$nama));
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
            redirect(base_url('index.php/order/total?nama_pemesan='.$nama));
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
            redirect(base_url('index.php/order/total?nama_pemesan='.$nama));
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
            redirect(base_url('index.php/order/total?nama_pemesan='.$nama));
        }
    } 
    public function total()
    {
        $qs = $_SERVER['QUERY_STRING'];
        $ru = $_SERVER['REQUEST_URI'];
        $pp = substr($ru, strlen($qs)+1);
        // $nama = parse_str($pp, $_GET);
        $nama = $_GET['nama_pemesan'];
        // $nama = $this->input->get('nama_pemesan',TRUE);
        $condition = array('nama_pemesan' => $nama);
        // $data['pesanan'] = $this->Model->select()->result();
        $data['pesanan'] = $this->Model->selectName($condition, 'orders')->result();
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
}
