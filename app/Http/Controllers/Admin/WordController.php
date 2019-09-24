<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Word;

class WordController extends Controller
    {
        public function add()
            {
                return view('admin.word.create');
            }
        public function create(Request $request)
            {
                $this->validate($request,Word::$rules);
                $word = new Word;
                $form = $request->all();
                
                unset ($form['_token']);
                
                $word -> fill($form);
                $word -> save();
                
                return redirect('admin/word/create');
            }
        public function edit()
            {
                return view('admin.word.edit');
            }
        public function delete()
            {
                return view('admin.word.delete');
            }
    }
