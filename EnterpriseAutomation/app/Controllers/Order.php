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

        return view("/pages/order", $dataOrder);
    }
   
        public function createOrder()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'pengorder' => 'required'
        ]); 
        $isDataValid = $validation->withRequest($this->request)->run(); 

        // Ambil data dari form
        if($isDataValid){
            $this->order->insert([
                'id_worker' => $this->request->getPost('id_worker'),
                'no_barang' => $this->request->getPost('no_barang'),
                'no_gambar' => $this->request->getPost('no_gambar'),
                'tgl_penerima' => $this->request->getPost('tgl_penerima'),
                'nama_barang' => $this->request->getPost('nama_barang'),
                'tgl_pembelian' => $this->request->getPost('tgl_pembelian'),
                'berat_barang' => $this->request->getPost('berat_barang'),
                'record_order' => $this->request->getPost('record_order'),
                'no_spk' => $this->request->getPost('no_spk')
            ]); 
     
            // call swal fire
            session()->setFlashdata('input_msg', 'Pesanan berhasil ditambahkan!');
        } else {
            session()->setFlashdata('input_msg', 'Pesanan gagal ditambahkan!');
        }


    // tampilkan form create
    // return view (/pages/order.php)
    return redirect()->back()->withInput();
    }

    public function editOrder()
    {
        // Ambil data order yang akan diedit
        $id = $this->request->getVar('id_orderlog');

        
        // Lakukan validasi, 
        // jika data valid, maka simpan ke database
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id_orderlog' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        //jika data valid, simpan ke database dan update
        if($isDataValid){
            $this->order->update($id, [
                "pengorder" => $this->request->getPost('edit_pengorder'),
                'tgl_penerima' => $this->request->getPost('tgl_penerima'),
                'nama_barang' => $this->request->getPost('nama_barang'),
                'tgl_pembelian' => $this->request->getPost('tgl_pembelian'),
                'berat_barang' => $this->request->getPost('berat_barang'),
                'record_order' => $this->request->getPost('record_order'),
            ]);
            session()->setFlashdata('input_msg', 'Pesanan berhasil diubah!');
        } else {
            session()->setFlashdata('input_msg', 'Pesanan gagal diubah!');
        }

        // tampilkan form edit
        return redirect()->back()->withInput();
    }


    public function deleteOrder($id)
    {
        $this->order->delete($id);
        session()->setFlashdata('input_msg', 'Pesanan berhasil dihapus!');
        return redirect()->back();
    }

    public function validateOrder($id)
    {

    $validation =  \Config\Services::validation();
    $validation->setRules([
        'disetujui' => 'required'
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();

    if($isDataValid){
        $this->order->update($id, [
            'disetujui' => 1
        ]);
        session()->setFlashdata('input_msg', 'Pesanan berhasil disetujui!');
    } else {
        session()->setFlashdata('input_msg', 'Pesanan gagal disetujui!');
    }

    return redirect()->back()->withInput();
    }
}
