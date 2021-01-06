<?php namespace App\Controllers;

use App\Models\Data_barang;
use App\Models\Cart_sementara;
use App\Models\Cart;
use CodeIgniter\API\ResponseTrait;
use DateTime;
use phpDocumentor\Reflection\Types\Array_;
use App\Models\Brg_pesanan;
class Produk extends BaseController
{
    
    use ResponseTrait;
    protected $produk;
    protected $api;
    protected $brg;
    public function __construct()
    {
        $this->produk = new Data_barang; 
        $this->cart_s = new Cart_sementara;
        $this->cart = new Cart;
        $this->brg = new Brg_pesanan;
        
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
                'harga_total' => $harga
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
                'harga_total' => $harga_s
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


    public function savecart()
    {
        $datacaratsemetara =  $this->cart_s->findAll();
        

        if(!empty($datacaratsemetara)){
            foreach ($datacaratsemetara as $key ) {
                
                $datacart = array(
                    'id_brg' => $key['id_brg'],
                    'id_user' => $key['id_user'],
                    'jumlah' => $key['jumlah'],
                    'harga_total' => $key['harga_total']
                );
                $checkdatacart = $this->cart->where('id_brg', $key['id_brg'])->where('id_user', $key['id_user'])->findAll();
                
                if (!empty($checkdatacart)) {
                    if ($key['id_brg'] == $checkdatacart[0]['id_brg'] && $key['id_user'] == $checkdatacart[0]['id_user'] ) {
                        $this->cart->where('id_brg', $key['id_brg'])->where('id_user', $key['id_user'])->set($datacart)->update();
                        $this->cart_s->where('id_user', 1)->delete();
                        
                    } else {
                        $this->cart->insert($datacart);
                        $this->cart_s->where('id_user', 1)->delete();
                        
                    }
                }else {
                    $this->cart->insert($datacart);
                    $this->cart_s->where('id_user', 1)->delete();
                    
                }
            };
            $response = [
                'status'   => 200,
                'code'     => 'OK',
                'messages' => [
                    'Data Berhasil di tambahkan',
                ]
            ];
            
            return $this->setResponseFormat('json')->respond($response,200);
            
        }else{
            $response = [
                'status'   => 400,
                'code'     => 'BAD',
                'messages' => [
                    'Data tidak Berhasil di tambakan',
                ]
            ];
            return $this->setResponseFormat('json')->respond($response,400);
        }
    }
    
    

    public function datacart()
    {
        $datacratmentah =  $this->cart->jointable();
        if(!empty($datacratmentah)){
            foreach ($datacratmentah as $key ) {
                
                $datacart[] = array(
                    'nama_brg' => $key['nama_brg'],
                    'id_user' => $key['id_user'],
                    'jumlah' => $key['jumlah'],
                    'harga_total' => $key['harga_total']
                );

            }
            
            return $this->setResponseFormat('json')->respond($datacart,200);
            
        }else{
            return $this->respondNoContent("data tidak ada");
        }
    }

    public function order()
    {
        helper('date');
        helper('array');
        $datacart = $this->cart->findAll();
        if (!empty($datacart)) {
           
            foreach ($datacart as $key ) { 
                $cart = [
                    'id_brg' => $key['id_brg'],
                    'id_user' => $key['id_user'],
                    'jumlah' => $key['jumlah'],
                    'total_hrg' => $key['harga_total'],
                    'status' => 0,
                ];
                
                $this->brg->insert($cart);
                $this->cart->where('id_user', $key['id_user'])->delete();
            }
            return redirect()->to('/home');
        } else {
            return redirect()->to('/home');
        }
        

    } 
}