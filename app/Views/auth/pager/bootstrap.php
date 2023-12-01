<?php

namespace App\Views\Pager;

use CodeIgniter\Pager\PagerRendererInterface;

class BootstrapPagerRenderer implements PagerRendererInterface
{
    public function render(\CodeIgniter\Pager\Pager $pager)
    {
        return $pager->links('default', 'bootstrap');
    }
}
