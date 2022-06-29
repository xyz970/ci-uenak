<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'controllers/api/ApiController.php';

class Admin extends ApiController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->load->helper('url');
    }
    public function login_post()
    {
        $username = $this->post('username');
        $password = $this->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $cek = $this->Model->selectName("users", $where)->num_rows();
        $this->db->where($where);
        $data = $this->db->get("users")->row();
        // $data = $this->Model->selectName("users", $where);
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login",
                'role' => $data->role
            );

            $this->session->set_userdata($data_session);
            // print_r($data->role);
            $response['user'] = $data_session;
            // $json = json_encode($data_session);
            $this->successResponse($response,"Success");
        } else {
            $this->successResponse("","Cek kembali username anda");
        }
    }

    public function order_get()
    {
        $data['pesanan'] = $this->Model->select('orders')->result();
        $this->successResponse($data,"Data Order");
    }

    public function delete_delete($id)
    {
        $this->Model->delete('orders', array('id' => $id));
        $this->successResponse("","Data berhasil dihapus");
    }

    public function orderInsert_post()
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = new \DateTime('today');
        $tanggal = $date->format('Y-m-d');
        $newDate = $date->format('Ymd');
        $random = rand(1, 10000);
        $nama = $this->post('nama');
        $nomer_hp = $this->post('nomer_hp');
        $kue = $this->post('kue');
        $jumlah = $this->post('jumlah');
        $alamat = $this->post('alamat');
        $catatan = $this->post('catatan');
        $id = $random . "_" . $newDate . "_" . $nama;

        if ($kue == "blackforest") {
            $total = $jumlah * 200000;
            $data = array(
                'id' => $id,
                'nama_pemesan' => $nama,
                'total' => $total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert', 'true');
            $this->successResponse("","Data berhasil dimasukkan");
        } elseif ($kue == "redvelvet") {
            $total = $jumlah * 190000;
            $data = array(
                'id' => $id,
                'nama_pemesan' => $nama,
                'total' => $total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert', 'true');
            $this->successResponse("","Data berhasil dimasukkan");
        } elseif ($kue == "lapislegit") {
            $total = $jumlah * 150000;
            $data = array(
                'id' => $id,
                'nama_pemesan' => $nama,
                'total' => $total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert', 'true');
            $this->successResponse("","Data berhasil dimasukkan");
        } elseif ($kue == "bikaambon") {
            $total = $jumlah * 125000;
            $data = array(
                'id' => $id,
                'nama_pemesan' => $nama,
                'total' => $total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert', 'true');
            $this->successResponse("","Data berhasil dimasukkan");
        } elseif ($kue == "rotitawar") {
            $total = $jumlah * 40000;
            $data = array(
                'id' => $id,
                'nama_pemesan' => $nama,
                'total' => $total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->session->set_flashdata('insert', 'true');
            $this->successResponse("","Data berhasil dimasukkan");
        } elseif ($kue == "puding") {
            $total = $jumlah * 160000;
            $data = array(
                'id' => $id,
                'nama_pemesan' => $nama,
                'total' => $total,
                'nomer_hp' => $nomer_hp,
                'kue' => $kue,
                'tanggal_pesanan' => $tanggal,
                'jumlah' => $jumlah,
                'catatan' => $catatan,
                'alamat' => $alamat
            );
            $this->Model->insert('orders', $data);
            $this->successResponse("","Data berhasil dimasukkan");
        }
    }
}
