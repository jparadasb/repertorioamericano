<?php
class Magazine extends Eloquent
{
	
	public function contributors()
	{
		return $this->belongsToMany('Contributor');
	}
	
	public function sections()
	{
		return $this->belongsToMany('Section')->withPivot('dir_pdf','click_num','section_id','magazine_id');
	}

	public function load_sections()
	{
		$sections_ids=array();
		$sections=$this->sections()->get()->all();
		foreach ($sections as $sec) 
		{
			$sections_ids[]=$sec->section_id;
		}
		$this->sections = Magazine::whereIn( 'id', $sections_ids )->get()->all();
	}

}
?>
