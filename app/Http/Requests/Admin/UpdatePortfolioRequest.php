<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePortfolioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return (bool) $this->user()?->is_admin;
    }

    public function rules(): array
    {
        return [
            'personal.fullName' => ['nullable', 'string', 'max:120'],
            'personal.professionalTitle' => ['nullable', 'string', 'max:160'],
            'personal.shortBio' => ['nullable', 'string', 'max:2000'],
            'personal.location.city' => ['nullable', 'string', 'max:120'],
            'personal.location.country' => ['nullable', 'string', 'max:120'],

            'contact.professionalEmail' => ['nullable', 'email', 'max:255'],
            'contact.phone' => ['nullable', 'string', 'max:50'],
            'contact.website' => ['nullable', 'url', 'max:255'],

            'socialLinks.linkedin' => ['nullable', 'url', 'max:255'],
            'socialLinks.github' => ['nullable', 'url', 'max:255'],
            'socialLinks.twitter' => ['nullable', 'url', 'max:255'],
            'socialLinks.instagram' => ['nullable', 'url', 'max:255'],

            'about.bio' => ['nullable', 'string', 'max:5000'],
            'about.careerGoal' => ['nullable', 'string', 'max:3000'],

            'availability.status' => ['nullable', 'string', 'max:100'],
            'availability.message' => ['nullable', 'string', 'max:1000'],
        ];
    }
}
