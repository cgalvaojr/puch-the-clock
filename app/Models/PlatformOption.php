<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatformOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform_id',
        'option_name',
        'option_value',
    ];

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}
