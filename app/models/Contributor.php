<?php
class Contributor extends Eloquent
{
	public function magazines()
	{
		return $this->belongsToMany('Magazine');
	}
}
?>
