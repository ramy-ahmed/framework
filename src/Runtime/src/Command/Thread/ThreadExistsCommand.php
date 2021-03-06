<?php

namespace Kraken\Runtime\Command\Thread;

use Kraken\Runtime\Command\Command;
use Kraken\Runtime\Command\CommandInterface;
use Dazzle\Throwable\Exception\Runtime\RejectionException;

class ThreadExistsCommand extends Command implements CommandInterface
{
    /**
     * @override
     * @inheritDoc
     */
    protected function command($params = [])
    {
        if (!isset($params['alias']))
        {
            throw new RejectionException('Invalid params.');
        }

        return $this->runtime->getManager()->existsThread($params['alias']);
    }
}
