<?php

namespace App\Models\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment_model;
use Illuminate\Http\Request;

class Comment_controller extends Controller {
    public function index() {
        return Comment_model::select(
            'id',
            'name', 
            'comment') -> get();
    }

    public function store(Request $request) {
        $request -> validate([
                'name',
                'comment' => 'required'
            ]);
    }

    public function show(Comment_model $comment) {
        return response() -> json([

            'Comment' => $comment
        ]);
    }
}