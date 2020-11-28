<?php

namespace App\Http\Requests;

use JbGlobal\Requests\Request as JbRequest;

class Request extends JbRequest
{
    // public function rules()
    // {
    //     parent::rules();

    //     $regras = [
    //         'id' => ['integer'],
    //     ];

    //     $regras_selecionadas = [];
    //     switch ($this->getMetodo()) {
    //         case 'atualizar':
    //             $regras_selecionadas['id'] = array_merge($regras['id'], ["required"]);
    //             break;
    //     }
    //     return $regras_selecionadas;
    // }
}
