<?php

namespace Saloon\Contracts\Body;

interface MergeableBody
{
    /**
     * Merge another array into the repository
     *
     * @param array<mixed, mixed> ...$arrays
     * @return $this
     */
    public function merge(array ...$arrays): static;
}
