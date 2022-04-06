<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function index()
    {
        return [
            'name' => [
                'salutation' => 'Mr',
                'first' => 'Kieran',
                'second' => 'Proctor'
            ],
            'age' => Carbon::parse('1998-12-18')->diffInYears(Carbon::now()),
            'hobbies' => ['Football', 'V8 Supercars', 'Swedish'],
            'languages' => ['English' => 'Native', 'Swedish' => 'Elementary (A2)'],
            'coding_languages' => ['C#', 'Javascript', 'Laravel', 'Nextjs'],
        ];
    }
}
