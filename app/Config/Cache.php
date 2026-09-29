<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Cache extends BaseConfig
{
    public string $handler = 'file';
    public string $backupHandler = 'dummy';
    public string $storePath = WRITEPATH . 'cache/';
    public bool $cacheQueryString = false;
    public string $prefix = '';
    public int $ttl = 60;
    public array $reservedCharacters = '{}()/\\@:';
}
