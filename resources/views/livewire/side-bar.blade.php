<aside class="text-white w-[279px] h-screen border-r border-gray-300">
    <div class="p-4 flex justify-center">
        <img src="/svg/jhar_logo.svg" alt="Logo" class="w-[99px] h-[99px]">
    </div>
    <details x-data="{ open: false }" class="rounded overflow-hidden">
        <summary @click="open = !open" class="cursor-pointer p-2 flex items-center justify-center bg-[#12743B]">
            <div class="bg-white h-[31px] w-[31px] rounded-lg flex justify-center p-1 mr-2">
                <img src="/svg/home.svg" alt="main-menu">
            </div>
            <span class="mr-2 text-[18px]">Finance Management</span>
            <img src="/svg/demo.svg" x-bind:class="{ 'transform rotate-180': open }" alt="">
        </summary>
        <details class="mx-3">
            <summary class="cursor-pointer p-2 flex items-center justify-center">
                <div class="bg-[#12743B] h-[31px] w-[31px] rounded-lg flex justify-center p-1 mr-2">
                    <img src="/svg/home.svg" alt="main-menu">
                </div>
                <span class="mr-2 text-[#1F2733]">Masters</span>
                <img src="/svg/demo.svg" alt="">
            </summary>
            <p class="p-2">Hidden content goes here.</p>
        </details>
    </details>
</aside>