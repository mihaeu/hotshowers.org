<?php

declare (strict_types = 1);

namespace Mihaeu\Hotshowers\Util;

abstract class AbstractCollection implements Collection
{
    /** @var array */
    protected $collection = [];

    /**
     * {@inheritdoc}
     */
    public function each(\Closure $closure)
    {
        foreach ($this->collection as $item) {
            $closure($item);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mapToArray(\Closure $closure) : array
    {
        return array_map($closure, $this->collection);
    }

    /**
     * {@inheritdoc}
     */
    public function reduce($initial, \Closure $closure)
    {
        return array_reduce($this->collection, $closure, $initial);
    }

    /**
     * {@inheritdoc}
     */
    public function filter(\Closure $closure) : Collection
    {
        $clone = clone $this;
        $clone->collection = array_values(array_filter($this->collection, $closure));

        return $clone;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray() : array
    {
        return $this->collection;
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return count($this->collection);
    }
}
