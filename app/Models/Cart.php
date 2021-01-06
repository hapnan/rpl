<?php namespace App\Models;

use CodeIgniter\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $useTimestamps = true;
    protected $returnType     = 'array'; 
    protected $allowedFields = ['id_brg', 'id_user','jumlah', 'harga_total'];

    public function jointable()
    {
        $builder = $this->db->table('cart');
        $builder->select('*');
        $builder->join('data_barang', 'data_barang.id = cart.id_brg', 'left');
        $query = $builder->get()->getResultArray();

        return $query;
    }
    
}