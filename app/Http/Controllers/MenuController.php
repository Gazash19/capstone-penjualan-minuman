<?php
namespace App\Http\Controllers;

use App\Models\Menu; // Wajib dipanggil agar Model dikenali
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Mengambil seluruh baris data dari tabel menu
        $menuList = Menu::all(); 

        // Mengirim variabel $menuList ke file view
        return view('menu.index', compact('menuList'));
    }
}