<?php

/**
 *Some kind of class!
 *
 * A more detailed description of the class!
 *
 * @author Louis Gill <lgill7@cnm.edu>
 **/
class Screening {
	/**
	 *screeningId; this is the primary key
	 **/
	private $screeningId;
	/**
	 * movieId; this is a foreign key
	 **/
	private $movieId;
	/**
	 * the numbered location of the selected movie
	 **/
	private $screenSlot;
	/**
	 * the date/time that the movie was added to the entity
	 **/
	private $timeAdded;
	/**
	 * the date/time that the movie was removed from the entity
	 **/
	private $timeRemoved;

	/**
	 * accessor method for screeningId
	 *
	 * @return int value of screeningId
	 **/
	public function getScreeningId() {
		return ($this->screeningId);
	}

	/**
	 * mutator method for screeningId
	 *
	 * @param int
	 */
}

?>