<?php

namespace App\Http\Controllers;

use App\Models\Produkmodel;
use App\Models\TransaksiModel;
use App\Models\BrandModel;
use App\Models\ReviewModel;
use Illuminate\Http\Request;

class Produk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produkmodel::count();
        $transaksi = TransaksiModel::sum('total_bayar');
        $brand = BrandModel::count();
        $review = ReviewModel::count();
        return view('produk/list', compact('produk','transaksi','brand','review'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produk/form');
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
            'kode_produk' => 'required|unique:produk,kode_produk',
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'stok_produk' => 'required|min:1|numeric',
            'harga_jual' => 'required|min:1000|numeric'
        ]);

        $produk = new Produkmodel([
            'kode_produk' => $request->get('kode_produk'),
            'nama_produk' => $request->get('nama_produk'),
            'deskripsi' => $request->get('deskripsi'),
            'stok' => $request->get('stok_produk'),
            'harga' => $request->get('harga_jual'),
            'foto_produk' => '',
        ]);

        $saved = $produk->save();

        if(!$saved){
            $data_json = [
                'pesan' => 'Gagal Menambah Data',
                'produk' => $produk,
            ];
        } else {
            $data_json = [
                'pesan' => 'Sukses',
                'produk' => $produk,
            ];
        }

        return json_encode($data_json);

    }

    public function store_no_api(Request $request)
    {

        // untuk upload file
        $request->validate([
            'foto_produk' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $foto = 'produk_'.$request->input('kode_produk').'-'.time().'.'.$request->file->extension();

        $request->file->move(public_path('foto_produk'), $foto);
        // end

        $request->validate([
            'kode_produk' => 'required|unique:produk,kode_produk',
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'stok_produk' => 'required|min:1|numeric',
            'harga_jual' => 'required|min:1000|numeric'
        ]);

        $produk = new Produkmodel([
            'kode_produk' => $request->get('kode_produk'),
            'nama_produk' => $request->get('nama_produk'),
            'deskripsi' => $request->get('deskripsi'),
            'stok' => $request->get('stok_produk'),
            'harga' => $request->get('harga_jual'),
            'foto_produk' => $foto,
        ]);

        $saved = $produk->save();

        if(!$saved){
            $data_json = [
                'pesan' => 'Gagal Menambah Data',
                'produk' => $produk,
            ];
        } else {
            $data_json = [
                'pesan' => 'Sukses',
                'produk' => $produk,
            ];
        }

        return redirect('/produk');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produkmodel  $produkmodel
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('produk/list_produk');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produkmodel  $produkmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Produkmodel $produkmodel, $id)
    {
        //
        $data_detail = $produkmodel::where('id_produk', $id)->first();

        $data = [
            'data_view' => $data_detail,
        ];

        return view('produk/formUbah', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produkmodel  $produkmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produkmodel $produkmodel)
    {
        //
        $id = $request->get('id_produk');

        $request->validate([
            'kode_produk' => 'required',
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'stok_produk' => 'required|min:1|numeric',
            'harga_jual' => 'required|min:1000|numeric',
            'deskripsi' => 'required',
        ]);

        $produk = new Produkmodel([
            'kode_produk' => $request->get('kode_produk'),
            'nama_produk' => $request->get('nama_produk'),
            'deskripsi' => $request->get('deskripsi'),
            'stok' => $request->get('stok_produk'),
            'harga' => $request->get('harga_jual'),
            'foto_produk' => '',
        ]);

        $data_db = Produkmodel::find($id);

        if ($data_db != null) {
            $data_db->kode_produk = $request->get('kode_produk');
            $data_db->nama_produk = $request->get('nama_produk');
            $data_db->deskripsi = $request->get('deskripsi');
            $data_db->stok = $request->get('stok_produk');
            $data_db->harga = $request->get('harga_jual');
            $saved = $data_db->save();

            if(!$saved){
                $data_json = [
                    'pesan' => 'Gagal Menambah Data',
                    'produk' => $data_db,
                ];
            } else {
                $data_json = [
                    'pesan' => 'Sukses',
                    'produk' => $data_db,
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
     * @param  \App\Models\Produkmodel  $produkmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produkmodel $produkmodel, Request $request)
    {
        $id = $request->get('id');

        $data_db = Produkmodel::find($id);

        if ($data_db != null) {
            $data_db->delete();
        }

        $data_json = [
            'pesan' => 'Sukses Hapus Data',
            'data_delete' => $data_db,
        ];

        return json_encode($data_json);
    }

    public function getListProduk(Produkmodel $produkmodel)
    {
        $data = $produkmodel::all();

        return json_encode($data);
    }

    public function getByKode(Produkmodel $produkmodel, $kode)
    {
        $data = $produkmodel::where('kode_produk', 'LIKE', "%{$kode}%")->get();

        return json_encode($data);
    }


    public function dataDatables(Request $request)
    {
        $search = $request->query('search');
        $order = $request->query('order');
        $nama_produk = $request->query('nama_produk');

        switch ($order[0]['column']) {
            case '0':
                $orderby = 'id_produk';
                break;

            case '1':
                $orderby = 'kode_produk';
                break;

            case '2':
                $orderby = 'nama_produk';
                break;

            case '3':
                $orderby = 'stok';
                break;

            case '4':
                $orderby = 'harga';
                break;

            default:
                $orderby = 'id_produk';
                break;
        }

        $data_db_total = Produkmodel::all();
        $data_db_filtered = Produkmodel::where('nama_produk', 'like', '%'.$search['value'].'%');

        if ($nama_produk!= '' && $nama_produk != null) {
            $data_db_filtered = $data_db_filtered->where('nama_produk', '<=', $nama_produk);
        }

        $data_db_filtered = $data_db_filtered->get();

        $data_db = Produkmodel::where('nama_produk', 'like', '%'.$search['value'].'%');

        if ($nama_produk != '' && $nama_produk != null) {
            $data_db = $data_db->where('nama_produk', '<=', $nama_produk);
        }

        $data_db = $data_db->offset($request->query('start'))
        ->limit($request->query('length'))
        ->orderByRaw($orderby.' '.$order[0]['dir'])
        ->get(['produk.*']);


        $data_formatted = [];

        foreach ($data_db as $key => $value) {
            $url_edit = url("produk/form"). '/' . $value->id_produk;;
            $eventHapus = 'onclick="hapusData('.$value->id_produk.')"';
            // $event_add_to_cart = 'onclick="add_to_cart('.$value->id_produk.')"';            ;
            $action = '<a href="'.$url_edit.'" class="btn btn-info">Ubah</a> <a href="#" '.$eventHapus.' class="btn btn-danger">Hapus</a>';

            $harga = 'Rp '.number_format($value->harga);
            $image = '<img src="assets/images/products/'.$value->foto_produk.'" width=150>';

            $row_data = [];
            $row_data[] = $key+1;
            $row_data[] = $value->kode_produk;
            $row_data[] = $value->nama_produk;
            $row_data[] = $value->stok;
            $row_data[] = $harga;
            $row_data[] = $value->deskripsi;
            $row_data[] = $image;
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

