<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;
use App\Models\User;

use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $countCategory = Category::count();
        $countUser = User::count();
        $countQuestion = Question::count();
        return view('home',['countCategory'=>$countCategory,'countUser'=>$countUser,'countQuestion'=>$countQuestion]);
    }
}
