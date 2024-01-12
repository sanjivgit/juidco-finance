<?php

namespace App\Livewire;

use Livewire\Component;

class MenuList extends Component
{

  public $sidebarLinks = [
    'moduleName' => 'Finance Management',
    'path' => '/',
    'icon' => '/icons/sidebar/finance.svg',
    'subModules' => [
      [
        'moduleName' => 'Masters',
        'icon' => '/icons/sidebar/masters.svg',
        'path' => '/',
        // 'subModules' => [
        //   ['moduleName' => 'Charts of Account', 'path' => '/'],
        //   ['moduleName' => 'Bank Masters', 'path' => '/bank-master'],
        //   ['moduleName' => 'Vendor Masters', 'path' => '/vendor'],
        //   ['moduleName' => 'Work Order Entry', 'path' => '/workorder'],
        //   ['moduleName' => 'Cheque Book Entry', 'path' => '/chequebook'],
        // ],
      ],
      [
        'moduleName' => 'Documentation & Record Keeping',
        'icon' => '/icons/sidebar/document.svg',
        'path' => '/document-and-record',
        // 'subModules' => [
        //   ['moduleName' => 'Bank Masters', 'path' => '/'],
        //   ['moduleName' => 'Vendor Masters', 'path' => '/vendor'],
        //   ['moduleName' => 'Work Order Entry', 'path' => '/workorder'],
        //   ['moduleName' => 'Cheque Book Entry', 'path' => '/chequebook'],
        // ],
      ],
    ],


    // "ABC" => "Abc Aniketb",

    // "subModules" =>["Aniket"]
  ];



  public function render()
  {
    return view('livewire.menu-list');
  }
}
