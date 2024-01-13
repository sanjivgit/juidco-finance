<div>
    <aside class="text-white w-[279px] h-screen border-r border-gray-300">
        <div class="p-4 flex justify-center">
            <img src="/svg/jhar_logo.svg" alt="Logo" class="w-[99px] h-[99px]">
        </div>


        <details x-data="{ open: false, currentPath: window.location.pathname }" class="rounded overflow-hidden">
            <summary @click="open = !open" class="cursor-pointer p-2 flex items-center justify-center bg-[#12743B]">
                <a href={{$sidebarLinks['path']}}>
                    <div class="bg-white h-[31px] w-[31px] rounded-lg flex justify-center p-1 mr-2">
                        <img src={{$sidebarLinks['icon']}}  alt="main-menu">
                    </div>                                                                                                          
                </a>
                <span class="mr-2 text-[18px]">{{$sidebarLinks['moduleName']}}</span>
                <img src="/svg/white-arrow.svg" x-bind:class="{ 'transform rotate-180': open }" alt="">
            </summary>


            @foreach($sidebarLinks['subModules'] as $subModules)
                    <details class="my-2" x-data="{ open: false, subPath: '{{$subModules['path']}}' }">
                        <summary @click="open = !open" class="mx-3 cursor-pointer p-2 flex items-center justify-between" x-bind:class="{'bg-[#12743B] rounded text-white': currentPath === subPath }">
                            <a href={{$subModules['path']}} class="flex items-center">
                                <div class="bg-[#12743B] h-[31px] w-[31px] rounded-lg flex justify-center p-1 mr-2">
                                    <img src={{$subModules['icon']}} alt="main-menu">
                                </div>                                                                                                          
                                <span x-bind:class="{'text-white': currentPath === subPath }" class="mr-2 text-[#1F2733]">{{$subModules['moduleName']}}</span>
                            </a>
                            <img x-show="currentPath === subPath" src="/svg/white-arrow.svg"  x-bind:class="{ 'transform rotate-180': open }" alt="">
                            <img  x-show="currentPath !== subPath" src="/svg/gray-arrow.svg"  x-bind:class="{ 'transform rotate-180': open }" alt="">
                        </summary>
                        @foreach($subModules['subModules'] as $subModule)
                        <div class="mx-7 flex items-center">
                            <a href={{$subModule['path']}}>
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
