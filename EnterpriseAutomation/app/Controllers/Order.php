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

        $data = [
            'title' => 'Order',
            'nav_active' => 2
        ];

        return view("pages/order.php", $data);
    }

    public function createOrder()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'pengorder' => 'required',
            'tanggal' => 'required',
            'unit_kerja' => 'required',
            'batas_waktu' => 'required',
            'disetujui' => 'required',
            'no_pembebanan' => 'required',
            'jumlah_satuan' => 'required',
            'nama_barang' => 'required',
            'no_barang' => 'required',
            'no_gambar' => 'required',
            'tanggal_penerima' => 'required',
            'nama_paraf_penerima' => 'required',
            'berat' => 'required',
            'tanggal_pelaporan' => 'required',
            'tanggal_pelaksana_pesanan' => 'required',
            'nama_paraf_pelaksana_pesanan' => 'required',
            'catatan' => 'required'
        ]);
        
    }
    
}
