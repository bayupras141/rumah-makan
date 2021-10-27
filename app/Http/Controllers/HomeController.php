<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $collection = collect([
            [
                'nama' => 'Nasi Goreng Special',
                'url' => 'images/produk/1.jpeg',
                'Harga' => '20000',
            ],
            [
                'nama' => 'Bakmi Goreng',
                'url' => 'images/produk/2.jpeg',
                'Harga' => '15000',
            ],
            [
                'nama' => 'Soto Ayam',
                'url' => 'images/produk/3.jpeg',
                'Harga' => '25000',
            ],
            [
                'nama' => 'Bakso',
                'url' => 'images/produk/4.jpeg',
                'Harga' => '20000',
            ],
            [
                'nama' => 'Rawon',
                'url' => 'images/produk/5.jpeg',
                'Harga' => '15000',
            ],
            [
                'nama' => 'Mie Ayam',
                'url' => 'images/produk/6.jpeg',
                'Harga' => '25000',
            ],
        ]);

        // @dd($collection);
        return view('home', ['data' => $collection]);
    }
    public function about(){
        $collection = collect([
            [
                'nama' => 'Senin',
                'jam' => '08.00 - 20.00',
            ],
            [
                'nama' => 'Selasa',
                'jam' => '08.00 - 20.00',
            ],
            [
                'nama' => 'Rabu',
                'jam' => '08.00 - 20.00',
            ],
            [
                'nama' => 'Kamis',
                'jam' => '08.00 - 20.00',
            ],
            [
                'nama' => 'Jumat',
                'jam' => '08.00 - 20.00',
            ],
            [
                'nama' => 'Sabtu',
                'jam' => '08.00 - 22.00',
            ],
            [
                'nama' => 'Minggu',
                'jam' => '08.00 - 22.00',
            ],
            
        ]);
        return view('about-us', ['data' => $collection]);
    }
    public function lokasi(){
        
        return view('lokasi');
    }
}
