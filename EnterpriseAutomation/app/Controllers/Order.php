<?php

namespace App\Controllers;
use App\Models\OrderModel;

class Order extends BaseController
{
    protected $order;
    protected $dataOrder;
    
    public function __construct() {
        $this->order = new OrderModel();
    }

    public function index() {

        $keyword = $this->request->getVar('keyword') ? $this->request->getVar('keyword') : "";
        $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $perPage = $this->request->getVar('entries') ? $this->request->getVar('entries') : 5;

        $dataOrder = [
            'title' => 'Order',
            'nav_active' => 2,
            'getOrder' => $this->order->search($keyword)->paginate($perPage),
            'latest_id' => $this->order->getLastId(),
            'pager' => $this->order->pager,
            'current_page' => $currentPage,
            'entries' => $perPage,
        ];

        return view("pages/order", $dataOrder);
    }
   
/*         public function createOrder()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'pengorder' => 'required',
            'id_ordelog' => 'required'
        ]); 
        $isDataValid = $validation->withRequest($this->request)->run(); 

        // Ambil data dari form
        if($isDataValid){
            $this->order->insert([
                'id_worker' => $this->request->getPost('pengorder'),
                'no_barang' => $this->request->getPost('no_barang'),
                'no_gambar' => $this->request->getPost('no_gambar'),
                'tgl_penerima' => $this->request->getPost('tanggal_penerima'),
                'nama_barang' => $this->request->getPost('nama_barang'),
                'tgl_pembelian' => $this->request->getPost('tanggal_pembelian'),
                'berat_barang' => $this->request->getPost('berat'),
                'record_order' => $this->request->getPost('record_order'),
                'id_spk' => $this->request->getPost('id_spk')
            ]); 
     
            // call swal fire
            session()->setFlashdata('input_msg', 'Pesanan berhasil ditambahkan!');
        } else {
            session()->setFlashdata('input_msg', 'Pesanan gagal ditambahkan!');
        }


    // tampilkan form create
    // return view (/pages/order.php)
    return redirect()->back()->withInput();
    } */

    public function createOrder() {
        // Ambil data dari form
        $this->order->insert([
            'id_worker' => $this->request->getPost('pengorder'),
            'no_barang' => $this->request->getPost('no_barang'),
            'no_gambar' => $this->request->getPost('no_gambar'),
            'tgl_penerima' => $this->request->getPost('tanggal_penerima'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'tgl_pembelian' => $this->request->getPost('tanggal_pembelian'),
            'berat_barang' => $this->request->getPost('berat'),
            'record_order' => $this->request->getPost('record_order'),
            'id_spk' => $this->request->getPost('id_spk')
        ]); 

        // call swal fire
        session()->setFlashdata('input_msg', 'Pesanan berhasil ditambahkan!');

        // Redirect kembali ke halaman sebelumnya atau ke halaman tertentu
        return redirect()->back()->withInput();
    }

}
