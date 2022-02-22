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
        return redirect('ChatList');
    }

    public function ChatList()
    {
        
        return view('ChatList');
    }


    
}