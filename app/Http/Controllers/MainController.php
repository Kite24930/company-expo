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
        $publicTime = new \DateTime('2023-04-17');
        $diff = $today -> diff($publicTime);
        $data = [
            'first' => Company::where('section', 1) -> orderBy('booth') -> get(),
            'second' => Company::where('section', 2) -> orderBy('booth') -> get(),
            'diff' => $diff,
        ];
        return view('index', $data);
    }
}
