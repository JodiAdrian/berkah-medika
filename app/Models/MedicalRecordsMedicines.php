<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecordsMedicines extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the medicine that owns the MedicalRecordsMedicines
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicine()
    {
        return $this->belongsTo(Medicines::class, 'medicine_id', 'id');
    }
}
