@extends('layouts.app')

@section('content')
<div class="h-screen w-full flex flex-col p-[40px]">
    <div class="flex justify-between items-center mb-[40px]">
        <div>
            <h1 class="text-2xl">Dashboard</h1>
        </div>
        <div>
            <p class="text-md font-[500]">Good Day!</p>
            <p class="text-lg font-bold">{{auth()->user()->firstname}} {{auth()->user()->lastname}}</p>
        </div>
    </div>
    <div class="flex justify-center items-center ">
        <div class="flex flex-col items-center justify-center w-full h-full 50">
            <div class="flex flex-col md:flex-row w-full">
                <div class="flex flex-wrap w-full ">
                    <div
                        class="w-full md:w-[48%] bg-mainColor my-2 mx-0 md:mx-1 flex flex-col px-6 py-5 rounded-lg justify-evenly">
                        <div>
                            <h1 class="text-2xl text-white">Weather</h1>
                        </div>
                    @if ($todayWeather)

                        <div class="flex items-center justify-between my-3">
                            <span class="text-white font-[100]">
                                {{ \Carbon\Carbon::parse($todayWeather->created_at)->now()->format('j F - l') }}
                            </span>
                            <span class="text-white font-[100]">
                                @if($yesterdayWeather)
                                {{ \Carbon\Carbon::parse($yesterdayWeather->created_at)->timezone('Asia/Manila')->format('g:iA') }}
                            @elseif($todayWeather)
                                {{ \Carbon\Carbon::parse($todayWeather->created_at)->timezone('Asia/Manila')->format('g:iA') }}
                            @endif
                            
                            </span>
                        </div>
                    <div class="mt-7">
                        <h1 class="text-3xl font-bold text-white">{{$todayWeather->celsius}}&deg;C</h1>
                        <p class="capitalize text-white text-sm font-[100]">{{$todayWeather->weather_type}}</p>
                    </div>
                    <ul class="mt-[20px]">
                        <li class="text-white text-sm font-[300]">Humidity: {{$todayWeather->humidity}}</li>
                        <li class="text-white text-sm font-[300]">Wind Speed:{{$todayWeather->wind_speed}}</li>
                    </ul>
                    @else
                    <p class="text-2xl text-center text-white font-bold">No weather data available for Today.</p>
                @endif
                    </div>
                    <div class="w-full md:w-[48%] bg-mainColor my-2 mx-0 md:mx-1 rounded-lg px-6 py-7">
                            <div>
                                <h1 class="text-2xl text-white">Air Quality</h1>
                            </div>
                          @if ($todayWeather)
                            <div class="flex flex-col justify-center items-center h-full">
                                <p class="text-7xl text-white font-extrabold">{{$todayWeather->celsius}}</p>
                                <p class="text-white text-sm font-[100] tracking-widest">AQI</p>
                            </div>
                          @else
                          <p class="text-2xl text-center text-white font-bold">No Air Quality data available for Today.</p>                          @endif
                    </div>
                    <div class="w-full md:w-[97%] bg-mainColor my-2 mx-0 md:mx-1 rounded-lg py-5 px-4">
                        <div>
                            <h1 class="text-2xl text-white">Weather Summary</h1>
                        </div>
                        <div class="flex flex-col justify-center h-full py-5">
                                <div class="flex items-center justify-evenly mb-7">
                                    <p class="text-white text-lg w-[33%] text-center">Yesterday's High</p>
                                    <div class="flex items-center justify-center w-[33%]">
                                        <div class="h-[10px] w-[10px] bg-red-500 rounded-full mr-[10px]"></div>
                                        <p class="text-lg text-white ">28&deg;C</p>
                                    </div>
                                    <p class="text-white text-lg w-[33%] text-center">Wind</p>
                                </div>

                                <div class="flex items-center justify-evenly mb-7">
                                    <p class="text-white text-lg w-[33%] text-center">Yesterday's Low</p>
                                    <div class="flex items-center justify-center w-[33%]">
                                        <div class="h-[10px] w-[10px] rounded-full mr-[10px]" style="background-color: #80B362;"></div>
                                        <p class="text-lg text-white ">28&deg;C</p>
                                    </div>
                                    <p class="text-white text-lg w-[33%] text-center">Sunrise: 10:10AM</p>
                                </div>
                       
                                <div class="flex items-center justify-evenly mb-7">
                                    <p class="text-white text-lg w-[33%] text-center">Air Quality</p>
                                    <div class="flex items-center justify-center w-[33%]">
                                        <div class="h-[10px] w-[10px] rounded-full mr-[10px]" style="background: #6296B3;"></div>
                                        <p class="text-lg text-white ">3 mm</p>
                                    </div>
                                    <p class="text-white text-lg w-[33%] text-center">Sunrise: 10:10AM</p>
                                </div>
                       
                                <div class="flex items-center justify-evenly mb-7">
                                    <p class="text-white text-lg w-[33%] text-center">Humidity</p>
                                    <div class="flex items-center justify-center w-[33%]">
                                        <div class="h-[10px] w-[10px] rounded-full mr-[10px]" style="background-color: #80B362;"></div>
                                        <p class="text-lg text-white ">20 Km/h</p>
                                    </div>
                                    <p class="text-white text-lg w-[33%] text-center"></p>
                                </div>
                       
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

</div>
@endsection