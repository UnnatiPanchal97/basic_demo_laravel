<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Email extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'email'];
    // public function customer(){
    //     return $this->belongsTo(Customer::class);
    // }
}
