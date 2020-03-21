<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function getFFullNameAttribute(){
        return "$this->student_name";
    }

    public function getFullNameAttribute(){
        return "$this->book_name";
    }

    public function getFineAttribute(){
        $currentDate = Carbon::now();
        $returnDate = Carbon::parse($this->return_date);
        $daysDiff = $currentDate->diffInDays($returnDate);
        if($currentDate<$returnDate){
            return $daysDiff = 0;
        }else if($daysDiff < $this->pay_amount) {
            return $daysDiff = 0;  
        }else if($this->paid_value > 1) {
            return $daysDiff = 0;   
        }else{   
            return $daysDiff * 50 - $this->pay_amount;  
        }
    }
}



