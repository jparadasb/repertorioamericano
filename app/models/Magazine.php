<?php
class Magazine extends Eloquent
{
	public function contributors()
	{
	return $this->belongsToMany('Contributor');
	}
	public function sections()
	{
	return $this->belongsToMany('Section');
	}
}
?>
