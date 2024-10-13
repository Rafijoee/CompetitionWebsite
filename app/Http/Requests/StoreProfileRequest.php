<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $ktm_validate = 'mimes:pdf|max:5120';
        $active_validate = 'mimes:pdf|max:5120';
        return [
                'team_name' => 'required',
                'phone' => 'required|min:10|max:13',
                'category_id' => 'required',
                'name_anggota_2' => 'required',
                'name_anggota_1' => 'required',
                'name_anggota_3' => 'nullable',
                'univ' => 'required',
                'ktm_anggota_3' => 'nullable|'.$ktm_validate,
                'active_anggota_2' => 'required|'.$active_validate,
                'active_anggota_1' => 'required|'.$active_validate,
                'active_anggota_3' => 'nullable|'.$active_validate,
        ];
    }
}
