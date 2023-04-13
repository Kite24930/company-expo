<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class MainController extends Controller
{
    public function routing() {
        $user = Auth::user();
        $userStatus = $user -> status;
        $userId = $user -> id;
        return match ($userStatus) {
            1 => redirect('/student/list'),
            2 => redirect('/company/edit'),
            default => redirect('/'),
        };
    }

    public function index() {
        $today = new \DateTime();
        $publicTime = new \DateTime('2023-04-24');
        $today < $publicTime ? $dateCheck = false : $dateCheck = true;
        $data = [
            'records' => [
                Company::where('section', 1) ->orwhere('section', 3) -> orderBy('booth') -> get(),
                Company::where('section', 2) -> orwhere('section', 3) -> orderBy('booth') -> get(),
            ],
            'dateCheck' => true,
        ];
        return view('index', $data);
    }
}
