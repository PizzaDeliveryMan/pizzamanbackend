<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TaskResource extends Resource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'due_at' => optional($this->due_at)->toATOMString(),
            'is_completed' => $this->is_completed ?? false,
            'author' => new UserResource($this->author),
        ];
    }
}
