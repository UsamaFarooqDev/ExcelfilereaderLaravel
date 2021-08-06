<?php

namespace App\Imports;

use App\Models\userecord;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
 

class userimport implements ToModel ,WithHeadingRow
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function rules(): array
    {
    return [
        'name'             => 'required|max:35',
        'email'            => 'required|email|unique:teachers,email,NULL,id,deleted_at,NULL',
        'phone'            => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
    ];
    }
    public function customValidationMessages()
    {
    return [
 
                #All Email Validation for Teacher Email
                'name.max'                    => 'The maximun length of The  name must not exceed :max',
                'email.required'    => 'Email must not be empty!',
                'email.email'       => 'Incorrect email address!',
                'phone.required'      => 'contact must not be empty!',
                'phone.regex'         => 'Incorrect format of Contact',
    ];
}
    public function model(array $row)
    {
        return new userecord([
            'id' => $row['id'],
            'name' => $row['name'],
            'email' => $row['email'],
            'phone' => $row['phone'],
        ]);
    }
}
