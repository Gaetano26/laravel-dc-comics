<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:255|min:3',
            'series' => 'required|max:255|min:3',
            'sale_date' => 'required|max:255|min:4',
            'type' => 'required|max:255|min:2',
            'artists' => 'required|max:255|min:5',
            'writers' => 'required|max:255|min:5',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.max' => "Il titolo non deve superare 255 caratteri",
            'title.min' => "Il titolo deve contenere almano 3 caratteri",
            'description.required' => 'Il campo è obbligatorio',
            'thumb.required' => "Devi inserire la url di una immagine",
            'price.required' => "Il prezzo è obbligatorio",
            'price.max' => "Il prezzo non deve superare 255 caratteri",
            'price.min' => "Il prezzo deve contenere almano 3 caratteri",
            'series.required' => "La Series è obbligatoria",
            'series.max' => "La Series non deve superare 255 caratteri",
            'series.min' => "La Series deve contenere almano 3 caratteri",
            'sale_date.required' => "La Data è obbligatoria",
            'sale_date.max' => "La Data non deve superare 255 caratteri",
            'sale_date.min' => "La Data deve contenere almano 4 caratteri",
            'type.required' => "Il Type è obbligatorio",
            'type.max' => 'Lunghezza massima 255 caratteri',
            'type.min' => "Il titolo deve contenere almano 2 caratteri",
            'artists.required' => "Il campo artista\i  è obbligatorio",
            'artists.max' => "Il campo artista\i non deve superare 255 caratteri",
            'artists.min' => "Il campo artista\i  deve contenere almano 5 caratteri",
            'writers.required' => "Il campo artista\i  è obbligatorio",
            'writers.max' => "Il campo artista\i non deve superare 255 caratteri",
            'writers.min' => "Il campo artista\i  deve contenere almano 5 caratteri",


        ];
    }
}
