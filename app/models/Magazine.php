<?php
class Magazine extends Eloquent
{
	public function anfictionias()
	{
		return $this->belongsTo('Anfictionia');
	}
	public function arqueologias()
	{
		return $this->belongsTo('Arqueologia');
	}
	public function artes()
	{
		return $this->belongsTo('Arte');
	}
	public function boletines()
	{
		return $this->belongsTo('Boletine');
	}
	public function ciencias()
	{
		return $this->hasOne('Ciencia');
	}
	public function criticas()
	{
		return $this->hasOne('Critica');
	}
	public function economias()
	{
		return $this->hasOne('Economia');
	}
	public function editoriales()
	{
		return $this->belongsTo('Editoriale');
	}
	public function educaciones()
	{
		return $this->hasOne('Educacione');
	}
	public function entrevistas()
	{
		return $this->hasOne('Entrevista');
	}
	public function filologias()
	{
		return $this->hasOne('Filologia');
	}
	public function geopoliticas()
	{
		return $this->hasOne('Geopolitica');
	}
	public function americas()
	{
		return $this->hasOne('America');
	}
	public function historietas()
	{
		return $this->hasOne('Historieta');
	}
	public function literaturas()
	{
		return $this->hasOne('Literatura');
	}
	public function musicas()
	{
		return $this->hasOne('Musica');
	}
	public function participaciones()
	{
		return $this->hasOne('Participacione');
	}
	public function recursos()
	{
		return $this->hasOne('Recurso');
	}
	public function ritos()
	{
		return $this->hasOne('Rito');
	}
	public function humanos()
	{
		return $this->hasOne('Humano');
	}
	public function filosofias()
	{
		return $this->hasOne('Filosofia');
	}
	public function sociologias()
	{
		return $this->hasOne('Sociologia');
	}
	public function dossiers()
	{
		return $this->hasOne('Dossier');
	}
	public function contributors()
	{
	return $this->belongsToMany('Contributor');
	}
}
?>
