<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CollectionWithoutPaginate extends ResourceCollection
{
    public function __construct($resource, $resource_class = null)
    {
        if ($resource_class) $this->collects = $resource_class;
        parent::__construct($resource);
    }
}
