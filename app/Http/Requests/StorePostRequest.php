<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FooRule;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug'=>['required',
            function($attribute,$value,$fail){
                    if($value==='foo'){
                        return  $fail($attribute.' is invalid.');
                    }
                }
            ],
            'title'=>['required','unique:posts',new FooRule()],
            'image'=>'required',
            'description'=>['required','foo'], // cách 2 dịnh nghĩa ở lớp AppServiceProvider(App\Provider\) trước , sau đó chỉ gọi đến 
            'categories'=>'required'
        ];
    }
}
