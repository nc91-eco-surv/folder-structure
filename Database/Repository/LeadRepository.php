<?php

namespace Modules\Leads\Data\Repository;

use Modules\Leads\Data\Entities\Lead;

class LeadRepository extends iRepository {

    /**
     * @var \Modules\Leads\Data\Entities\Lead
     */
    private Lead $_lead;

    /**
     * LeadRepository constructor.
     *
     * @param \Modules\Leads\Data\Entities\Lead $lead
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