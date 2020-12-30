<?php namespace App\Models;

use CodeIgniter\Model;

class Data_barang extends Model
{
    protected $table = 'data_barang';
    protected $useTimestamps = true;
    

    public function search($data)
    {
        return $this->table('data_barang')->like('nama_brg', $data)->get()->getResultArray();
    }

    
}