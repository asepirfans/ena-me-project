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
                'pengorder' => $this->request->getPost('pengorder'),
                'tgl_created' => $this->request->getPost('tgl_created'),
                'unit_kerja' => $this->request->getPost('unit_kerja'),
                'batas_waktu' => $this->request->getPost('batas_waktu'),
                'disetujui' => $this->request->getPost('disetujui'),
                'jml_satuan' => $this->request->getPost('jml_satuan'),
                'nama_barang' => $this->request->getPost('nama_barang'),
                'no_barang' => $this->request->getPost('no_barang'),
                'no_gambar' => $this->request->getPost('no_gambar'),
                'tgl_penerima' => $this->request->getPost('tgl_penerima'),
                'nama_penerima' => $this->request->getPost('nama_penerima'),
                'tgl_pembelian' => $this->request->getPost('tgl_pembelian'),
                'tgl_pesanan' => $this->request->getPost('tgl_pesanan'),
                'berat_barang' => $this->request->getPost('berat_barang'),
                'nama_pelaksana' => $this->request->getPost('nama_pelaksana'),
                'record_order' => $this->request->getPost('record_order'),
                'catatan' => $this->request->getPost('catatan'),
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
            'pengorder' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        //jika data valid, simpan ke database dan update
        if($isDataValid){
            $this->order->update($id, [
                'pengorder' => $this->request->getPost('edit_pengorder'),
                'tgl_created' => $this->request->getPost('edit_tgl_created'),
                'unit_kerja' => $this->request->getPost('edit_unit_kerja'),
                'batas_waktu' => $this->request->getPost('edit_batas_waktu'),
                'disetujui' => $this->request->getPost('edit_disetujui'),
                'jml_satuan' => $this->request->getPost('edit_jml_satuan'),
                'nama_barang' => $this->request->getPost('edit_nama_barang'),
                'no_barang' => $this->request->getPost('edit_no_barang'),
                'no_gambar' => $this->request->getPost('edit_no_gambar'),
                'tgl_penerima' => $this->request->getPost('edit_tgl_penerima'),
                'nama_penerima' => $this->request->getPost('edit_nama_penerima'),
                'tgl_pembelian' => $this->request->getPost('edit_tgl_pembelian'),
                'tgl_pesanan' => $this->request->getPost('edit_tgl_pesanan'),
                'berat_barang' => $this->request->getPost('edit_berat_barang'),
                'nama_pelaksana' => $this->request->getPost('edit_nama_pelaksana'),
                'record_order' => $this->request->getPost('edit_record_order'),
                'catatan' => $this->request->getPost('edit_catatan'),
                'no_spk' => $this->request->getPost('edit_no_spk')
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
        session()->setFlashdata('del_msg','success');
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
