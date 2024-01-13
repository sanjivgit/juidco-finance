<?php

namespace App\Livewire;

use Livewire\Component;

class SideBar extends Component
{

    public $sidebarLinks = [
        'moduleName' => 'Finance Management',

        'icon' => '/svg/home.svg',
        'subModules' => [
            [
                'moduleName' => 'Masters',
                'icon' => '/svg/home.svg',

                'subModules' => [
                    ['moduleName' => 'Charts of Account', 'path' => '/'],
                    ['moduleName' => 'Bank Masters', 'path' => '/bank-master'],
                    ['moduleName' => 'Vendor Masters', 'path' => '/vendor'],
                    ['moduleName' => 'Work Order Entry', 'path' => '/workorder'],
                    ['moduleName' => 'Cheque Book Entry', 'path' => '/chequebook'],
                ],
            ],
            [
                'moduleName' => 'Documentation & Record Keeping',
                'icon' => '/svg/home.svg',
                'path' => '/document-and-record',
                'subModules' => [
                    ['moduleName' => 'Bank Masters', 'path' => '/'],
                    ['moduleName' => 'Vendor Masters', 'path' => '/vendor'],
                    ['moduleName' => 'Work Order Entry', 'path' => '/workorder'],
                    ['moduleName' => 'Cheque Book Entry', 'path' => '/chequebook'],
                ],
            ],
        ],
    ];

    public function render()
    {
        return view('livewire.side-bar');
    }
}
