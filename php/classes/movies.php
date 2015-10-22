<?php

/**
 * The available movies
 *
 * The movies available to the user and their associated data
 *
 * @author Louis Gill <lgill7@cnm.edu>
 **/
class Movies {
	/**
	 * movieId; this is the primary key
	 **/
	private $movieId;
	/**
	 * the title of the movie
	 **/
	private $movieTitle;
	/**
	 * the cost (in Bux) to the user
	 **/
	private $buxCost;

	/**
	 * constructor for this movie
	 *
	 * @param int $newMovieId new value for movie id
	 * @param string $newMovieTitle new value for movie title
	 * @param int $newBuxCost new value for bux cost
	 * @throws UnexpectedValueException if any of the parameters are invalid
	 **/
	public function __construct($newMovieId, $newMovieTitle, $newBuxCost) {
		try {
			$this->setMovieId($newMovieId);
			$this->setMovieTitle($newMovieTitle);
			$this->setBuxCost($newBuxCost);
		} catch(UnexpectedValueException $exception) {
			//rethrow to the caller
			throw(new UnexpectedValueException("Unable to construct movie", 0, $exception));
		}
	}

	/**
	 * accessor method for movieId
	 *
	 * @return int value of movieId
	 **/
	public function getMovieId() {
		return ($this->movieId);
	}

	/**
	 * mutator method for movie id
	 *
	 * @param mixed $newMovieId new value of movie id
	 * @throws UnexpectedValueException if $newMovieId is not an integer
	 * @throws RangeException if $newMovieId is not positive
	 **/
	public function setMovieId($newMovieId) {
		if($newMovieId === null) {
			$this->movieId = null;
			return;
		}
		//verify the movie id is valid
		$newMovieId = filter_var($newMovieId, FILTER_VALIDATE_INT);
		if($newMovieId === false) {
			throw(new UnexpectedValueException("movie id is not a valid integer"));
		}
		if($newMovieId <= 0) {
			throw(new RangeException("movie id is not positive"));
		}
		//convert and store the movie id
		$this->movieId = intval($newMovieId);
	}

	/**
	 * accessor method for movie title
	 *
	 * @return string value of movie title
	 **/
	public function getMovieTitle() {
		return ($this->movieTitle);
	}

	/**
	 * mutator method for movie title
	 *
	 * @param string $newMovieTitle new value of movie title
	 * @throws UnexpectedValueException if $newMovieTitle is not a string or is insecure
	 **/
	public function setMovieTitle($newMovieTitle) {
		$newMovieTitle = trim($newMovieTitle);
		$newMovieTitle = filter_var($newMovieTitle, FILTER_SANITIZE_STRING);
		if(empty($newMovieTitle) === true) {
			throw(new UnexpectedValueException("movie title is empty or insecure"));
		}
		$this->movieTitle = $newMovieTitle;
	}

	/**
	 * accessor method for bux cost
	 *
	 * @return int value of bux cost
	 **/
	public function getBuxCost() {
		return ($this->buxCost);
	}

	/**
	 * mutator method for bux cost
	 *
	 * @param int $newBuxCost new value of bux cost
	 * @throws UnexpectedValueException if $newBuxCost is not an integer
	 * @throws RangeException if bux cost is not positive
	 **/
	public function setBuxCost($newBuxCost) {
		$newBuxCost = filter_var($newBuxCost, FILTER_VALIDATE_INT);
		if($newBuxCost === false) {
			throw(new UnexpectedValueException("bux cost is not a valid integer"));
		}
		if($newBuxCost <= 0) {
			throw(new RangeException("bux cost is not positive"));
		}
		$this->buxCost = intval($newBuxCost);
	}

	/**
	 * toString() magic method
	 *
	 * @return string HTML formatted movie
	 **/
	public function __toString() {
		//create an HTML formatted movie
		$html = "<p>$this->buxCost</p>";
		return ($html);
	}
}