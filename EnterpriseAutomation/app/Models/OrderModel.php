<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    // table name
    protected $table = "form_order_logistik";
    protected $primaryKey = "id_orderlog";

    // allowed Field
    protected $allowedFields = [
        'id_worker',
        'no_barang',
        'no_gambar',
        'tgl_penerima',
        'nama_barang',
        'tgl_pembelian',
        'berat',
        'record_order',
        'id_spk',
    ];

    public function getLastId() {
        $db = db_connect();
        $query = $db->query('SELECT MAX(id_orderlog) AS lastid FROM form_order_logistik LIMIT 1;');
        $row = $query->getLastRow();
        if (isset($row)) {
            return $row->lastid;
        } else {
            return 1;
        }
    }

    public function search($keyword){
        if($keyword){
            $orderdata = $this->table($this->table)
            ->like('id_worker', $keyword)
            ->orLike('no_barang', $keyword)
            ->orLike('no_gambar', $keyword)
            ->orLike('tgl_penerima', $keyword)
            ->orLike('nama_barang', $keyword)
            ->orLike('tgl_pembelian', $keyword)
            ->orLike('berat', $keyword)
            ->orLike('record_order', $keyword)
            ->orLike('id_spk', $keyword);
        } else {
            $orderdata = $this;
        }

        return $orderdata;
    }

}

