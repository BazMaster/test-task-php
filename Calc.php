<?php

/**
 * Class Calc
 */
class Calc {
	/**
	 * @var int
	 */
	public $result = 0;


	/**
	 * @param $var
	 * @return int
	 */
	public function add($var){
        return $this->result = $this->result + (int) $var;
    }

	/**
	 * @param $var
	 * @return int
	 */
	public function minus($var){
        return $this->result = $this->result - (int) $var;
    }

	/**
	 * @param $digit
	 * @return float|int
	 */
	public function divide($digit){
        return $this->result = $this->result * (int) $digit;
    }

	/**
	 * @param $var
	 * @return float|int
	 */
	public function multiply($var){
        return $this->result = $this->result *(int) $var;
    }

	/**
	 * @param $var
	 */
	public function round($var){
        echo $this->result = round((int) $var);
    }
}