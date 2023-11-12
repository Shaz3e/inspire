<?php

namespace Shaz3e\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    /**
     * Get an inspiring quote.
     *
     * @return string
     */
    public function justDoIt()
    {
        // $response = Http::withoutVerifying()->get('https://inspiration.goprogram.ai/');
        // $response = Http::get('https://inspiration.goprogram.ai/');

        $response = [
            [
                'quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.',
                'author' => 'Nelson Mandela',
            ],
            [
                'quote' => 'The way to get started is to quit talking and begin doing.',
                'author' => 'Walt Disney',
            ],
            [
                'quote' => 'If life were predictable it would cease to be life, and be without flavor.',
                'author' => 'Eleanor Roosevelt',
            ]
        ];

        $randomIndex = array_rand($response);

        return $response[$randomIndex]['quote'].' - '.$response[$randomIndex]['author'];
    }
}
