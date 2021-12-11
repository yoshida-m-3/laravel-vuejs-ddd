<?php

namespace Packages\Applications\Orders\Create;

class OrderCreateInputData
{
    public function __construct(
        public readonly string $orderNumber,
    ) {
    }
}
