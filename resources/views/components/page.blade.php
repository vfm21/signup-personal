<!DOCTYPE html>
<html lang="en" class="w-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="/resources/js/app.js"></script>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="bg-columbia-blue dark:bg-dark-columbia-blue">
    {{ $popup }}
    <header class="mt-[57px] flex flex-row justify-center items-center gap-[25px] w-full">
        <img class="w-[100px] h-[100px]" src="https://uip.ph/img/uip-icons/UIP_transparent_squared.png">
        <h1 class="text-[40px] font-montserrat font-bold text-yinmn-blue text-center">Sign Up</h1>
    </header>
    <section class="h-full">
        {{ $slot }}
    </section>
    <footer class="bg-yinmn-blue w-full h-full">
        <div class="justify-center flex flex-row">
            <div class="flex flex-row w-full">
                <div class="flex flex-col  justify-center w-full items-center">
                    <h3 class="text-ghost-white text-[24px] pt-[30px] font-montserrat font-bold">Already have an account?</h3>
                    <div class="flex w-full justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <button class="border-[2px] w-[173px] h-[50px] rounded-[6px] mt-[40px] justify-center">
                                <h3 class="text-ghost-white  font-medium font-montserrat text-[16px]">Sign In</h3>
                            </button>
                            <button class="border-[2px] w-[193px] h-[50px] rounded-[6px] mt-[30px] mb-[40px] flex flex-row items-center p-[10px]">
                                <div class="flex flex-row gap-[5px] items-center">
                                    <div class="items-center">
                                        <svg class="h-[40px] text-ghost-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                            <path d="M 9.6777344 1.515625 A 0.50005 0.50005 0 0 0 9.28125 2.3046875 L 10.759766 4.4414062 C 9.3401698 5.5292967 8.3458783 7.145415 8.0800781 9 L 21.919922 9 C 21.654122 7.145415 20.65983 5.5292967 19.240234 4.4414062 L 20.71875 2.3046875 A 0.50005 0.50005 0 0 0 20.306641 1.515625 A 0.50005 0.50005 0 0 0 19.896484 1.7363281 L 18.40625 3.8925781 C 17.398252 3.3277312 16.238794 3 15 3 C 13.761206 3 12.601748 3.3277312 11.59375 3.8925781 L 10.103516 1.7363281 A 0.50005 0.50005 0 0 0 9.6777344 1.515625 z M 12 5 C 12.552 5 13 5.448 13 6 C 13 6.552 12.552 7 12 7 C 11.448 7 11 6.552 11 6 C 11 5.448 11.448 5 12 5 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 5 11 C 4.448 11 4 11.448 4 12 L 4 20 C 4 20.552 4.448 21 5 21 C 5.552 21 6 20.552 6 20 L 6 12 C 6 11.448 5.552 11 5 11 z M 8 11 L 8 21 C 8 22.105 8.895 23 10 23 L 10 26.5 C 10 27.328 10.672 28 11.5 28 C 12.328 28 13 27.328 13 26.5 L 13 23 L 17 23 L 17 26.5 C 17 27.328 17.672 28 18.5 28 C 19.328 28 20 27.328 20 26.5 L 20 23 C 21.105 23 22 22.105 22 21 L 22 11 L 8 11 z M 25 11 C 24.448 11 24 11.448 24 12 L 24 20 C 24 20.552 24.448 21 25 21 C 25.552 21 26 20.552 26 20 L 26 12 C 26 11.448 25.552 11 25 11 z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-ghost-white font-medium w-full font-montserrat text-left text-[16px] leading-tight">Get our Android App</h3>
                            </button>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="absolute w-full h-[260px] flex items-end justify-end">
                <div class="flex flex-col gap-[14px] items-end justify-right p-[16.25px] cursor-pointer text-ghost-white">
                    <svg class="h-[45px] w-[45px]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><title>arrow-up-circle-outline</title><path d="M13,18H11V10L7.5,13.5L6.08,12.08L12,6.16L17.92,12.08L16.5,13.5L13,10V18M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" /></svg>
                    <img class="h-[45px] w-[45px]" src="https://www.svgrepo.com/show/331368/discord-v2.svg">
                </div>
            </div>
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>