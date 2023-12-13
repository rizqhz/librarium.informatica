<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LecturerController extends Controller
{
    public function testMail()
    {
        $data = Book::find(1);
        $recv = [
            'user1@gmail.com',
            'user2@gmail.com',
            'user3@gmail.com',
            'user4@gmail.com',
            'user5@gmail.com',
        ];
        foreach ($recv as $key => $value) {
            Mail::to($value)->queue(new TestMail($data, $data->id));
        }
    }
}
