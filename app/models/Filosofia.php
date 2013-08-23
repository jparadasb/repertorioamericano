<?php
class Filosofia extends Eloquent
{
	public function filosofias()
	{
		return $this->hasOne('Magazine');
	}
	
}
?>
