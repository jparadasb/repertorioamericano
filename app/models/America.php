<?php
class America extends Eloquent
{
	public function magazines()
	{
		return $this->belongs_to('Magazine');
	}
	
}
?>
