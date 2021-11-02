<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShowSeatResource;
use App\Models\Booking;
use App\Models\Show;
use App\Models\ShowSeat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowSeatController extends Controller
{
    public function index(Show $show) {
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
        
        $bookSeatsId = $request->all();

        try {
            DB::beginTransaction();
            $showSeats = ShowSeat::find($bookSeatsId);
            $createdBooking = Booking::create([
                'number_of_seats' => count($bookSeatsId),
                'show_id' => $showSeats[0]->show_id,
                'user_id' => 1,
                'status' => 'success'
            ]);
            foreach($showSeats as $showSeat) {
                $showSeat->status = 'booked';
                $showSeat->booking_id = $createdBooking->id;
                $showSeat->push();
            }
            DB::commit();
            
            return ShowSeatResource::collection(ShowSeat::whereShowId($showSeats[0]->show_id)->get());
            

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
