<?php

namespace Modules\Leads\Data\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use \Illuminate\Http\Request;

final class LeadTransformer extends JsonResource {

    /**
     * @param \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray(Request $request): array {
        return [
            'name' => $this->name
        ];
    }
}