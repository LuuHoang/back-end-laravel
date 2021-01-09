<?php

namespace Database\Factories;

use App\Models\Receipt;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceiptFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receipt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'created_at'=>now(),
            // 'updated_at'=>now(),
            // 'voucher_code'=>$this->faker->
            // 'description'	
            // 'amount_of_money'	
            // 'object'
            // 'reason'
            // 'receipt_type'	
            // 'employee'	
            // 'accounting_date'	
            // 'user_id'
        ];
    }
}
