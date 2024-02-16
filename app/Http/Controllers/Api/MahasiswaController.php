<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return MahasiswaResource::collection(Mahasiswa::all());
    }

    public function store(StoreMahasiswaRequest $request)
    {
        $data = Mahasiswa::create($request->validated());
        return MahasiswaResource::make($data);
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return MahasiswaResource::make($mahasiswa);
    }

    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->validated());
        return MahasiswaResource::make($mahasiswa);
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return response()->json([
            'message'=>'Berhasil dihapus'
        ]);
    }


}
