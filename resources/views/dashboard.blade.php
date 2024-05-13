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
                        <div class="flex items-center">
                            <img src="{{asset('assets/cl.png')}}" alt="" class="h-[50px] w-[50px]">
                            <h1 class="text-2xl text-white">Temperature</h1>
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
                    <div class="mt-7  text-center">
                        <h1 class="text-6xl font-bold text-white">{{$todayWeather->celsius}}&deg;C</h1>
                        <p class="capitalize text-white text-sm mt-65 font-[100]">{{$todayWeather->weather_type}}</p>
                    </div>
              
                    @else
                    <p class="text-2xl text-center text-white font-bold">No weather data available for Today.</p>
                @endif
                    </div>
                    <div class="w-full md:w-[48%] bg-mainColor my-2 mx-0 md:mx-1 rounded-lg px-6 py-7">
                        <div class="flex items-center">
                            <img src="{{asset('assets/hm.png')}}" alt="" class="h-[50px] w-[50px]">
                                <h1 class="text-2xl text-white">Humidity</h1>
                            </div>
                          @if ($todayWeather)
                            <div class="flex flex-col justify-center items-center h-full">
                                <p class="text-7xl text-white font-extrabold">{{$todayWeather->humidity}}</p>
                            </div>
                          @else
                          <p class="text-2xl text-center text-white font-bold">No Humidity data available for Today.</p>                          @endif
                    </div>
                    <div class="w-full md:w-[97%] bg-mainColor my-2 mx-0 md:mx-1 rounded-lg py-5 px-4">
                        <div class="flex items-center">
                            <img src="{{asset('assets/WR.png')}}" alt="" class="h-[50px] w-[50px]">
                            <h1 class="text-2xl text-white">Weather Records</h1>
                        </div>
                        <div class="flex flex-col justify-center h-full py-5">
                            @if ($todayWeather)
                            <div class="flex items-center justify-evenly mb-5">
                                <p class="text-white text-lg w-[33%] text-center font-bold">TEMPERATURE</p>
                                <div class="flex items-center justify-center w-[33%]">
                                    <p class="text-lg text-white  font-bold ">HUMIDITY</p>
                                </div>
                                <p class="text-white text-lg w-[33%] text-center  font-bold">TIME</p>
                            </div>
                            <div class="flex items-center justify-evenly mb-7">
                                <p class="text-white text-lg w-[33%] text-center">{{$todayWeather->celsius}}</p>
                                <div class="flex items-center justify-center w-[33%]">
                                    <div class="h-[10px] w-[10px] rounded-full mr-[10px]" style="background: #6296B3;"></div>
                                    <p class="text-lg text-white ">{{$todayWeather->humidity}}</p>
                                </div>
                                <p class="text-white text-lg w-[33%] text-center">{{ \Carbon\Carbon::parse($todayWeather->created_at)->timezone('Asia/Manila')->format('g:iA') }}</p>
                            </div>
                          @else
                          <p class="text-2xl text-center text-white font-bold">No Weahter data available for Today.</p>                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection