<?php

namespace App\Http\Requests;

use App\Dto\CreateUserDTO;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */

    // untuk buat validasi
    public function rules(): array
    {
        return [
            "email" => ["required", "email", "unique:users,emial"],
            "password" => ["required", "confirmed"],
            "name" => ["required", "min:4"]
        ];
    }

    // sambungin ke DTO nya
    public function toDTO(): CreateUserDTO
    {
        return new CreateUserDTO(
            $this->validated()
        );
    }
}
