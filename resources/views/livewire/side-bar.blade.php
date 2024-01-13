<div>
    <aside class="text-white w-[279px] h-screen border-r border-gray-300">
        <div class="p-4 flex justify-center">
            <img src="/svg/jhar_logo.svg" alt="Logo" class="w-[99px] h-[99px]">
        </div>


        <details x-data="{ open: false, currentPath: window.location.pathname }" class="rounded overflow-hidden">
            <summary @click="open = !open" class="cursor-pointer p-2 flex items-center justify-center bg-[#12743B]">

                <div class="bg-white h-[31px] w-[31px] rounded-lg flex justify-center p-1 mr-2">
                    <img src={{$sidebarLinks['icon']}} alt="main-menu">
                </div>

                <span class="mr-2 text-[18px]">{{$sidebarLinks['moduleName']}}</span>
                <img src="/svg/white-arrow.svg" x-bind:class="{ 'transform rotate-180': open }" alt="">
            </summary>

            @foreach($sidebarLinks['subModules'] as $subModules)
            <details class="my-2" x-data="{ open: false }">
                <summary @click="open = !open" class="mx-3 cursor-pointer p-2 flex items-center justify-between" x-bind:class="{'bg-[#12743B] rounded text-white': open}">
                    <div class="flex items-center">
                        <div class="bg-[#12743B] h-[31px] w-[31px] rounded-lg flex justify-center p-1 mr-2">
                            <img class="w-full h-full object-contain" src={{$subModules['icon']}} alt="main-menu">
                        </div>
                        <span x-bind:class="{'text-white': open }" class="mr-2 text-[#1F2733]">{{$subModules['moduleName']}}</span>
                    </div>
                    <img x-show="open" src="/svg/white-arrow.svg" x-bind:class="{ 'transform rotate-180': open }" alt="">
                    <img x-show="!open" src="/svg/gray-arrow.svg" x-bind:class="{ 'transform rotate-180': open }" alt="">
                </summary>
                @foreach($subModules['subModules'] as $subModule)
                <div x-data="{ subPath: '{{$subModule['path']}}' }" class="mx-7 flex items-center">
                    <a href={{$subModule['path']}} class="mt-2 pl-8">
                        {{-- <img src={{$subModule['icon']}} alt=""> --}}
                        <span class="text-black">{{$subModule['moduleName']}}</span>
                    </a>
                </div>
                @endforeach
            </details>
            @endforeach
        </details>
    </aside>
</div>