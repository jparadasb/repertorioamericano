<?php
class Literatura extends Eloquent
{
	public function magazines()
	{
		return $this->belongs_to('Magazine');
	}
	
}
?>
