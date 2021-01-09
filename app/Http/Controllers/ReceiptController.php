<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ReceiptCollection;
use App\Repositories\Receipt\ReceiptRepository;

class ReceiptController extends Controller
{
    //
    private $receipt;
    public function __construct(ReceiptRepository $receipt)
    {
       $this->receipt =$receipt;
    }
    /**
     * INSERT DATA table RECEIPT
     * CREATED BY:(LVHOANG 25/12/2020)
     */
    public function store(Request $request)
    {
      // $receipt = new Receipt([
      //   'voucher_code' => $request->get('voucher_code'),	
      //   'description'=> $request->get('description'),
      //   'amount_of_money'=> $request->get('amount_of_money'),
      //   'object'=> $request->get('object'),
      //   'reason'=> $request->get('reason'),	
      //   'receipt_type'=> $request->get('receipt_type'),
      //   'employee'=> $request->get('employee'),
      //   'accounting_date'=> $request->get('accounting_date'),
      //   'user_id'=>Auth::id(),
      // ]);

      // $receipt->save();

      // return response()->json('success');
      if(Auth::id()!=null){
        return $this->receipt->create($request->only($this->receipt->getModel()->fillable));
      }else{
        return response()->json('not confirmed identity');
      }

    }
    /**
     * Get the number of receipts according to the parameter passed
     * CREATED BY:(LVHOANG 25/12/2020)
     */
    public function index($number)
    {
        $receipts =$this->receipt->getall($number,Auth::id());
        return new ReceiptCollection($receipts);
        
    }
    /**
     * EDIT RECEIPT         
     * CREATED BY:(LVHOANG 25/12/2020)
     */
    public function edit($id)
    {
      

      $receipt=$this->receipt->getById($id);
      if($receipt->user_id==Auth::id()){
        // has confirmed identity
        return response()->json($receipt);
      }else{
          // not confirmed identity
          return response()->json('not confirmed identity');
      }

    }
    /**
     * UPDATE RECEIPT         
     * CREATED BY:(LVHOANG 25/12/2020)
     */
    public function update($id, Request $request)
    {
      $receipt = $this->receipt->getById($id);

      if($receipt->user_id==Auth::id()){
          // has confirmed identity
          //$this->model->update($request->only($this->model->getModel()->fillable), $id);
          return $this->receipt->update($request->only($this->receipt->getModel()->fillable),$id);
        }else{
            // not confirmed identity
            return response()->json('abc');
        }
      
    }
    /**
     * DELETE RECEIPT
     * CREATED BY:(LVHOANG 25/12/2020)
     */
    public function delete($id)
    {
      $receipt = $this->receipt->getById($id);
        if($receipt->user_id==Auth::id()){
          $isSuccess=$receipt->delete($id);
            return response()->json($isSuccess);
        }else{
            return response()->json('not confirmed identity');
        }
    }
    /**
     * Get all receipt and payment by date time desc
     * Created by:LVHOANG(2/1/2021)
     */
    public function limit($offset,$limit)
    {
        $receipts =$this->receipt->limit($offset,$limit);
        return new ReceiptCollection($receipts);
    }
    /**
     * Get payment limit by date time desc
     * Created by:LVHOANG(2/1/2021)
     */
    public function getPayments($offset,$limit)
    {
      if(Auth::id()!=null){
        $receipts =$this->receipt->getPayments($offset,$limit);
      return new ReceiptCollection($receipts);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    /**
     * Get  receipt limit by date time desc
     * Created by:LVHOANG(2/1/2021)
     */
    public function getReceipts($offset,$limit)
    {
      if(Auth::id()!=null){
        $receipts =$this->receipt->getReceipts($offset,$limit);
      return new ReceiptCollection($receipts);
      }else{
        return response()->json('not confirmed identity');
      }
    }

    public function totalPageReceipt()
    {
      if(Auth::id()!=null){
        $number =$this->receipt->totalPageReceipt();
        return response()->json($number);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    public function totalPagePayment()
    {
      if(Auth::id()!=null){
        $number =$this->receipt->totalPagePayment();
        return response()->json($number);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    public function totalPage(){
      if(Auth::id()!=null){
        $number =$this->receipt->totalPage();
        return response()->json($number);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    public function getTotalMoneyReceipt(){
      if(Auth::id()!=null){
        $number =$this->receipt->getTotalMoneyReceipt();
        return response()->json($number);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    public function getTotalMoneyPayment(){
      if(Auth::id()!=null){
        $number =$this->receipt->getTotalMoneyPayment();
        return response()->json($number);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    public function searchByStringReceipt($text)
    {
      if(Auth::id()!=null){
        $receipts =$this->receipt->searchByStringReceipt($text);
        return new ReceiptCollection($receipts);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    public function searchByStringPayment($text)
    {
      if(Auth::id()!=null){
        $receipts =$this->receipt->searchByStringPayment($text);
        return new ReceiptCollection($receipts);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    public function searchByString($text)
    {
      if(Auth::id()!=null){
        $receipts =$this->receipt->searchByString($text);
        return new ReceiptCollection($receipts);
      }else{
        return response()->json('not confirmed identity');
      }
    }
    /**
     * Test
     */
    public function test(){
      $receipts =$this->receipt->getById(1);
      return response()->json($receipts);
    }
}
