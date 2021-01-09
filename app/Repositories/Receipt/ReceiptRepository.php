<?php 

namespace App\Repositories\Receipt;

use App\Models\Receipt;
use Illuminate\Support\Facades\Auth;

class ReceiptRepository implements ReceiptInterface
{
    private $model;
    public function __construct(Receipt $model)
    {
        $this->model=$model;
    }
    /**
     * Get receipt by offset 
     */
    public function limit($offset,$limit)
    {
        return $this->model->where('user_id',Auth::id())->offset(($offset-1)*$limit)->orderByDesc('accounting_date')->limit($limit)->get();
    }
    public function getall($number,$idAuth)
    {
        return $this->model->paginate($number)->where('user_id',$idAuth);
    }
    public function getById($id)
    {
        return $this->model->find($id);
    }
    public function create(array $attributes)
    {
        $attributes['user_id']=Auth::id();
        $receipt=new $this->model;
        $receipt->fill($attributes);
        if($receipt->create($attributes)){
            return 'success';
        }else {
            return 'false database';
        }
    }
    public function update(array $attributes,$id)
    {
        $receipt = $this->model->findOrFail($id);
        $attributes['user_id']=Auth::id();
        if($receipt->update($attributes)){
            return 'success';
        }else {
            return 'false database';
        }
    }
    public function delete($id)
    {
        $receipt =$this->getById($id)->delete();
        return $receipt;
    }
     // Get the associated model
     public function getModel()
     {
         return $this->model;
     }
    public function getPayments($offset,$limit)
    {
        return $this->model->where('user_id',Auth::id())->where('receipt_type',0)->offset(($offset-1)*$limit)->orderByDesc('accounting_date')->limit($limit)->get();
    }
    public function getReceipts($offset,$limit)
    {
        return $this->model->where('user_id',Auth::id())->where('receipt_type',1)->offset(($offset-1)*$limit)->orderByDesc('accounting_date')->limit($limit)->get();
    }
    public function totalPageReceipt()
    {
        return $this->model->where('user_id',Auth::id())->where('receipt_type',1)->count('id');
    }
    public function totalPagePayment()
    {
        return $this->model->where('user_id',Auth::id())->where('receipt_type',0)->count('id');
    }
    public function totalPage(){
        return $this->model->where('user_id',Auth::id())->count('id');
    }

    public function getTotalMoneyReceipt(){
        return $this->model->where('user_id',Auth::id())->where('receipt_type',1)->sum('amount_of_money');
    }
    public function getTotalMoneyPayment(){
        return $this->model->where('user_id',Auth::id())->where('receipt_type',0)->sum('amount_of_money');
    }
    public function searchByStringReceipt($text){
        return $this->model->where('user_id',Auth::id())->where('receipt_type',1)->where(function ($q) use($text) {
            $q->where('description','LIKE','%'.$text.'%')
            ->orWhere('voucher_code','LIKE','%'.$text.'%')
            ->orWhere('object','LIKE','%'.$text.'%')->orWhere('reason','LIKE','%'.$text.'%')->orWhere('accounting_date','LIKE','%'.$text.'%');
        })->get();
    }
    public function searchByStringPayment($text){
        // return $this->model->where('user_id',Auth::id())->where('receipt_type',0)->where(function ($query,$text) {
        //     $query->where('description','LIKE','%'.$text.'%')
        //     ->orWhere('voucher_code','LIKE','%'.$text.'%')
        //     ->orWhere('object','LIKE','%'.$text.'%')->orWhere('reason','LIKE','%'.$text.'%')->orWhere('accounting_date','LIKE','%'.$text.'%');
        // })->get();
        return $this->model->where('user_id',Auth::id())->where('receipt_type',0)->where(function ($q) use($text) {
                $q->where('description','LIKE','%'.$text.'%')
                ->orWhere('voucher_code','LIKE','%'.$text.'%')
                ->orWhere('object','LIKE','%'.$text.'%')->orWhere('reason','LIKE','%'.$text.'%')->orWhere('accounting_date','LIKE','%'.$text.'%');
            })->get();

        // $query =$this->model->where('user_id',Auth::id())->where('receipt_type',0)->where('description','LIKE','%'.$text.'%')->orWhere('voucher_code','LIKE','%'.$text.'%')
        // ->orWhere('object','LIKE','%'.$text.'%')->orWhere('reason','LIKE','%'.$text.'%')->orWhere('accounting_date','LIKE','%'.$text.'%');
        // dd($query->toSql());
    
    }
    public function searchByString($text){
        return $this->model->where('user_id',Auth::id())->where(function ($q) use($text) {
            $q->where('description','LIKE','%'.$text.'%')
            ->orWhere('voucher_code','LIKE','%'.$text.'%')
            ->orWhere('object','LIKE','%'.$text.'%')->orWhere('reason','LIKE','%'.$text.'%')->orWhere('accounting_date','LIKE','%'.$text.'%');
        })->get();
    }
}