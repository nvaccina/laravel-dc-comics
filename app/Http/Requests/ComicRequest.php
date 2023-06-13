<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */

    public function rules()
    {
        return [
            'title'=> 'required|min:5|max:255',
            'thumb'=> 'required',
            'price'=> 'required|min:1|max:100|decimal:2',
            'series'=> 'required|min:3|max:100',
            'sale_date'=> 'required|date',
            'type'=> 'required|min:3|max:100',
            'artists'=> 'required|min:2|max:255',
            'writers'=> 'required|min:2|max:255'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il Titolo è un campo obbligatorio',
            'title.min' => 'Il Titolo deve avere almeno :min caratteri',
            'title.max' => 'Il Titolo non può avere più di :max caratteri',

            'thumb.required' => 'La Thumb image è un campo obbligatorio',

            'price.required' => 'Il Prezzo è un campo obbligatorio',
            'price.min' => 'Il Prezzo deve avere almeno :min caratteri',
            'price.max' => 'Il Prezzo non può avere più di :max caratteri',
            'price.decimal' => 'Il Prezzo non può più di :decimal cifre dopo la virgola',

            'series.required' => 'La Serie è un campo obbligatorio',
            'series.min' => 'La Serie deve avere almeno :min caratteri',
            'series.max' => 'La Serie non può avere più di :max caratteri',

            'sale_date.required' => 'La Data di vendita è un campo obbligatorio',
            'sale_date.date' => 'La Data non rispetta il formato corretto',
            'sale_date.min' => 'La Data di vendita deve avere almeno :min caratteri',
            'sale_date.max' => 'La Data di vendita non può avere più di :max caratteri',

            'type.required' => 'Il Tipo è un campo obbligatorio',
            'type.min' => 'Il Tipo deve avere almeno :min caratteri',
            'type.max' => 'Il Tipo non può avere più di :max caratteri',

            'artists.required' => 'Gli Artisti sono un campo obbligatorio',
            'artists.min' => 'Gli Artisti devono avere almeno :min caratteri',
            'artists.max' => 'Gli Artisti non possono avere più di :max caratteri',

            'writers.required' => 'Gli scrittori sono un campo obbligatorio',
            'writers.min' => 'Gli scrittori devono avere almeno :min caratteri',
            'writers.max' => 'Gli scrittori non possono avere più di :max caratteri',
        ];
    }
}
