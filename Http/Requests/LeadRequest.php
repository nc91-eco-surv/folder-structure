<?php


namespace Modules\Leads\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest {

    /**
     * The rules for validating a lead request
     *
     * @return string[]
     */
    public function rules(): array {
        return match($this->method) {
            'post'  => $this->_post(),
            'put'   => $this->_put(),
            'patch' => $this->_patch(),
        };
    }

    /**
     * Rules to validate the post request
     *
     * @return string[]
     */
    private function _post(): array {
        return [
            'name' => 'requred'
        ];
    }

    /**
     * Rules to validate the put request
     *
     * @return string[]
     */
    private function _put(): array {
        return [
            'name' => 'requred'
        ];
    }

    /**
     * Rules to validate the patch request
     *
     * @return string[]
     */
    private function _patch(): array {
        return [
            'name' => 'requred'
        ];
    }

}