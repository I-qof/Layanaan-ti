<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class AduanController extends Controller
{
   

   public function index()
   {
      $data = DB::connection('mysql')->select("SELECT * FROM aduan where deleted = 1");
      return DataTables::of($data)->make(true);
   }

   public function view(){
      return view('views.pengaduan.pengaduan');
   }
   public function viewAduan(){
      return view('views.pengaduan.pengaduanView');
   }
   public function add(){
      return view('views.pengaduan.pengaduanAdd');
   }

   public function store(Request $request)
   {
      $this->validate($request, [
         // 'id_user' => 'required',
         'keluhan' => 'required',
         'no_aduan' => 'required',
         'no_hp' => 'required',
         'lokasi' => 'required',
         'email_atasan' => 'required',
         'tgl_masuk' => 'required',
         'tgl_keluar' => 'required',
         'id_status' => 'required',
         'nama_pengambil' => 'required',
      ]);

      $input = [
         // 'id_user' => $request->id_user,
         'keluhan' => $request->keluhan,
         'no_aduan' => $request->no_aduan,
         'no_hp' => $request->no_hp,
         'lokasi' => $request->lokasi,
         'email_atasan' => $request->email_atasan,
         'tgl_masuk' => $request->tgl_masuk,
         'tgl_keluar' => $request->tgl_keluar,
         'id_status' => $request->id_status,
         'nama_pengambil' => $request->nama_pengambil,

      ];

      $data = Aduan::create($input);
      return response()->json($data);
   }


   public function getById($id)
   {
      $data = DB::connection('mysql')->select("SELECT * FROM aduan where deleted =1 and id = $id");
      return response()->json(['data' => $data]);
   }

   public function destroy($id)
   {
      $data = Aduan::where('id', $id)->update([
         'deleted' => 0
      ]);
      return response()->json($data);
   }

   public function update($id,Request $request){
      $this->validate($request, [
         // 'id_user' => 'required',
         'keluhan' => 'required',
         'no_aduan' => 'required',
         'no_hp' => 'required',
         'lokasi' => 'required',
         'email_atasan' => 'required',
         'tgl_masuk' => 'required',
         'tgl_keluar' => 'required',
         'id_status' => 'required',
         'nama_pengambil' => 'required',
      ]);

      $input = [
         // 'id_user' => $request->id_user,
         'keluhan' => $request->keluhan,
         'no_aduan' => $request->no_aduan,
         'no_hp' => $request->no_hp,
         'lokasi' => $request->lokasi,
         'email_atasan' => $request->email_atasan,
         'tgl_masuk' => $request->tgl_masuk,
         'tgl_keluar' => $request->tgl_keluar,
         'id_status' => $request->id_status,
         'nama_pengambil' => $request->nama_pengambil,

      ];

      $data = Aduan::where('id',$id)->update($input);
      return response()->json($data);

   }
}
