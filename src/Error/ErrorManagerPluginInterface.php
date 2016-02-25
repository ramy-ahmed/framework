<?php

namespace Kraken\Error;

use Kraken\Throwable\Runtime\ExecutionException;

interface ErrorManagerPluginInterface
{
    /**
     * @param ErrorManagerInterface $manager
     * @throws ExecutionException
     */
    public function registerPlugin(ErrorManagerInterface $manager);

    /**
     * @param ErrorManagerInterface $manager
     */
    public function unregisterPlugin(ErrorManagerInterface $manager);
}
