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

namespace Hyperf\Consul;

interface SessionInterface
{
    public function create($body = null, array $options = []): ConsulResponse;

    public function destroy($sessionId, array $options = []): ConsulResponse;

    public function info($sessionId, array $options = []): ConsulResponse;

    public function node($node, array $options = []): ConsulResponse;

    public function all(array $options = []): ConsulResponse;

    public function renew($sessionId, array $options = []): ConsulResponse;
}
