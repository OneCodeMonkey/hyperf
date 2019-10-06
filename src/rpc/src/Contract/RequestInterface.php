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

namespace Hyperf\Rpc\Contract;

interface RequestInterface
{
    public function getId(): string;

    public function setId(string $id): RequestInterface;

    public function getMethod(): ?string;

    public function setMethod(string $method): RequestInterface;

    public function getParams(): array;

    public function setParams(array $params): RequestInterface;

    public function getExtras(): array;

    public function setExtras(array $extras): RequestInterface;

    public function getFd(): int;

    public function setFd(int $fd): RequestInterface;

    public function getFromId(): int;

    public function setFromId(int $fromId): RequestInterface;

    public function getData(): string;

    public function setData(string $data): RequestInterface;
}
