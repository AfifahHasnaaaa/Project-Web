<?php

namespace App\Http\Controllers;

use App\Models\AplikasiModel;
use Illuminate\Http\Request;

class Aplikasi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aplikasi/aplikasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('aplikasi/aplikasi');
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
            'kode_aplikasi' => 'required|unique:aplikasi,kode_aplikasi',
            'nama_aplikasi' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
        ]);

        $aplikasi = new AplikasiModel([
            'kode_aplikasi' => $request->get('kode_aplikasi'),
            'nama_aplikasi' => $request->get('nama_aplikasi'),
            'pemilik' => $request->get('pemilik'),
            'alamat' => $request->get('alamat'),
        ]);

        $saved = $aplikasi->save();

        if(!$saved){
            $data_json = [
                'pesan' => 'Gagal Menambah Data',
                'aplikasi' => $aplikasi,
            ];
        } else {
            $data_json = [
                'pesan' => 'Sukses',
                'aplikasi' => $aplikasi,
            ];
        }

        return json_encode($data_json);

    }

    public function store_no_api(Request $request)
    {

        $request->validate([
            'kode_aplikasi' => 'required|unique:aplikasi,kode_aplikasi',
            'nama_aplikasi' => 'required',
            'pemilik' => 'alamat',
            'alamat' => 'required',
            
        ]);

        $aplikasi = new AplikasiModel([
            'kode_aplikasi' => $request->get('kode_aplikasi'),
            'nama_aplikasi' => $request->get('nama_aplikasi'),
            'pemilik' => $request->get('pemilik'),
            'alamat' => $request->get('alamat')
        ]);

        $saved = $aplikasi->save();

        if(!$saved){
            $data_json = [
                'pesan' => 'Gagal Menambah Data',
                'aplikasi' => $aplikasi,
            ];
        } else {
            $data_json = [
                'pesan' => 'Sukses',
                'aplikasi' => $aplikasi,
            ];
        }

        return redirect('/aplikasi');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AplikasiModel  $AplikasiModel
     * @return \Illuminate\Http\Response
     */
    public function show(AplikasiModel $AplikasiModel, $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AplikasiModel  $AplikasiModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AplikasiModel $AplikasiModel, $id)
    {
        //
        $data_detail = $AplikasiModel::where('id_aplikasi', $id)->first();

        $data = [
            'data_view' => $data_detail,
        ];

        return view('aplikasi/aplikasi', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AplikasiModel  $AplikasiModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AplikasiModel $AplikasiModel)
    {
        //
        $id = $request->get('id_aplikasi');

        $request->validate([
            'kode_aplikasi' => 'required',
            'nama_aplikasi' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required'
        ]);

        $aplikasi = new AplikasiModel([
            'kode_aplikasi' => $request->get('kode_aplikasi'),
            'nama_aplikasi' => $request->get('nama_aplikasi'),
            'pemilik' => $request->get('deskripsi'),
            'alamat' => $request->get('alamat')
        ]);

        $data_db = AplikasiModel::find($id);

        if ($data_db != null) {
            $data_db->kode_aplikasi = $request->get('kode_aplikasi');
            $data_db->nama_aplikasi = $request->get('nama_aplikasi');
            $data_db->pemilik = $request->get('deskripsi');
            $data_db->alamat = $request->get('alamat');
            $saved = $data_db->save();

            if(!$saved){
                $data_json = [
                    'pesan' => 'Gagal Menambah Data',
                    'aplikasi' => $data_db,
                ];
            } else {
                $data_json = [
                    'pesan' => 'Sukses',
                    'aplikasi' => $data_db,
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
     * @param  \App\Models\AplikasiModel  $AplikasiModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AplikasiModel $AplikasiModel, Request $request)
    {
        $id = $request->get('id');

        $data_db = AplikasiModel::find($id);

        if ($data_db != null) {
            $data_db->delete();
        }

        $data_json = [
            'pesan' => 'Sukses Hapus Data',
            'data_delete' => $data_db,
        ];

        return json_encode($data_json);
    }

}

