<?php namespace App\Controllers;

use App\Models\Data_barang;
use App\Models\Cart_sementara;
use App\Models\Cart;
use CodeIgniter\API\ResponseTrait;
 
class Produk extends BaseController
{
    
    use ResponseTrait;
    protected $produk;
    protected $api;
    public function __construct()
    {
        $this->produk = new Data_barang; 
        $this->cart_s = new Cart_sementara;
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


    public function cartsementara()
    {
        $id = $this->request->getVar('id');
        $prd_jumlah = $this->request->getVar('jumlah');
        $data = $this->produk->find($id);
        $cekdata = $this->cart_s->where('id_brg', $id)->findAll();
        
        if (empty($cekdata)) {
            $harga = $data['harga']*$prd_jumlah;
            
            $cartS = [
                'id_brg' => $data['id'],
                'id_user' => 1,
                'jumlah' => $prd_jumlah,
                'harga' => $harga
            ];
            $this->cart_s->insert($cartS);

            $response = [
                'status'   => 200,
                'code'     => 'OK',
                'messages' => [
                    'Data Berhasil di Tambah',
                ]
            ];
            return $this->setResponseFormat('json')->respond($response,200);
        }else {
            
            $jumlahfix = $cekdata[0]['jumlah'] + $prd_jumlah;
            $harga_s = $data['harga'] * $jumlahfix;
            $cartS = [
                'jumlah' => $jumlahfix,
                'harga' => $harga_s
            ];
            
            $this->cart_s->where('id_brg', $id, 'id_user', 1)->set($cartS)->update();

                $response = [
                    'status'   => 200,
                    'code'     => 'OK',
                    'messages' => [
                        'Data Berhasil di update',
                    ]
                ];
          

            return $this->setResponseFormat('json')->respond($response,200);
        }


    }

    public function cart(Type $var = null)
    {
        # code...
    }
}