<?php
class Dossier extends Eloquent
{
	public function magazines()
	{
	return $this->belongsTo('Magazine');
	}
}
?>
