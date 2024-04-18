<?php

namespace Backpack\NewsCRUD\app\Http\Requests;

class ArticleRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_en' => 'required|min:2|max:255',
            'title_id' => 'required|min:2|max:255',
            'slug' => 'unique:articles,slug,'.\Request::get('id'),
            'slug_id' => 'unique:articles,slug_id,'.\Request::get('id'),
            'content_en' => 'required|min:2',
            'content_id' => 'required|min:2',
            'date' => 'required|date',
            'status' => 'required',
            'category_id' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
