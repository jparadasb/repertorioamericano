<?php
class Editoriale extends Eloquent
{
	public function magazines()
	{
		return $this->hasOne('Magazine');
	}
	
}
?>
