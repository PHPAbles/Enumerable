<?php

declare(strict_types=1);

namespace PHPAbles;

use Illuminate\Support\Enumerable, Potter\Iterator\Aggregate\IteratorAggregateInterface;
use PHPAbles\Arrayable\ArrayableInterface;
use PHPAbles\Json\{JsonableInterface, JsonSerializableInterface};

interface EnumerableInterface extends Enumerable, ArrayableInterface, 
                                      CountableInterface, IteratorAggregateInterface, 
                                      JsonableInterface, JsonSerializableInterface
{ }
