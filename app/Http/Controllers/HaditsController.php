<?php

namespace App\Http\Controllers;

use App\Models\Hadits;
use App\Models\Kitab;
use Illuminate\Http\Request;

class HaditsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getHaditsRandom()
    {
        $hadits = Hadits::inRandomOrder()->with('kitab')->first();
        $data = array(
            "status" => 1,
            // "kitab" => $hadits->kitab,
            "data" => $hadits
        );
        return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getHaditsRandomByKitabId($kitab_id)
    {
        $hadits = Kitab::find($kitab_id);
        $data = array(
            "status" => 1,
            "kitab" => $hadits->nama,
            "data" => $hadits->hadits()->inRandomOrder()->first()
        );
        return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getHaditsByKitabIdLimited($kitab_id, $paginate)
    {
        $hadits = Kitab::find($kitab_id);
        $data = array(
            "status" => 1,
            "kitab" => $hadits->nama,
            "data" => $hadits->hadits()->paginate($paginate)
        );
        return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function searchHadits(Request $r)
    {
        $hadits = Hadits::where('isi', 'LIKE', "%$r->q%")
                        ->orWhere('artinya', 'LIKE', "%$r->q%")
                        ->get();
        $data = array(
            "status" => 1,
            "data" => $hadits
        );
        return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);                
    }
}
