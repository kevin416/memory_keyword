<?php

namespace Yepos\Keyword\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoryKeyword extends Model
{
    use HasFactory;

    protected $table = 'memory_keywords';
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }


}
