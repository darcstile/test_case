<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;

class PaymentControllerRequest extends FormRequest
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
            'number' => ['required', new CardNumber],
            'month' => ['required', new CardExpirationMonth($this->get('year'))],
            'year' => ['required', new CardExpirationYear($this->get('month'))],
            'cvv' => ['required', new CardCvc($this->get('number'))],
        ];
    }
}
