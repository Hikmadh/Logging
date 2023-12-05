<?php

/**
 * Copyright © 2023 Hikmadh All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Hikmadh\Log\Model\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

/**
 * Class ApiHandler
 * The Handler class for API logging
 */
class ApiHandler extends Base
{
    /**
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * @var string
     */
    protected $fileName = '/var/log/hikmadh-api-debug.log';
}
