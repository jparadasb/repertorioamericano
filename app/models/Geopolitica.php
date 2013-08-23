<?php
class Geopolitica extends Eloquent
{
	public function magazines()
	{
		return $this->belongs_to('Magazine');
	}
	
}
?>
