<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function routing() {
        $user = Auth::user();
        $userStatus = $user -> status;
        $userId = $user -> id;
        return match ($userStatus) {
            1 => redirect('/student/list'),
            2 => redirect('/company/edit/' . $userId),
            default => redirect('/'),
        };
    }

    public function index() {
        $user = Auth::user();
        $data = [
            'status' => $user -> status,
            'id' => $user -> id
        ];
        return view('index', $data);
    }
}
