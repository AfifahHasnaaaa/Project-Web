<?php

namespace App\Http\Controllers;

use App\Models\Produkmodel;
use App\Models\KeranjangModel;
use App\Models\ReviewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdukUser extends Controller
{
    public function home()
    {
        $produk = Produkmodel::take(2)->get();
        $product = Produkmodel::all();
        $productt = Produkmodel::all();
        $produks = Produkmodel::take(3)->get();
        $best = Produkmodel::take(3)->get();
        $new = Produkmodel::take(4)->get();
        $featured = Produkmodel::take(4)->get();
        $review = ReviewModel::all();
        return view('index', compact('produk','produks','best','new','featured','product','productt','review'));
    }

    public function index()
    {
        $data = KeranjangModel::leftJoin('produk', 'produk.id_produk', '=', 'keranjang.id_produk')
            ->selectRaw('sum(produk.harga * keranjang.jumlah_beli) as total')
            ->selectRaw('sum(keranjang.id_user) as jumlah')
            ->first();
        $produk = Produkmodel::take(2)->get();
        $product = Produkmodel::all();
        $productt = Produkmodel::all();
        $produks = Produkmodel::take(3)->get();
        $best = Produkmodel::take(3)->get();
        $new = Produkmodel::take(4)->get();
        $featured = Produkmodel::take(4)->get();
        $review = ReviewModel::all();
        return view('coba', compact('produk','produks','best','new','featured','product','productt','data','review'));
    }

    public function create()
    {
        //
        return view('produk/form');
    }

    public function detail(Produkmodel $produkmodel, $id)
    {
        $productt = Produkmodel::all();

        if (!$productt) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
        $data = KeranjangModel::leftJoin('produk', 'produk.id_produk', '=', 'keranjang.id_produk')
            ->selectRaw('sum(produk.harga * keranjang.jumlah_beli) as total')
            ->selectRaw('sum(keranjang.id_user) as jumlah')
            ->first();
        $produk = Produkmodel::take(1)->get();
        $produks = Produkmodel::take(3)->get();
        $best = Produkmodel::take(3)->get();
        $new = Produkmodel::take(4)->get();
        $featured = Produkmodel::take(4)->get();
        $product = Produkmodel::findOrFail($id);
        $review = ReviewModel::all();
        return view('detail', compact('produk','product','produks','best','new','featured','productt','data','review'));
    }
        
    public function produk()
    {
        $produk = Produkmodel::all();
        if (!$produk) {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
        $data = KeranjangModel::leftJoin('produk', 'produk.id_produk', '=', 'keranjang.id_produk')
            ->selectRaw('sum(produk.harga * keranjang.jumlah_beli) as total')
            ->selectRaw('sum(keranjang.id_user) as jumlah')
            ->first();
        // $produk = Produkmodel::all();
        $produks = Produkmodel::take(3)->get();
        $best = Produkmodel::take(3)->get();
        $featured = Produkmodel::take(4)->get();
        $review = ReviewModel::all();
        return view('produk', compact('produk','produks','best','featured','data','review'));
    }
    public function faq()
    {
        $data = KeranjangModel::leftJoin('produk', 'produk.id_produk', '=', 'keranjang.id_produk')
            ->selectRaw('sum(produk.harga * keranjang.jumlah_beli) as total')
            ->selectRaw('sum(keranjang.id_user) as jumlah')
            ->first();
        $produk = Produkmodel::take(2)->get();
        $product = Produkmodel::all();
        $productt = Produkmodel::all();
        $produks = Produkmodel::take(3)->get();
        $best = Produkmodel::take(3)->get();
        $new = Produkmodel::take(4)->get();
        $featured = Produkmodel::take(4)->get();
        return view('faq', compact('produk','produks','best','new','featured','product','productt','data',));
    }
    public function kontak()
    {
        $data = KeranjangModel::leftJoin('produk', 'produk.id_produk', '=', 'keranjang.id_produk')
            ->selectRaw('sum(produk.harga * keranjang.jumlah_beli) as total')
            ->selectRaw('sum(keranjang.id_user) as jumlah')
            ->first();
        $produk = Produkmodel::take(2)->get();
        $product = Produkmodel::all();
        $productt = Produkmodel::all();
        $produks = Produkmodel::take(3)->get();
        $best = Produkmodel::take(3)->get();
        $new = Produkmodel::take(4)->get();
        $featured = Produkmodel::take(4)->get();
        return view('kontak', compact('produk','produks','best','new','featured','product','productt','data'));
    }
    
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

        $foto = 'p'.$request->input('id_produk').'.'.$request->file->extension();

        $request->file->move(public_path('assets/images/products/'), $foto);

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

    public function show()
    {
        //

    }

    public function edit(Produkmodel $produkmodel, $id)
    {
        //
        $data_detail = $produkmodel::where('id_produk', $id)->first();

        $data = [
            'data_view' => $data_detail,
        ];

        return view('produk/formUbah', $data);
    }

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

    public function destroy(Produkmodel $produkmodel, Request $request)
    {
        $id = $request->get('id_produk');

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
        $search_stok = $request->query('stok');

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

        if ($search_stok != '' && $search_stok != null) {
            $data_db_filtered = $data_db_filtered->where('stok', '<=', $search_stok);
        }

        $data_db_filtered = $data_db_filtered->get();

        $data_db = Produkmodel::where('nama_produk', 'like', '%'.$search['value'].'%');

        if ($search_stok != '' && $search_stok != null) {
            $data_db = $data_db->where('stok', '<=', $search_stok);
        }

        $data_db = $data_db->offset($request->query('start'))
        ->limit($request->query('length'))
        ->orderByRaw($orderby.' '.$order[0]['dir'])
        ->get(['produk.*']);


        $data_formatted = [];

        foreach ($data_db as $key => $value) {
            $url_edit = url("produk/form"). '/' . $value->id_produk;;
            $eventHapus = 'onclick="hapusData('.$value->id_produk.')"';
            $event_add_to_cart = 'onclick="add_to_cart('.$value->id_produk.')"';            ;
            $action = '<a href="'.$url_edit.'" class="btn btn-info">Ubah</a> <a href="#" '.$eventHapus.' class="btn btn-danger">Hapus</a> <hr/> <a href="#" '.$event_add_to_cart.' class="btn btn-warning">Tambahkan Ke Keranjang</a>';

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

