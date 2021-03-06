<?php

namespace Lester\EloquentSalesForce;

class TestTask extends Model
{
	protected $table = 'Task';
	
	public function lead()
	{
		return $this->belongsTo(TestLead::class, 'WhoId');
	}
}