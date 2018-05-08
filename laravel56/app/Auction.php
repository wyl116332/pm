<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model{
    public $timestamps=true;
    public function getDateFormat()
    {
        return time();
    }
    public function asDateTime($value)
    {
        return $value;
    }
}