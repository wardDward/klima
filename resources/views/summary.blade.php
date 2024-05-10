@extends('layouts.app')

@section('content')
<div class="h-screen w-full flex flex-col p-5 md:p-[40px]">
    <div class="flex justify-between items-center mt-0 md:mt-[40px] mb-6 md:md-0">
        <div>
            <h1 class="text-2xl">Summary</h1>
        </div>
        <div>
            <p class="text-md font-[500]">Good Day!</p>
            <p class="text-lg font-bold">{{auth()->user()->firstname . " " . auth()->user()->lastname}}</p>
        </div>
    </div>

    <div class="flex items-center h-full p-0 md:p-20 flex-col">
        <form class="flex items-center justify-evenly flex-wrap w-full mb-[30px]">
            <select name="year" id="year"
                class="border w-[20%] bg-slate-20 py-2 px-2 border-gray-400 rounded-full ">
                <option value="">Year</option>
            </select>
            <select name="month" id="month"
                class="border w-[20%] bg-slate-20 py-2 px-2 border-gray-400 rounded-full">
                <option value="">Month</option>
            </select>
            <select name="day" id="day" class="border w-[20%] bg-slate-20 py-2 px-2 border-gray-400 rounded-full">
                <option value="">Day</option>
            </select>
        </form>
        <div class="grid grid-cols-span-1 md:grid-cols-2 lg:grid-cols-3 w-full">
            <div class="m-2 p-[20px] rounded-md flex flex-col  items-center h-[250px]" style="background: #80393C;
            ">
                <h3 class="text-white text-lg font-[300]">
                    Yesterday's High
                </h3>
                <div class="flex justify-center items-center h-full">
                    <div class="text-white text-5xl font-bold">
                        27&deg;C
                    </div>
                </div>
            </div>
            <div class="m-2 p-[20px] rounded-md flex flex-col  items-center h-[250px]" style="background: #80B362;
            ">
                <h3 class="text-white text-lg font-[300]">
                    Yesterday's Low
                </h3>
                <div class="flex justify-center items-center h-full">
                    <div class="text-white text-5xl font-bold">
                        21&deg;C
                    </div>
                </div>
            </div>
            <div class="m-2 p-[20px] rounded-md flex flex-col  items-center h-[250px]" style="background: #6296B3;
            ">
                <div>
                    <h3 class="text-white text-lg font-[300] text-center">
                        Sunrise Time
                    </h3>
                    <div class="flex justify-center items-center h-full">
                        <div class="text-white text-5xl font-bold">
                            5:32 AM
                        </div>
                    </div>
                </div>
                <div class="mt-[30px]">
                    <h3 class="text-white text-lg font-[300] text-center">
                        Sunset
                    </h3>
                    <div class="flex justify-center items-center h-full">
                        <div class="text-white text-5xl font-bold">
                            6:12 PM
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-2 border-[2px] p-2 border-gray-400 rounded-md h-[250px]">
                <h3 class="text-mainColor text-lg font-[300] text-center ">
                    Air Quality
                </h3>
                <div class="flex justify-center items-center h-[85%]">
                    <div class="text-mainColor text-5xl font-bold">
                        6:12 AQI
                    </div>
                </div>
            </div>
            <div class="m-2 border-[2px] p-2 border-gray-400 rounded-md  h-[250px]">
                <h3 class="text-mainColor text-lg font-[300] text-center ">
                    Humidity
                </h3>
                <div class="flex justify-center items-center h-[85%]">
                    <div class="text-mainColor text-5xl font-bold">
                       75%
                    </div>
                </div>
            </div>
            <div class="m-2 border-[2px] p-2 border-gray-400 rounded-md  h-[250px]">
                <h3 class="text-mainColor text-lg font-[300] text-center ">
                    WInd
                </h3>
                <div class="flex justify-center items-center h-[85%]">
                    <div class="text-mainColor text-5xl font-bold">
                       20 Km/h
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection