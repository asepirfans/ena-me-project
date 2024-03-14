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
        'pemesan',
        'tgl_create',
        'id_worker',
        'batas_waktu',
        'disetujui',
        'id_spk',
        'jml_satuan',
        'nama_barang_ukuran',
        'no_barang',
        'no_gambar',
        'tgl_penerima',
        'nama_penerima',
        'tgl_pembelian',
        'berat',
        'tgl_pesan',
        'record_order',
        'nama_pelaksana',
        'catatan',
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
            ->orLike('id_spk', $keyword)
            ->orLike('pemesan', $keyword)
            ->orLike('tgl_create', $keyword)
            ->orLike('batas_waktu', $keyword)
            ->orLike('disetujui', $keyword)
            ->orLike('jml_satuan', $keyword)
            ->orLike('nama_barang_ukuran', $keyword)
            ->orLike('nama_penerima', $keyword)
            ->orLike('tgl_pesan', $keyword)
            ->orLike('nama_paraf_pelaksana', $keyword)
            ->orLike('catatan', $keyword);
        } else {
            $orderdata = $this;
        }

        return $orderdata;
    }

}