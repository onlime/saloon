<?php

declare(strict_types=1);

namespace Saloon\Traits\Connector;

use Saloon\Config;
use Saloon\Contracts\Sender;

trait HasSender
{
    /**
     * Specify the default sender
     *
     * @var string
     */
    protected string $defaultSender = '';

    /**
     * The request sender.
     *
     * @var Sender
     */
    protected Sender $sender;

    /**
     * Manage the request sender.
     *
     * @return Sender
     */
    public function sender(): Sender
    {
        return $this->sender ??= $this->defaultSender();
    }

    /**
     * Define the default request sender.
     *
     * @return Sender
     */
    protected function defaultSender(): Sender
    {
        if (empty($this->defaultSender)) {
            return Config::getDefaultSender();
        }

        return new $this->defaultSender;
    }
}
