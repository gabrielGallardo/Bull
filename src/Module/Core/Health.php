<?php

/*
 * This file is part of the Bull project.
 * (c) Clivern <hello@clivern.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Module\Core;

use App\Utils\Logger;

/**
 * Health Core Service.
 */
class Health
{
    private $logger;

    /**
     * Class Constructor.
     *
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
}
