<?php namespace App\Models;

use CodeIgniter\Model;

class brg_pesanan extends Model
{
    protected $table = 'brg_pesanan';
    protected $useTimestamps = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id_transaksi','id_brg','id_user','jumlah','total_hrg','status'];

    
    public function jointable($id, $id_user)
    {
        $builder = $this->db->table('brg_pesanan');
        $builder->select('*');
        $builder->where('status', $id);
        $builder->where('id_user', $id_user);
        $builder->join('data_barang', 'data_barang.id = brg_pesanan.id_brg', 'left');
        $query = $builder->get()->getResultArray();

        return $query;
    }

    public function getdatajoin($id)
    {
        $builder = $this->db->table('brg_pesanan');
        $builder->select('*');
        $builder->where('id_transaksi', $id);
        $builder->join('data_barang', 'data_barang.id = brg_pesanan.id_brg', 'left');
        $query = $builder->get()->getResultArray();

        return $query;
    }
    
}