<?php
class Dossier extends Eloquent
{
	public function magazines()
	{
	return $this->belongsToMany('Magazine');
	}
}
?>
