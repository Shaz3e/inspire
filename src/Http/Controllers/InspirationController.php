<?php

namespace Shaz3e\Inspire\Http\Controllers;

use Shaz3e\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        // return $quote; // this works
        
        return view('inspire::index', compact('quote')); // view does not work

    }
}