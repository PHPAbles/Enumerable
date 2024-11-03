<?php

declare(strict_types=1);

namespace Potter\Enumerable;

use Potter\{
    Arrayable\ArrayableInterface,
    Countable\CountableInterface,
    Iterator\Aggregate\IteratorAggregateInterface};
use Potter\Json\{JsonableInterface, Serializable\JsonSerializableInterface};
use Illuminate\Support\Enumerable;

interface EnumerableInterface extends Enumerable, ArrayableInterface, 
                                      CountableInterface, IteratorAggregateInterface, 
                                      JsonableInterface, JsonSerializableInterface
{ }
