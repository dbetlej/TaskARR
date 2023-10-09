<?php

namespace Modules\Movie\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Validation\Rule;

class MovieRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules(): array
    {
//        $validVods = [ ];

        return [
            'name' => ['required', 'string', 'max:120'],
            'url' => ['sometimes', 'string', 'max:600', 'url'],
            'description' => ['sometimes', 'string', 'max:1200'],
            'series' => ['sometimes', 'string', 'max:120'],
//            'vod' => ['sometimes', 'string', 'max:120', Rule::in($validVods)],
            'vod' => ['sometimes', 'string', 'max:120'],
            'category' => ['required', 'string', 'max:120'],
            'favorite' => ['sometimes', 'boolean'],
            'watched' => ['sometimes', 'boolean'],
            'to_watch' => ['sometimes', 'boolean']
        ];
    }

    /**
     * Possible messages to show while validate.
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => __('The name field is required.'),
            'name.string' => __('The name must be a string.'),
            'name.max' => __('The name cannot exceed :max characters.'),

            'url.required' => __('The URL field is required.'),
            'url.string' => __('The URL must be a string.'),
            'url.max' => __('The URL cannot exceed :max characters.'),
            'url.url' => __('The URL is not valid.'),

            'description.required' => __('The description field is required.'),
            'description.string' => __('The description must be a string.'),
            'description.max' => __('The description cannot exceed :max characters.'),

            'series.string' => __('The series must be a string.'),
            'series.max' => __('The series cannot exceed :max characters.'),

            'vod.required' => __('The vod field is required.'),
            'vod.string' => __('The vod must be a string.'),
            'vod.max' => __('The vod cannot exceed :max characters.'),
//            'vod.in' => __('The selected vod is invalid.'),

            'category.required' => __('The category field is required.'),
            'category.string' => __('The category must be a string.'),
            'category.max' => __('The category cannot exceed :max characters.'),

            'favorite.boolean' => __('The favorite field must be a boolean value.'),
            'watched.boolean' => __('The watched field must be a boolean value.'),
            'to_watch.boolean' => __('The to watch field must be a boolean value.')
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
