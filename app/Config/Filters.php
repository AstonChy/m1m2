<?php

namespace Config;

use CodeIgniter\Config\Filters as BaseFilters;

class Filters extends BaseFilters
{
    public array $aliases = [];
    public array $globals = ['before' => [], 'after' => []];
    public array $methods = [];
    public array $filters = [];
}
