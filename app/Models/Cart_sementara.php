<?php namespace App\Models;

use CodeIgniter\Model;

class cart_sementara extends Model
{
    protected $table = 'cart_sementara';
    protected $useTimestamps = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id_brg', 'id_user','jumlah', 'harga_total'];

    
    public function delete_user_cart($id)
    {       
        
    }
    
}