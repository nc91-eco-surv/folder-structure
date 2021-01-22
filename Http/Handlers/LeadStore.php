<?php

namespace Modules\Leads\Http\Handlers;

use App\Http\Controllers\Controller;
use Modules\Leads\Data\Repository\LeadRepository;
use Modules\Leads\Data\Transformers\LeadTransformer;
use Modules\Leads\Http\Requests\LeadRequest;

final class LeadStore extends Controller{

    /**
     * @var \Modules\Leads\Data\Repository\LeadRepository
     */
    private LeadRepository $_lead;

    /**
     * LeadStore constructor.
     *
     * @param \Modules\Leads\Data\Repository\LeadRepository $lead
     */
    public function __construct(LeadRepository $lead) {
        $this->_lead = $lead;
    }

    /**
     * Invokable route handler
     *
     * @param \Modules\Leads\Http\Requests\LeadRequest $request
     * @return mixed
     */
    public function __invoke(LeadRequest $request) {
        // could even extract this further, and emit an event, and inside
        // the http folder, we could have an action folder, that manages the action from the handler
        $lead = $this->_lead->add($request);

        return new LeadTransformer($lead);
    }

}