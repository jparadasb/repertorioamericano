<?php
class Video extends Eloquent
{
	function urlvideo()
	{

	
	$video = $this;
		if($video !== null)
		{
			$url=$video->url;
			$url=(string)$url;
			$orig=array();
			$nuev=array();
			$orig[0]='/watch?v=/';
			$nuev[0]='/embed/';
			$url=preg_replace($orig,$nuev,$url);

			$urlTag='<iframe width="100%" height="330" src="'.$url.'" frameborder="0" allowfullscreen=""></iframe>';
		}
		else
		{
			$urlTag='<div with="100%" height="330"> Aqui va un video</div>';
		}
		return $urlTag;

	}
	
}
?>
