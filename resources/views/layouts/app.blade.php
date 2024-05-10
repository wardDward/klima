<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klima</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main class="flex bg-slate-50">
        <div class="lg:hidden p-3 fixed hover:bg-slate-200 rounded-full  flex justify-center items-center cursor-pointer z-[999999]" id="sidebarToggle">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
        <aside id="sidebar" class="hidden lg:flex flex-col w-full md:w-[33%] lg:w-[18%] fixed inset-y-0 justify-between z-[999] bg-white">

            <div class="flex flex-col">
                <a class="self-center" href="/">
                    <img src="{{asset('assets/klima.png')}}" class="h-[150px] w-[150px]" alt="">
                </a>
                <div class="mt-[50px]">
                    <a href="/" class="py-3 px-6 my-6 rounded-md hover:bg-slate-200 flex items-center">
                        <img src="{{asset('assets/dashboard.png')}}" class="h-[30px] w-[30px]"/>
                        <span class="ml-3 font-[500]">Dashboard</span>
                    </a>
                    <a href="/summary" class="py-3 px-6 my-6 rounded-md hover:bg-slate-200 flex items-center">
                        <img src="{{asset('assets/summary.png')}}" class="h-[30px] w-[30px]"/>
                        <span class="ml-3 font-[500]">Summary</span>
                    </a>
                    <RouterLink to="/" class="py-3 px-6 my-6 rounded-md hover:bg-slate-200 flex items-center">
                        <img src="{{asset('assets/settings.png')}}" class="h-[30px] w-[30px]"/>
                        <span class="ml-3 font-[500]">Settings</span>
                    </RouterLink>
                </div>
            </div>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center p-5 cursor-pointer hover:bg-slate-200">
                    <img src="{{ asset('assets/logout.png') }}" class="h-[30px] w-[30px]"/>
                    <span class="ml-3 font-[500]">Logout</span>
                </button>
            </form>
            
     
        </aside>
        <div class="ml-0 lg:ml-[18%] w-full">
            @yield('content')
        </div>
    </main>

    <script>
      
      document.addEventListener("DOMContentLoaded", function() {
        const sidebarToggle = document.getElementById("sidebarToggle");
        const sidebar = document.getElementById("sidebar");
        let menu = false;

        sidebarToggle.addEventListener("click", function() {
            menu = !menu;
            toggleSidebar();
        });

        function toggleSidebar() {
            if (menu) {
                sidebar.classList.remove("hidden");
                sidebar.classList.add("lg:flex");
                sidebar.classList.add("z-[99999]");
            } else {
                sidebar.classList.add("hidden");
                sidebar.classList.remove("lg:flex");
                sidebar.classList.remove("z-[99999]");
            }
        }

        function handleResize() {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove("hidden");
                sidebar.classList.add("lg:flex");
                sidebar.classList.add("z-[99999]");
            } else {
                toggleSidebar(); // Call toggleSidebar to handle hiding/showing sidebar for smaller screens
            }
        }

        window.addEventListener("resize", handleResize);

        // Call handleResize on page load
        handleResize();
    });
    </script>
</body>
</html>