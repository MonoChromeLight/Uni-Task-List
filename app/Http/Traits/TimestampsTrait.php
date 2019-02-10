<?php 

namespace App\Http\Traits;
use Carbon\Carbon;

trait TimestampsTrait {
	
	public function detDates() {
		return ['created_at', 'updated_at'];
	}

	public $timestamps = true;

	
	public function getCreatedAtAttribute() {
		return Carbon::parse($this->attributes['created_at'])->diffForHumans();
	}
	public function getUpdatedAtAttribute() {
		return Carbon::parse($this->attributes['updated_at'])->diffForHumans();
	}

	
	

}