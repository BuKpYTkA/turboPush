<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateOrderRequest
 * @package App\Http\Requests\Order
 */
class CreateOrderRequest extends FormRequest
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
//     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|digits:10',
            'message' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Поле "Имя" обязятельно к заполнению',
            'message.required' => 'Поле "Текст сообщения" обязятельно к заполнению',
            'phone.digits' => 'Неверный формат телефона',
            'phone.required' => 'Поле "Телефон" обязятельно к заполнению'
        ];
    }
}
