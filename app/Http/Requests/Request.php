<?php

namespace App\Http\Requests;

use JbGlobal\Requests\Request as RequestsRequest;

class Request extends RequestsRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->request->remove('_token');

        return [
            //
        ];
    }
}
