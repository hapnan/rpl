<?php namespace App\Controllers;

use App\Models\Data_barang;
use CodeIgniter\API\ResponseTrait;
 
class Produk extends BaseController
{
    
    use ResponseTrait;
    protected $produk;
    protected $api;
    public function __construct()
    {
        $this->produk = new Data_barang; 
    }

	public function index()
	{
        $data = $this->produk->findAll();
        
        $data_barang = [
            "barang" => $data
        ];
		return view('produk', $data_barang);
    }
    


	public function addproduk()
	{
        $slug = url_title($this->request->getVar('nama_brg'), '-', true);
        $this->produk->save([
            'nama_brg' => $this->request->getVar('nama_brg'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga')
        ]);
        

        return redirect()->to('/produk');
    }
    
    public function search()   
    {
        

        $keyword = $this->request->getVar('keyword');
       
        $barang = $this->produk->search($keyword);
        
        
        
        
         return $this->setResponseFormat('json')->respond($barang, 200); 
    }


    public function getall()
    {
        $data = $this->produk->findAll();

        return $this->setResponseFormat('json')->respond($data, 200);
    }
	//--------------------------------------------------------------------

    public function cartsementara()
    {
        $id = $this->request->getVar('id');

        $data = $this->find($id);
    }
}