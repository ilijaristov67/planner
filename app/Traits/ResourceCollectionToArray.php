<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

trait ResourceCollectionToArray
{

    /** @var Collection */
    protected Collection $collection;

    /** @var array<string,mixed> */
    protected array $pagination;
    public function toArray(Request $request): array
    {
        return [
            'page' => $this->pagination['page'] ?? null,
            'limit' => $this->pagination['limit'] ?? null,
            'total_records' => $this->pagination['total_records'] ?? null,
            'total_pages' => $this->pagination['total_pages'] ?? null,
            'filter' => $this->pagination['filter'] ?? null,
            'state' => $this->pagination['state'] ?? null,
            'data' => $this->collection,
        ];
    }
}
