<?php

declare(strict_types=1);

namespace PHPAbles;

use PHPAbles\{ArrayableInterface, CountableInterface};
use PHPAbles\Json\{JsonableInterface, JsonSerializableInterface};
use Potter\Iterator\Aggregate\IteratorAggregateInterface,
    Illuminate\Support\Enumerable;

interface EnumerableInterface extends Enumerable, ArrayableInterface, 
                                      CountableInterface, IteratorAggregateInterface, 
                                      JsonableInterface, JsonSerializableInterface
{ }
