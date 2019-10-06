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

namespace Hyperf\Contract;

interface LengthAwarePaginatorInterface extends PaginatorInterface
{
    /**
     * Create a range of pagination URLs.
     */
    public function getUrlRange(int $start, int $end): array;

    /**
     * Determine the total number of items in the data store.
     */
    public function total(): int;

    /**
     * Get the page number of the last available page.
     */
    public function lastPage(): int;
}
