<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_Description extends Model{

	protected $table = 'job_descriptions';
    protected $primaryKey = 'id_job';
	protected $guarded  = ['created_at', 'updated_at'];

	public function employee(){

        return $this->belongsTo('App\Employee', 'id_karyawan');
    }
}
