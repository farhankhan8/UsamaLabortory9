<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableTest extends Model
{
    public $table = 'available_tests';

    protected $fillable = [
        'catagory_id',
        'name',
        'testFee',
        'initialNormalValue',
        'finalNormalValue',
        'firstCriticalValue',
        'finalCriticalValue',
        'units',
    ];
    public function catagory()
    {
        return $this->belongsTo(Catagory::class);

    }
    // public function Tag()
    // {
    //     return $this->hasMany(Tag::class);
    // }
    public function patient()
    {
        return $this->belongsToMany(Patient::class,'available_test_patients')->withPivot('available_test_id','patient_id');
    }
      public function available()
      {
          return $this->belongsTo(TestPerformed::class,'available_test_id','id');
      }

}
