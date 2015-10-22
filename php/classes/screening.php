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
	 * mutator method for screening id
	 *
	 * @param int $newScreeningId new value of screening id
	 * @throws UnexpectedValueException if $newScreeningId is not an integer
	 * @throws RangeException if $newScreeningId is not positive
	 **/
	public function setScreeningId($newScreeningId) {
		$newScreeningId = filter_var($newScreeningId, FILTER_VALIDATE_INT);
		if ($newScreeningId === false) {
			throw(new UnexpectedValueException("screening id is not a valid integer"));
		}
		if ($newScreeningId <= 0) {
			throw(new RangeException("screening id is not positive"));
		}
		$this->screeningId = intval($newScreeningId);
	}
	/**
	 * accessor method for movie id
	 * @return int value of movie id
	 **/
	public function getMovieId() {
		return($this->movieId);
	}
	/**
	 * mutator method for movie id
	 *
	 * @param int $newMovieId new value of movie id
	 * @throws UnexpectedValueException if $newMovieId is not an integer
	 * @throws RangeException if $newMovieId is not positive
	 **/
	public function setMovieId($newMovieId) {
		$newMovieId = filter_var($newMovieId, FILTER_VALIDATE_INT);
		if ($newMovieId === false) {
			throw(new UnexpectedValueException("movie id is not a valid integer"));
		}
		if ($newMovieId <= 0) {
			throw(new RangeException("movie id is not positive"));
		}
		$this->movieId = intval($newMovieId);
	}
	/**
 * accessor method for screen slot
 * @return int value of screen slot
 **/
	public function getScreenSlot() {
		return($this->screenSlot);
	}
	/**
	 * mutator method for screen slot
	 *
	 * @param int $newScreenSlot new value of screen slot
	 * @throws UnexpectedValueException if $newScreenSlot is not an integer
	 * @throws RangeException if $newScreenSlot is not positive
	 **/
	public function setScreenSlot($newScreenSlot) {
		$newScreenSlot = filter_var($newScreenSlot, FILTER_VALIDATE_INT);
		if ($newScreenSlot === false) {
			throw(new UnexpectedValueException("screen slot is not a valid integer"));
		}
		if ($newScreenSlot <= 0) {
			throw(new RangeException("screen slot is not positive"));
		}
		$this->screenSlot = intval($newScreenSlot);
	}
	/**
	 * accessor method for time added
	 * @return DateTime value of time added
	 **/
	public function getTimeAdded() {
		return($this->timeAdded);
	}
	/**
	 * mutator method for time added
	 *
	 * @param DateTime $newTimeAdded new value of time added
	 * @throws UnexpectedValueException
	 */
	/**
	 * accessor method for time removed
	 * @return DateTime value of time removed
	 **/
	public function getTimeRemoved() {
		return($this->timeRemoved);
	}
}

?>