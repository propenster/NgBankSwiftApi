<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Bank extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return ([
            'id' => $this->id,
            'bank' => $this->bank,
            'city' => $this->city,
            'branch' => $this->branch,
            'swift_code' => $this->swift_code,
            'sort_code' => $this->sort_code,
        ]);
    }

    public function with($request)
    {
        return([
            "info" => "NgBankSwiftcodes v1.0.0",
            "created_by" => array("Joshua Ajiniran - https://github.com/josh-ajiniran", "Faith Olusegun - https://github.com/propenster"),
            "license" => "FREE",
            "url" => url("https://github.com/propenster"),
            "credits" => "theswiftcodes.com | bank.codes | startcredit.com"
        ]); 
    }
}
