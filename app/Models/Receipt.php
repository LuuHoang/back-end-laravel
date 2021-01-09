<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Receipt extends Model
{
    use HasFactory;
    protected $fillable = [
        'voucher_code',	
        'description',
        'amount_of_money',
        'object',
        'reason',	
        'receipt_type',
        'employee',
        'accounting_date',
        'user_id',
        'day_voucher',
        'address',
        'account_get'
    ];
    public function scopeUser(Builder $builder){
        
    }
    public static function boot(){
        parent::boot();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
