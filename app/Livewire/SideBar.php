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
        // 'path' => '/finance/masters/chart-of-account',
        // 'paths' => ['/finance/masters/chart-of-account', '/finance/masters/bank-master', '/finance/masters/vendor', '/finance/masters/workorder', '/finance/masters/chequebook'],
        'subModules' => [
          ['moduleName' => 'Charts of Account', 'path' => '/finance/masters/chart-of-account'],
          ['moduleName' => 'Bank Masters', 'path' => '/finance/masters/bank-master'],
          ['moduleName' => 'Vendor Masters', 'path' => '/finance/masters/vendor'],
          ['moduleName' => 'Work Order Entry', 'path' => '/finance/masters/workorder'],
          ['moduleName' => 'Cheque Book Entry', 'path' => '/finance/masters/chequebook'],
        ],
      ],
      [
        'moduleName' => 'Documentation & Record Keeping',
        'icon' => '/svg/home.svg',
        // 'path' => '/finance/masters/chart-of-account',
        // 'paths' => ['/finance/masters/chart-of-account', '/finance/masters/bank-master', '/finance/masters/vendor', '/finance/masters/workorder', '/finance/masters/chequebook'],
        'subModules' => [
          ['moduleName' => 'Bank Masters', 'path' => '/finance/documentation/bank'],
          ['moduleName' => 'Vendor Masters', 'path' => '/finance/documentation/vendor'],
          ['moduleName' => 'Work Order Entry', 'path' => '/finance/documentation/workorder'],
          ['moduleName' => 'Cheque Book Entry', 'path' => '/finance/documentation/chequebook'],
        ],
      ],
    ],
  ];

  public function render()
  {
    return view('livewire.side-bar');
  }
}
