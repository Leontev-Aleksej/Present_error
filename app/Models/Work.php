<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Work extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user(): BelongsTo{
        return $this->BelongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->BelongsTo(Category::class);
    }

    
}
