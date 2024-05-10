<?php

namespace App\Http\Controllers;

use App\Models\Weather;

class WeatherController extends Controller
{
    public function index(){
        // Fetch yesterday's weather data
        $yesterdayWeather = Weather::whereDate('created_at', now()->subDays(1)->toDateString())->first();
    
        // Fetch today's weather data
        $todayWeather = Weather::whereDate('created_at', now()->toDateString())->first();
        
        return view('dashboard', compact('yesterdayWeather', 'todayWeather'));
    }
    

    public function summary(){
        return view('summary');
    }

}
