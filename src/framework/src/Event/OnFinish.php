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

namespace Hyperf\Framework\Event;

use Swoole\Server;

class OnFinish
{
    /**
     * @var Server
     */
    public $server;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var mixed
     */
    public $data;

    public function __construct(Server $server, int $taskId, $data)
    {
        $this->server = $server;
        $this->taskId = $taskId;
        $this->data = $data;
    }
}
