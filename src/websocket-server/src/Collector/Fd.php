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

namespace Hyperf\WebSocketServer\Collector;

class Fd
{
    /**
     * @var int
     */
    public $fd;

    /**
     * @var string
     */
    public $class;

    public function __construct(int $fd, string $class)
    {
        $this->fd = $fd;
        $this->class = $class;
    }
}
