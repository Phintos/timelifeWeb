<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
// modo diverso di utilizzare un modello
class Media extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //array in formato jsomn
        return parent::toArray($request);
    }
}
