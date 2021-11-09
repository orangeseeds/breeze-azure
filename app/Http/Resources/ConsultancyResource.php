<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Consultancy;

class ConsultancyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = parent::toArray($request);
        $consultancy = Consultancy::find($data["id"]);
        $data["reviews_count"] = $consultancy->reviews->count();
        unset($data["id"], $data["user_id"]);
        $data["courses"] = $consultancy->courses()->get();
        $data["countries"] = $consultancy->countries()->get()->map->only(['name','country_code']);
        $data["avg_rating"] = $consultancy->reviews()->avg("rating");
        return $data;
    }
}
