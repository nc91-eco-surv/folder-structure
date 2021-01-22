<?php

namespace Modules\Leads\Data\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Modules\Leads\Data\Entities\Lead;

final class LeadCollection extends ResourceCollection {

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = LeadTransformer::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray(Request $request): array {
        return parent::toArray($request);
    }

}