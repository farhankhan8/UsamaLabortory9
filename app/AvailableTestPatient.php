<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableTestPatient extends Model
{
    
    public $table = 'available_test_patients';

    protected $fillable = [
        'available_test_id',
        'patient_id',
        'start_time',
        'state',
        'testResult',
      
    ];
     public function pat()
     {
         return $this->belongsTo(Patient::class,'patients');

     }
     public function avail()
     {
         return $this->belongsTo(AvailableTest::class);
     }
     public function av()
     {
         return $this->hasOne(Catagory::class);
     }
}
