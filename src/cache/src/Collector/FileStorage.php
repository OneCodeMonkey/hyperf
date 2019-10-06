<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE.md
 */

namespace Hyperf\Cache\Collector;

class FileStorage
{
    protected $data;

    protected $expiredTime;

    public function __construct($data, $ttl)
    {
        $this->data = $data;
        if (is_numeric($ttl)) {
            $this->expiredTime = time() + $ttl;
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function isExpired(): bool
    {
        if (is_null($this->expiredTime)) {
            return false;
        }

        return time() > $this->expiredTime;
    }
}
