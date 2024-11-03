<?php

declare(strict_types=1);

namespace PHPAbles\Enumerable;

use PHPAbles\{Arrayable\ArrayableInterface, Countable\CountableInterface};
use PHPAbles\Json\{JsonableInterface, Serializable\JsonSerializableInterface};
use Potter\Iterator\Aggregate\IteratorAggregateInterface,
    Illuminate\Support\Enumerable;

interface EnumerableInterface extends Enumerable, ArrayableInterface, 
                                      CountableInterface, IteratorAggregateInterface, 
                                      JsonableInterface, JsonSerializableInterface
{ }
