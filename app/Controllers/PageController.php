<?php declare(strict_types=1);

namespace App\Controllers;

class PageController
{
    public function home()
    {
        return view('pages.home');
    }

    public function dashboard()
    {
        $data = [
            'name' => 'Meho',
            'id' => request('id') ?? ''
        ];
        return view('pages.dashboard', $data);
    }
}