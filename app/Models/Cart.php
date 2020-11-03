<?php namespace App\Models;

use CodeIgniter\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $useTimestamps = true;
    
    protected $allowedFields = ['id_brg', 'id_user','jumlah', 'harga'];

    public function search($data)
    {
        
    }

    
}