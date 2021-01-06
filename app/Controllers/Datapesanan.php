<?php namespace App\Controllers;

use App\Models\Brg_pesanan;
use CodeIgniter\API\ResponseTrait;
class Datapesanan extends BaseController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->datapesanan = new Brg_pesanan;
        
    }

    public function index()
    {
        return view('data_pesanan');
    }
    


    public function getdatapesanan0()
    {
        $datapesanan = $this->datapesanan->jointable(0,1);
        if (!empty($datapesanan)) {
            $count = count($datapesanan);

            $data = array(
                
                'jumlah_order' => $count-1,
                'id_transaksi' => $datapesanan[0]['id_transaksi'],
                'id_user' => $datapesanan[0]['id_user'],
                'id_brg' => $datapesanan[0]['id_brg'],
                'nama_brg' => $datapesanan[0]['nama_brg'],
                'jumlah' => $datapesanan[0]['jumlah'],
                'total_hrg' => $datapesanan[0]['total_hrg'],
                'status' => $datapesanan[0]['status']     
            );
            return $this->respondCreated($data, 200);
        }else {

            return $this->failNotFound("Tidak ada data");
        } 
    }
    public function getdatapesanan1()
    {
        $datapesanan = $this->datapesanan->jointable(1,1);
        if (!empty($datapesanan)) {
            $count = count($datapesanan);

            $data = array(
                
                'jumlah_order' => $count-1,
                'id_transaksi' => $datapesanan[0]['id_transaksi'],
                'id_user' => $datapesanan[0]['id_user'],
                'id_brg' => $datapesanan[0]['id_brg'],
                'nama_brg' => $datapesanan[0]['nama_brg'],
                'jumlah' => $datapesanan[0]['jumlah'],
                'total_hrg' => $datapesanan[0]['total_hrg'],
                'status' => $datapesanan[0]['status']     
            );
            return $this->respondCreated($data, 200);
        }else {

            return $this->failNotFound("Tidak ada data");
        }
    }
    public function getdatapesanan2()
    {
        $datapesanan = $this->datapesanan->jointable(2,1);
        if (!empty($datapesanan)) {
            $count = count($datapesanan);

            $data = array(
                
                'jumlah_order' => $count-1,
                'id_transaksi' => $datapesanan[0]['id_transaksi'],
                'id_user' => $datapesanan[0]['id_user'],
                'id_brg' => $datapesanan[0]['id_brg'],
                'nama_brg' => $datapesanan[0]['nama_brg'],
                'jumlah' => $datapesanan[0]['jumlah'],
                'total_hrg' => $datapesanan[0]['total_hrg'],
                'status' => $datapesanan[0]['status']     
            );
            return $this->respondCreated($data, 200);
        }else {

            return $this->failNotFound("Tidak ada data");
        }
    }
    public function getdatapesanan3()
    {
        $datapesanan = $this->datapesanan->jointable(3,1);
        if (!empty($datapesanan)) {
            $count = count($datapesanan);

            $data = array(
                
                'jumlah_order' => $count-1,
                'id_transaksi' => $datapesanan[0]['id_transaksi'],
                'id_user' => $datapesanan[0]['id_user'],
                'id_brg' => $datapesanan[0]['id_brg'],
                'nama_brg' => $datapesanan[0]['nama_brg'],
                'jumlah' => $datapesanan[0]['jumlah'],
                'total_hrg' => $datapesanan[0]['total_hrg'],
                'status' => $datapesanan[0]['status']     
            );
            return $this->respondCreated($data, 200);
        }else {

            return $this->failNotFound("Tidak ada data");
        }
    }
    
    public function detail($id)
    {
        $data = $this->datapesanan->getdatajoin($id);
        
        $dataolah['data1'] = [
            'status' => "Menunggu Konfirmasi",
            'tgl_pesan' => $data[0]['tgl_pesan'],
            'id_transaksi' => $data[0]['id_transaksi']
        ];
        foreach ($data as $key) {
            if ($key['status'] == 0) {
                    $dataolah['data2'][] = [
                            'nama_brg' => $key['nama_brg'],
                            'jumlah' => $key['jumlah'],
                            'harga' => $key['harga'],
                            'total_hrg' => $key['total_hrg'] 
                    ];
            }elseif ($key['status'] == 1) {
                $dataolah['data2'][] = [
                    'nama_brg' => $key['nama_brg'],
                    'jumlah' => $key['jumlah'],
                    'harga' => $key['harga'],
                    'total_hrg' => $key['total_hrg'] 
                ];
            }elseif ($key['status'] == 2) {
                $dataolah['data2'][] = [
                    'nama_brg' => $key['nama_brg'],
                    'jumlah' => $key['jumlah'],
                    'harga' => $key['harga'],
                    'total_hrg' => $key['total_hrg'] 
                ];
            }elseif ($key['status'] == 3) {
                $dataolah['data2'][] = [
                    'nama_brg' => $key['nama_brg'],
                    'jumlah' => $key['jumlah'],
                    'harga' => $key['harga'],
                    'total_hrg' => $key['total_hrg'] 
                ];
            }
        }
        return view('detail',$dataolah,  ['saveData' => true]);
        
        
    }
}