<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'text' => $this->text,
            'img' => $this->img,
            'category' => new CategoryResource(Category::find($this->category_id)->first()),
            'user_id' => $this->user_id,
            'access_id' => $this->access_id,
            'created_at' => $this->created_at,
        ];
    }
}
