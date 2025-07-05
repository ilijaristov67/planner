<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;

class BaseResourceCollection extends ResourceCollection
{
    public array $pagination = [];

    public function __construct($resource, string|array|null $filter = null, ?string $state = null)
    {
        if ($resource instanceof LengthAwarePaginator) {
            $this->pagination = [
                'page' => $resource->currentPage(),
                'limit' => $resource->perPage(),
                'total_records' => $resource->total(),
                'total_pages' => $resource->lastPage(),
                'filter' => $filter ?? '',
                'state' => $state ?? '',
            ];
        }

        parent::__construct($resource);
    }

    public function withResponse($request, $response): void
    {
        $data = $response->getData(true);
        unset($data['meta'], $data['links']);

        if (count($this->pagination)) {
            $data = array_merge($this->pagination, $data['data']);
        }

        $response->setData($data);
    }
}
