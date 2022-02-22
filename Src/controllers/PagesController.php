<?php

namespace App\Controllers;

class PagesController{
    public function index()
    {
        if (isset($_SESSION['loggedIN'])) {
            # code...
            return view('index');
        }
        # code...
        return redirect('chat');
    }

    public function chat()
    {
        
        return view('chat', [
            'name' => 'Abzed'
        ]);
    }

    public function error()
    {
        
        return view('error');
    }


    
}