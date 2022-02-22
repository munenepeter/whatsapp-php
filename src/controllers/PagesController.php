<?php

namespace App\Controllers;

class PagesController{
    public function index(){
        if (isset($_SESSION['loggedIN'])) {
            # code...
            return view('index');
        }
        # code...
        
        return redirect('chat');
    }

    public function Chat(){
        
        return view('chat', [
            'name' => 'Abzed'
        ]);
    }


    
}