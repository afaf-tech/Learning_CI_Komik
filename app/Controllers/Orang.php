<?php

namespace App\Controllers;

use App\Models\OrangModel;
use Config\Pager;

class Orang extends BaseController
{
    protected $orangModel;

    public function __construct()
    {
        $this->orangModel = new \App\Models\OrangModel();
    }

    public function index()
    {
        $current_page = $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : '1';
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $orang = $this->orangModel->search($keyword);
        } else {
            $orang = $this->orangModel;
        }
        $data = [
            'title' => 'Daftar Orang',
            // 'orang' => $this->orangModel->findAll()
            'orang' => $orang->paginate(6, 'orang'),
            'pager' => $this->orangModel->pager,
            'current_page' => $current_page
        ];
        // Without Model
        // $db = \Config\Database::connect();
        // $komik =  $db->query("SELECT * FROM komik");
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }

        return view('orang/index', $data);
    }
}
