<?php

namespace App\Controllers;

class NewsController extends BaseController
{
    public function index()
    {
        $data['news'] = [
            [
                'id' => 1,
                'title' => 'แผนผังงานสัปดาห์วิทย์',
                'category' => 'กิจกรรม',
                'image' => 'images/news-example.jpg',
                'date' => '07/08/2567',
                'views' => 80,
                'readTime' => '26'
            ],
            [
                'id' => 2,
                'title' => 'ปิดรับสมัคร การแข่งขัน',
                'category' => 'การประกวดแข่งขัน',
                'image' => 'images/news-example.jpg',
                'date' => '25/07/2567',
                'views' => 108,
                'readTime' => '15'
            ]
        ];

        $data['categories'] = [
            'ทั้งหมด',
            'การประกวดแข่งขัน',
            'กิจกรรมของสาขาวิชา',
            'หนังสือประกาศ',
            'กิจกรรม'
        ];

        return view('public_relations', $data);
    }
}