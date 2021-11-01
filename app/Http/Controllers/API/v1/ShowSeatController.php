<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShowSeatResource;
use App\Models\Show;
use App\Models\ShowSeat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowSeatController extends Controller
{
    public function index(Show $show) {
        // ddd(ShowSeatResource::collection(ShowSeat::whereShowId($show->id)->get()));
        return ShowSeatResource::collection(ShowSeat::whereShowId($show->id)->get());
    }

    public function update(Show $show, ShowSeat $showSeat) {
        $showSeat->status = 'busy';
        $showSeat->push();
        return response()->json([
            'message' => 'Show Seat Status Changed!'
        ]);
    }

    public function buy(Request $request) {
        // return $request->bookSeats;
        try {
            DB::beginTransaction();
            $arrTmp = [];
            foreach ($request->bookSeats as $bookSeat) {
                array_push($arrTmp, $bookSeat);
                // $showSeat = ShowSeat::findorFail($bookSeat->id);
                // $showSeat->status = 'booked';
                // $showSeat->push();
            }

            DB::commit();
            return $arrTmp;

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
