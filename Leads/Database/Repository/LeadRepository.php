<?php

namespace Modules\Leads\Data\Repository;

use Modules\Leads\Database\Entities\Lead;
use Modules\Core\Database\Entities\Contracts\iRepository;

class LeadRepository implements iRepository {

    /**
     * @var \Modules\Leads\Database\Entities\Lead
     */
    private Lead $_lead;

    /**
     * LeadRepository constructor.
     *
     * @param \Modules\Leads\Database\Entities\Lead $lead
     */
    public function __construct(Lead $lead) {
        $this->_lead = $lead;
    }

    /**
     * Create the lead
     *
     * @param array $data
     * @return object
     */
    public function add(array $data): object {
        return $this->_lead->create($data);
    }


}