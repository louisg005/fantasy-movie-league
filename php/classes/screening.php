<?php
/**
 * The screens
 *
 * What's currently playing on the screens
 *
 * @author Louis Gill <lgill7@cnm.edu>
 **/

class Screening {
	/**
	 * screening id; this is the primary key
	 * @var int $screeningId
	 **/
	private $screeningId;
	/**
	 * movie id; this is a foreign key
	 * @var int $movieId
	 **/
	private $movieId;
	/**
	 * the screen slot on which a movie is playing
	 * @var int $screenSlot
	 **/
	private $screenSlot;
	/**
	 * the time that the movie was added
	 * @var DateTime $timeAdded
	 **/
	private $timeAdded;
	/**
	 * the time that the movie was removed
	 * @var DateTime $timeRemoved
	 **/
	private $timeRemoved;

	/**
	 * accessor method for screening id
	 * @return int value of screening id
	 **/
	public function getScreeningId() {
		return($this->screeningId);
	}
	/**
	 * accessor method for movie id
	 * @return int value of movie id
	 **/
	public function getMovieId() {
		return($this->movieId);
	}
	/**
 * accessor method for screen slot
 * @return int value of screen slot
 **/
	public function getScreenSlot() {
		return($this->screenSlot);
	}
	/**
	 * accessor method for time added
	 * @return DateTime value of time added
	 **/
	public function getTimeAdded() {
		return($this->timeAdded);
	}
	/**
	 * accessor method for time removed
	 * @return DateTime value of time removed
	 **/
	public function getTimeRemoved() {
		return($this->timeRemoved);
	}
}


?>