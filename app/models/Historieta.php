<?php
class Historieta extends Eloquent
{
	public function magazines()
	{
		return $this->belongs_to('Magazine');
	}
	
}
?>
