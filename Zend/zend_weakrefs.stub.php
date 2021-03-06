<?php

/** @generate-function-entries */

final class WeakReference
{
    public function __construct() {}

    public static function create(object $object): WeakReference {}

    public function get(): ?object {}
}

final class WeakMap implements ArrayAccess, Countable, IteratorAggregate
{
    /**
     * @param object $object
     * @return mixed
     */
    public function offsetGet($object) {}

    /**
     * @param object $object
     * @param mixed $value
     */
    public function offsetSet($object, $value): void {}

    /** @param object $object */
    public function offsetExists($object): bool {}

    /** @param object $object */
    public function offsetUnset($object): void {}

    public function count(): int {}

    public function getIterator(): Iterator {}
}
