<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home | Web Progamming Unpas',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About me | Web Progamming Unpas',

        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact us | Web Progamming Unpas',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. abc no 123',
                    'kota' => 'Bandung'

                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Bandung Rejo Pare',
                    'kota' => 'Kediri'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }


    //--------------------------------------------------------------------

}
