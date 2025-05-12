<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSermonRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'preacher' => 'sometimes|required|string|max:255',
            'date' => 'sometimes|required|date',
            'location' => 'nullable|string|max:255',
            'video_url' => 'nullable|url',
            'audio_url' => 'nullable|url',
            'thumbnail_url' => 'nullable|url',
        ];
    }
}