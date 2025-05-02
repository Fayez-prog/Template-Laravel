<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $articlesCount = Product::count();
        $commandesCount = 5; // valeur exemple

        $users = User::get(); // Récupérer tous les utilisateurs

        return view('admin.dashboard', compact('userCount', 'articlesCount', 'commandesCount', 'users'));
    }
}