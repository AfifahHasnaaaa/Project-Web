<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;

class Review extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('review/list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('review/form');
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
            'kode_review' => 'required|unique:review,kode_review',
            'nama' => 'required',
            'review' => 'required',
            'asal' => 'required',
        ]);

        $review = new ReviewModel([
            'kode_review' => $request->get('kode_review'),
            'nama' => $request->get('nama'),
            'review' => $request->get('review'),
            'asal' => $request->get('asal'),
            'foto' => '',
        ]);

        $saved = $review->save();

        if(!$saved){
            $data_json = [
                'pesan' => 'Gagal Menambah Data',
                'review' => $review,
            ];
        } else {
            $data_json = [
                'pesan' => 'Sukses',
                'review' => $review,
            ];
        }

        return json_encode($data_json);

    }

    public function store_no_api(Request $request)
    {

        // untuk upload file
        $request->validate([
            'foto' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $foto = 'review_'.$request->input('kode_review').'-'.time().'.'.$request->file->extension();

        $request->file->move(public_path('foto'), $foto);
        // end

        $request->validate([
            'kode_review' => 'required|unique:review,kode_review',
            'nama' => 'required',
            'review' => 'required',
            'asal' => 'required',
        ]);

        $review= new ReviewModel([
            'kode_review' => $request->get('kode_review'),
            'nama' => $request->get('nama'),
            'review' => $request->get('review'),
            'asal' => $request->get('asal'),
            'foto' => $foto,
        ]);

        $saved = $review->save();

        if(!$saved){
            $data_json = [
                'pesan' => 'Gagal Menambah Data',
                'review' => $review,
            ];
        } else {
            $data_json = [
                'pesan' => 'Sukses',
                'review' => $review,
            ];
        }

        return redirect('/review');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReviewModel  $ReviewModel
     * @return \Illuminate\Http\Response
     */
    public function show(ReviewModel $ReviewModel, $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReviewModel  $ReviewModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ReviewModel $ReviewModel, $id)
    {
        //
        $data_detail = $ReviewModel::where('id_review', $id)->first();

        $data = [
            'data_view' => $data_detail,
        ];

        return view('review/formUbah', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReviewModel  $ReviewModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReviewModel $ReviewModel)
    {
        //
        $id = $request->get('id_review');

        $request->validate([
            'kode_review' => 'required',
            'nama' => 'required',
            'review' => 'required',
            'asal' => 'required',
        ]);

        $review = new ReviewModel([
            'kode_review' => $request->get('kode_review'),
            'nama' => $request->get('nama'),
            'review' => $request->get('review'),
            'asal' => $request->get('asal'),
            'foto' => '',
        ]);

        $data_db = ReviewModel::find($id);

        if ($data_db != null) {
            $data_db->kode_review = $request->get('kode_review');
            $data_db->nama = $request->get('nama');
            $data_db->review = $request->get('review');
            $data_db->review = $request->get('asal');
            $saved = $data_db->save();

            if(!$saved){
                $data_json = [
                    'pesan' => 'Gagal Menambah Data',
                    'review' => $data_db,
                ];
            } else {
                $data_json = [
                    'pesan' => 'Sukses',
                    'review' => $data_db,
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
     * @param  \App\Models\ReviewModel  $ReviewModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReviewModel $ReviewModel, Request $request)
    {
        $id = $request->get('id');

        $data_db = ReviewModel::find($id);

        if ($data_db != null) {
            $data_db->delete();
        }

        $data_json = [
            'pesan' => 'Sukses Hapus Data',
            'data_delete' => $data_db,
        ];

        return json_encode($data_json);
    }

    public function getListReview(ReviewModel $ReviewModel)
    {
        $data = $ReviewModel::all();

        return json_encode($data);
    }

    public function getByKode(ReviewModel $ReviewModel, $kode)
    {
        $data = $ReviewModel::where('kode_review', 'LIKE', "%{$kode}%")->get();

        return json_encode($data);
    }

    public function dataDatables(Request $request)
    {
        $search = $request->query('search');
        $order = $request->query('order');
        $nama = $request->query('nama');

        switch ($order[0]['column']) {
            case '0':
                $orderby = 'id_review';
                break;

            case '1':
                $orderby = 'kode_review';
                break;

            case '2':
                $orderby = 'nama';
                break;

            case '3':
                $orderby = 'review';
                break;

            case '4':
                $orderby = 'asal';
                break;

            case '4':
                $orderby = 'foto';
                break;

            default:
                $orderby = 'id_review';
                break;
        }

        $data_db_total = ReviewModel::all();
        $data_db_filtered =ReviewModel::where('nama', 'like', '%'.$search['value'].'%');
        if ($nama != '' && $nama != null) {
            $data_db_filtered = $data_db_filtered->where('nama', '<=', $nama);
        }

        $data_db_filtered = $data_db_filtered->get();

        $data_db = ReviewModel::where('nama', 'like', '%'.$search['value'].'%');
        if ($nama != '' && $nama != null) {
            $data_db_filtered = $data_db_filtered->where('nama', '<=', $nama);
        }




        $data_db = $data_db->offset($request->query('start'))
        ->limit($request->query('length'))
        ->orderByRaw($orderby.' '.$order[0]['dir'])
        ->get(['review.*']);


        $data_formatted = [];

        foreach ($data_db as $key => $value) {
            $url_edit = url("review/form"). '/' . $value->id_review;;
            $eventHapus = 'onclick="hapusData('.$value->id_review.')"';
            $event_add_to_cart = 'onclick="add_to_cart('.$value->id_review.')"';            ;
            $action = '<a href="'.$url_edit.'" class="btn btn-info">Ubah</a> <a href="#" '.$eventHapus.' class="btn btn-danger">Hapus</a> <hr/> <a href="#" '.$event_add_to_cart.' class="btn btn-warning">Tambahkan Ke Keranjang</a>';

            $image = '<img src="asset/images/'.$value->foto.'" width=150>';

            $row_data = [];
            $row_data[] = $key+1;
            $row_data[] = $value->kode_review;
            $row_data[] = $value->nama;
            $row_data[] = $value->review;
            $row_data[] = $value->asal;
            $row_data[] = $value->foto;
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

