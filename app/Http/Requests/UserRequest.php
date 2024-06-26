<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        $response = response()->json([
            'success' => false,
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ], 422);

        throw new HttpResponseException($response);
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $minAge = now()->subYears(18)->format('Y-m-d');
        return [
            'name' => 'required|string',
            'birthday' => 'required|date|before:' . $minAge,
            'emails' => 'required|emails|unique:users,emails',
            'phone' => 'required|string',
            'password' => 'required|string|confirmed',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'birthday' => Carbon::createFromFormat('d-m-Y', $this->birthday)->format('Y-m-d'),
        ]);
    }
}
