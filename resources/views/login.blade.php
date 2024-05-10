@extends('layouts.auth')
@section('content')
<div class="mb-[60px]">
    <h1
        class="text-5xl lg:text-6xl tracking-[10px] md:tracking-[30px] xl:tracking-[20px] font-bold text-center">
        KLIMA</h1>
</div>
<div
    class="bg-white w-full md:w-[50%] lg:w-[40%] xl:w-[30%] border border-slate-300 rounded-sm p-5 overflow-hidden shadow-lg">
    <div class=" h-full flex flex-col">
        <div class="text-center">
            <h5 class="text-md font-[500]">Welcome to </h5>
            <p class="text-lg font-bold">
                Klima
            </p>
        </div>
        <div class="py-[30px]">
            <form action="{{route('login')}}" method="post" autocomplete="off">
                @csrf
                <div class="flex flex-col">
                    <label for="email" class="text-sm font-[500]">Email</label>
                    <input type="email" name="email" id="email" v-model="formData.email"
                        class="border border-gray-400 py-2 px-3 mt-2 rounded-md" placeholder="Enter Email" value="{{old('email')}}">
                        @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                </div>
                <div class="flex flex-col my-5">
                    <label for="password" class="text-sm font-[500]">Password</label>
                    <input type="password" name="password" id="password" v-model="formData.password"
                        class="border border-gray-400 py-2 px-3 mt-2 rounded-md" placeholder="Enter Password">
                        @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <RouterLink to="#" class="hover:font-bold hover:underline">Forgot Password?</RouterLink>
                </div>
                <div class="mt-5 flex justify-center">
                    <button type="submit"
                        class="bg-mainColor text-white w-[250px] py-[5px]  text-md font-[600] tracking-wider rounded-full hover:bg-lightColor flex items-center justify-center">
                        <span class="text-white">Log
                            In</span>
                    </button>
                </div>

                <div class="flex items-center my-6">
                    <hr class="h-[3px] bg-mainColor flex-1" />
                    <span class="mx-5 font-bold">OR</span>
                    <hr class="h-[3px] bg-mainColor flex-1" />
                </div>
                <a href="{{route('redirectGoogle')}}" role="button" class="flex justify-center">
                    <div
                        class="flex items-center border px-7 py-[4px] rounded-full border-mainColor shadow-sm hover:bg-slate-100 hover:text-white cursor-pointer">
                        <span class="text-md font-500 mr-2 font-[500]">Sign In</span>
                        <img src="{{asset('../assets/google.png')}}" class="h-[20px] w-[20px]" alt="g_img">
                    </div>
                </a>
            </form>
            <div class="mt-7 flex justify-center">
                <span>Don't have an account? <a href="{{route('register')}}"
                        class="hover:underline font-semibold"> Register
                    </a></span>
            </div>
        </div>
    </div>
</div>
@endsection