<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneNumber;

class FeedbackRequest extends FormRequest
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
    return ['name'=>'required|min:3|max:30',
            'e-mail'=>'required|min:7|max:30',
            'phone'=>'required|numeric|min:1|max:9999999',
            'rating'=>'required|numeric|min:0|max:5',
            'message'=>'required|min:1|max:500'];
    }
}

