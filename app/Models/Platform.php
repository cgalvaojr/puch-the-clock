<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function options()
    {
        return $this->hasMany(PlatformOption::class);
    }

    public function clockTimes()
    {
        return $this->hasMany(ClockTime::class);
    }

    public function clockInHistories()
    {
        return $this->hasMany(ClockInHistory::class);
    }
}
