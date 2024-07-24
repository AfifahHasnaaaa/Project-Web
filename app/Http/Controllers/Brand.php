<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use Illuminate\Http\Request;

class Brand extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('brand/list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brand/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'kode_brand' => 'required|unique:brand,kode_brand',
            'nama_brand' => 'required',
            'jumlah_produk' => 'required|min:1|numeric',
        ]);

        $brand = new BrandModel([
            'kode_brand' => $request->get('kode_brand'),
            'nama_brand' => $request->get('nama_brand'),
            'jumlah_produk' => $request->get('jumlah_produk'),
        ]);

        $saved = $brand->save();

        if(!$saved){
            $brand_json = [
                'pesan' => 'Gagal Menambah Brand',
                'brand' => $brand,
            ];
        } else {
            $brand_json = [
                'pesan' => 'Sukses',
                'brand' => $brand,
            ];
        }

        return json_encode($brand_json);

    }

    public function store_no_api(Request $request)
    {

        $request->validate([
            'kode_brand' => 'required|unique:brand,kode_brand',
            'nama_brand' => 'required',
            'jumlah_produk' => 'required|min:1|numeric',
        ]);

        $brand = new BrandModel([
            'kode_brand' => $request->get('kode_brand'),
            'nama_brand' => $request->get('nama_brand'),
            'jumlah_produk' => $request->get('jumlah_produk'),
        ]);

        $saved = $brand->save();

        if(!$saved){
            $brand_json = [
                'pesan' => 'Gagal Menambah Brand',
                'brand' => $brand,
            ];
        } else {
            $brand_json = [
                'pesan' => 'Sukses',
                'brand' => $brand,
            ];
        }

        return redirect('/brand');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BrandModel  $BrandModel
     * @return \Illuminate\Http\Response
     */
    public function show(BrandModel $BrandModel, $id_brand)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BrandModel  $BrandModel
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandModel $BrandModel, $id_brand)
    {
        //
        $brand_detail = $BrandModel::where('id_brand', $id_brand)->first();

        $brand = [
            'brand_view' => $brand_detail,
        ];

        return view('brand/formUbah', $brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BrandModel  $BrandModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandModel $BrandModel)
    {
        //
        $id = $request->get('id_brand');

        $request->validate([
            'kode_brand' => 'required',
            'nama_brand' => 'required',
            'jumlah_produk' => 'required|min:1|numeric',
        ]);

        $data = new BrandModel([
            'kode_brand' => $request->get('kode_brand'),
            'nama_brand' => $request->get('nama_brand'),
            'jumlah_produk' => $request->get('jumlah_produk'),
        ]);

        $data_db = BrandModel::find($id);

        if ($data_db != null) {
            $data_db->kode_brand = $request->get('kode_brand');
            $data_db->nama_brand = $request->get('nama_brand');
            $data_db->jumlah_produk = $request->get('jumlah_produk');
            $saved = $data_db->save();

            if(!$saved){
                $data_json = [
                    'pesan' => 'Gagal Menambah Brand',
                    'data' => $data_db,
                ];
            } else {
                $brand_json = [
                    'pesan' => 'Sukses',
                    'data' => $data_db,
                ];
            }
        } else {
            $data_json = [
                'pesan' => 'Gagal',
            ];
        }

        return json_encode($data_json);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BrandModel  $BrandModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandModel $BrandModel, Request $request)
    {
        $id_brand = $request->get('id_brand');

        $data_db = BrandModel::find($id_brand);

        if ($data_db != null) {
            $data_db->delete();
        }

        $data_json = [
            'pesan' => 'Sukses Hapus Brand',
            'data_delete' => $data_db,
        ];

        return json_encode($data_json);
    }

    public function getListBrand(BrandModel $BrandModel)
    {
        $data = $BrandModel::all();

        return json_encode($data);
    }

    public function getByKode(BrandModel $BrandModel, $kode)
    {
        $data = $BrandModel::where('kode_brand', 'LIKE', "%{$kode}%")->get();

        return json_encode($data);
    }


    public function dataDatables(Request $request)
    {
        $search = $request->query('search');
        $order = $request->query('order');
        $nama_brand = $request->query('nama_brand');

        switch ($order[0]['column']) {
            case '0':
                $orderby = 'id_brand';
                break;

            case '1':
                $orderby = 'kode_brand';
                break;

            case '2':
                $orderby = 'nama_brand';
                break;

            case '3':
                $orderby = 'jumlah_produk';
                break;

            default:
                $orderby = 'id_brand';
                break;
        }

        $data_db_total = BrandModel::all();
        $data_db_filtered = BrandModel::where('nama_brand', 'like', '%'.$search['value'].'%');
        if ($nama_brand != '' && $nama_brand != null) {
            $data_db_filtered = $data_db_filtered->where('nama_brand', '<=', $nama_brand);
        }

        $data_db_filtered = $data_db_filtered->get();

        $data_db = BrandModel::where('nama_brand', 'like', '%'.$search['value'].'%');
        if ($nama_brand != '' && $nama_brand != null) {
            $data_db = $data_db->where('nama_brand', '<=', $nama_brand);
        }


        $data_db = $data_db->offset($request->query('start'))
        ->limit($request->query('length'))
        ->orderByRaw($orderby.' '.$order[0]['dir'])
        ->get(['brand.*']);

        $data_formatted = [];

        foreach ($data_db as $key => $value) {
            $url_edit = url("brand/form"). '/' . $value->id_brand;;
            $eventHapus = 'onclick="hapusData('.$value->id_brand.')"';
        ;
            $action = '<a href="'.$url_edit.'" class="btn btn-info">Ubah</a> <a href="#" '.$eventHapus.' class="btn btn-danger">Hapus</a>';
            $row_data = [];
            $row_data[] = $key+1;
            $row_data[] = $value->kode_brand;
            $row_data[] = $value->nama_brand;
            $row_data[] = $value->jumlah_produk;
            $row_data[] = $action;

            $data_formatted[] = $row_data;
        }

        $data_json = [
            'draw' => $request->query('draw'),
            'recordsTotal' => count($data_db_total),
            'recordsFiltered' => count($data_db_filtered),
            'data' => $data_formatted
        ];

        return json_encode($data_json);
    }
}

