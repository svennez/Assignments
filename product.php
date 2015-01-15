<?php
class Product
	{
	protected $sku;

	public function __construct($sku = 'ABC123'){

	$this->setSku($sku);

	}

	public function setSku($sku){

	$this->sku = $sku;

	}

	public function getSku(){

	return $this->sku;

	}
}