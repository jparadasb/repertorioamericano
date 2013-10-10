<?php
class Section extends Eloquent
{
	public function magazines()
	{
		return $this->belongsToMany('Magazine')->withPivot('dir_pdf','click_num','section_id');
	}
}
?>
