@extends('layouts.auth')
@section('content')
<div class="mb-[20px]">
    <h1
        class="text-5xl lg:text-6xl tracking-[10px] md:tracking-[30px] xl:tracking-[20px] font-bold text-center">
        KLIMA</h1>
</div>
<div
    class="bg-white w-full md:w-[50%] lg:w-[50%] xl:w-[40%] border border-slate-300 rounded-sm p-5 overflow-hidden shadow-lg">
    <div class=" h-full flex flex-col">
        <div class="text-start">
            <h5 class="text-md font-[500]">Create an account</h5>
        </div>
        <div class="py-[30px]">
            <form autocomplete="off" action="{{route('register')}}" method="post">
                @csrf
                <div class="flex flex-wrap items-center justify-between">
                    <div class="flex flex-col w-full md:w-[49%] my-2 md:my-0">
                        <label for="firstname" class="text-sm font-[500]">Firstname</label>
                        <input type="text" name="firstname" id="firstname"
                            class="border border-gray-400 py-2 px-3 mt-2 rounded-md"
                            placeholder="Enter Firstname" value="{{old('firstname')}}">
                        @error('firstname')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col w-full md:w-[49%] my-2 md:my-0">
                        <label for="lastname" class="text-sm font-[500]">Lastname</label>
                        <input type="text" name="lastname" id="lastname"
                            class="border border-gray-400 py-2 px-3 mt-2 rounded-md"
                            placeholder="Enter Lastname"  value="{{old('lastname')}}">
                            @error('lastname')
                              <p class="text-red-500">{{$message}}</p>
                            @enderror
                    </div>
                </div>
                <div class="flex flex-col my-2">
                    <label for="email" class="text-sm font-[500]">Email</label>
                    <input type="email" name="email" id="email"
                        class="border border-gray-400 py-2 px-3 mt-2 rounded-md" placeholder="Enter Email"  value="{{old('email')}}">
                        @error('email')
                        <p class="text-red-500">{{$message}}</p>
                      @enderror
                </div>
                <div class="flex flex-wrap items-center justify-between">
                    <div class="flex flex-col w-full md:w-[49%] my-2 md:my-0">
                        <label for="firstname" class="text-sm font-[500]">Password</label>
                        <input type="password" name="password" id="password"
                            class="border border-gray-400 py-2 px-3 mt-2 rounded-md" placeholder="Password" >
                   
                    </div>
                    <div class="flex flex-col w-full md:w-[49%] my-2 md:my-0">
                        <label for="password_confirmation" class="text-sm font-[500]">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="border border-gray-400 py-2 px-3 mt-2 rounded-md"
                            placeholder="Confirm Password">
                    </div>
                </div>
                @error('password')
                <p class="text-red-500 my-4 text-center">{{$message}}</p>
              @enderror
                <div class="mt-5 flex justify-center">
                    <button type="submit"
                        class="bg-mainColor text-white w-[250px] py-[6px] text-md font-[600] tracking-wider rounded-full hover:bg-lightColor">Create
                        account</button>
                </div>
            </form> 
            <div class="mt-7 flex justify-center">
                <span>Already have an account? <a href="{{route('login')}}"
                        class="hover:underline font-semibold"> Login
                    </a></span>
            </div>
        </div>
    </div>
</div>
@endsection