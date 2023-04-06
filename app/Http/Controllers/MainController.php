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
        $status = null;
        $id = null;
        if (Auth::check()) {
            $user = Auth::user();
            $status = $user -> status;
            $id = $user -> id;
        }
        return view('index', compact('status', 'id'));
    }
}
