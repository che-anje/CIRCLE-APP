<?php namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;
use App\Models\Prefecture;

trait changePrefecture
{
    public function changePrefectures() {
        
        return Prefecture::orderBy('id','asc')->get();
    }

    
}