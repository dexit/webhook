<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Webhook\Server;

use Symfony\Component\HttpClient\HttpOptions;
use Symfony\Component\RemoteEvent\RemoteEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RequestConfiguratorInterface
{
    public function configure(RemoteEvent $event, string $secret, HttpOptions $options): void;
}
