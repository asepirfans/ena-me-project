<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = "form_order_logistik";
    protected $primaryKey = "id_orderlog";
    protected $allowedFields = [
        'pemesan',
        'tgl_created',
        'id_worker',
        'batas_waktu',
        'disetujui',
        'id_spk',
        'jml_satuan',
        'nama_barang',
        'no_barang',
        'no_gambar',
        'tgl_penerima',
        'nama_penerima',
        'tgl_pembelian',
        'berat_barang',
        'tgl_pesanan',
        'record_order',
        'nama_pelaksana',
        'catatan',
    ];

    public function getLastId() {
        $db = db_connect();
        $query = $db->query('SELECT MAX(id_orderlog) AS lastid FROM form_order_logistik LIMIT 1;');
        $row = $query->getRow();
        return isset($row) ? $row->lastid : 1;
    }

    public function search($keyword) {
        if($keyword) {
            return $this->table($this->table)
                ->like('id_worker', $keyword)
                ->orLike('no_barang', $keyword)
                ->orLike('no_gambar', $keyword)
                ->orLike('tgl_penerima', $keyword)
                ->orLike('nama_barang', $keyword)
                ->orLike('tgl_pembelian', $keyword)
                ->orLike('berat_barang', $keyword) // Menyesuaikan dengan nama kolom yang benar
                ->orLike('record_order', $keyword)
                ->orLike('id_spk', $keyword)
                ->orLike('pemesan', $keyword)
                ->orLike('tgl_created', $keyword) // Menyesuaikan dengan nama kolom yang benar
                ->orLike('batas_waktu', $keyword)
                ->orLike('disetujui', $keyword)
                ->orLike('jml_satuan', $keyword)
                ->orLike('nama_penerima', $keyword) // Menyesuaikan dengan nama kolom yang benar
                ->orLike('tgl_pesanan', $keyword) // Menyesuaikan dengan nama kolom yang benar
                ->orLike('nama_pelaksana', $keyword) // Menyesuaikan dengan nama kolom yang benar
                ->orLike('catatan', $keyword);
        } else {
            return $this;
        }
    }
}
