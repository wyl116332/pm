<?php
namespace App\Http\Controller;
use App\Http\Controllers\Controller;
class AuctionController extends Controller{
    public function text(){
        if (view()->exists('emails.customer')) {
            //
        }
    }
    public function index(){
        $auction=Auction::get();
        return view('auction.index', $auction);
    }
}
