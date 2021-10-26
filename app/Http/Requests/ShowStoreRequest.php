<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ShowStoreRequest extends FormRequest
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
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'cinema_hall_id' => ['required', Rule::exists('cinema_halls', 'id')],
            'show_date' => 'required|date',
            'start_time' => 'required|string',
            'end_time' => 'required|string'
        ];
    }
}
