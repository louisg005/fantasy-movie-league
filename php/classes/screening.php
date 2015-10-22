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
	 * @param mixed $newTimeAdded timeAdded as a DateTime object or string (or null to load the current time)
	 * @throws InvalidArgumentException if $newTimeAdded is not a valid object or string
	 * @throws RangeException if $newTimeAdded is a date that does not exist
	 **/
	public function setTimeAdded($newTimeAdded) {
		if ($newTimeAdded === null) {
			$this->timeAdded = new DateTime();
			return;
		}
		try {

		}
	}
	/**
	 * accessor method for time removed
	 * @return DateTime value of time removed
	 **/
	public function getTimeRemoved() {
		return($this->timeRemoved);
	}
	/**
	 * custom filter for mySQL style dates
	 *
	 * Converts a string to a DateTime object or false if invalid. This is designed to be used within a mutator method.
	 *
	 * @param mixed $newDate date to validate
	 * @return mixed DateTime object containing the validated date or false if invalid
	 * @see http://php.net/manual/en/class.datetime.php PHP's DateTime class
	 * @throws InvalidArgumentException if the date is in an invalid format
	 * @throws RangeException if the date is not a Gregorian date
	 **/
	function validateDate($newDate) {
		// base case: if the date is a DateTime object, there's no work to be done
		if(is_object($newDate) === true && get_class($newDate) === "DateTime") {
			return($newDate);
		}

		// treat the date as a mySQL date string: Y-m-d H:i:s
		$newDate = trim($newDate);
		if((preg_match("/^(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})$/", $newDate, $matches)) !== 1) {
			throw(new InvalidArgumentException("date is not a valid date"));
		}

		// verify the date is really a valid calendar date
		$year   = intval($matches[1]);
		$month  = intval($matches[2]);
		$day	= intval($matches[3]);
		$hour   = intval($matches[4]);
		$minute = intval($matches[5]);
		$second = intval($matches[6]);
		if(checkdate($month, $day, $year) === false) {
			throw(new RangeException("date $newDate is not a Gregorian date"));
		}

		// verify the time is really a valid wall clock time
		if($hour < 0 || $hour >= 24 || $minute < 0 || $minute >= 60 || $second < 0  || $second >= 60) {
			throw(new RangeException("date $newDate is not a valid time"));
		}

		// if we got here, the date is clean
		$newDate = DateTime::createFromFormat("Y-m-d H:i:s", $newDate);
		return($newDate);
	}
}
?>