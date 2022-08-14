<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecords extends Model
{
    use HasFactory;
    protected $guarded =[];

    /**
     * Get the patient that owns the MedicalRecords
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo(Patients::class, 'id_patient', 'id');
    }
    
    /**
     * Get all of the medical_record_medicine for the MedicalRecords
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medical_record_medicines()
    {
        return $this->hasMany(MedicalRecordsMedicines::class, 'medical_record_id', 'id');
    }
}
