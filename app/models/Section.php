<?php
class Section extends Eloquent
{
	public function magazines()
	{
		return $this->belongsToMany('Magazine');
	}
}
?>
