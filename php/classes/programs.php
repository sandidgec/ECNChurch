<?php

/**
 * Class User for sites program base
 *
 * This class handles programs
 *
 * @author Dana Yazzie redcloudsaboveus01@gmail.com
 */


class Programs implements JsonSerializable {

    /**
     * id for this program; this is the primary key
     * @var int $programsId
     **/
    private $programsId;

    /**
     * access programs id to identify program groups
     * @var int for missionsId
     **/
    private $missionsId;

    /**
     * datetime sets date for programs
     * @datetime for programs $date
     */
    private $date;

    /**
     * descriptions of programs
     * @var string for $description
     */
    private $description;

    /**
     * locations of programs
     * @var string for $description;
     */
    private $location;

    /**
     * names of the programs
     * @var string for $programName;
     */
    private $programName;

    /**
     * sets the time for the program
     * @time for program $time;
     */
    private $time;

    /**
     * accessor method for programsId
     *
     *@return int value of unique programsId
     **/
    public function getProgramsId() {
        return ($this->programsId);
    }

    
    
    
    /**
     * mutator method for the programsId
     *
     * @param int unique value to represent a program $newProgramId
     * @throws InvalidArgumentException for invalid content
     **/
    public function setProgramsId($newProgramsId) {
        //base case: if the programsID is null,
        //this is a new program without a mySQL assigned id (yet)
        if($newProgramsId === null) {
            $this->programsId = null;
            return;
        }
        //verify the Program is valid
        $newProgramsId = filter_var($newProgramsId, FILTER_VALIDATE_INT);
        if(empty($newProgramsId) === true) {
            throw (new InvalidArgumentException ("programsId invalid"));
        }
        $this->programsId = $newProgramsId;
    }


    /**
     * accessor method for access level of identifying programs (missionsId)
     *
     * @return mixed
     **/
    public function getMissionsId() {
        return ($this->missionsId);
    }

    /**
     * mutator method for access level missionsId
     *
     * @param $newMissionsId int
     * @throws InvalidArgumentException if access level is invalid
     **/
    public function setMissionsId($newMissionsId) {
        //verify access level is integer
        $newMissionsId = filter_var($newMissionsId, FILTER_VALIDATE_INT);
        if(empty($newMissionsId) === true) {
            throw new InvalidArgumentException ("Missions Id Invalid");
        }
        $this->missionsId = $newMissionsId;
    }
    

    /**
     * accessor method for date of programs
     *
     * @return string date for programs
     **/
    public function getDate() {
        return ($this->date);
    }

    /**
     * mutator method for Date
     */
    public function setDate(DateTime $newDate) {

        $this->date = $newDate;

    }


    /**
     * accessor method for description of programs
     *
     * @return string of description for programs
     */
    public function getDescription() {
        return ($this->description);
    }

    /**
     * mutator method for description of programs
     *
     * @return string of descriptions for programs
     **/
    public function
    

    /**
     * accessor method for location
     *
     * @return string of locations for programs
     **/
        
    public function getLocation() {
        return ($this->location);
    }

    /**
     * mutator method for locations
     *
     * @param string of locations $newLocation
     */
    public function

    /**
     * accessor method for programName
     *
     * @return string for programName
     **/
    public function getProgramName() {
        return ($this->programName);
    }

    /**
     * mutator for programName
     *
     * @param string programs name $newProgramName
     */
    public function setProgramName($newProgramName) {
        //verify program name is valid
        $newProgramName = filter_var($newProgramName), FILTER_SANITIZE_STRING);
        if(empty($newProgramName) === true) {
            throw new InvalidArgumentException("first name invalid");
        }
        if(strlen($newProgramName) > 32) {
            throw (new RangeException ("Program Name content to large"));
        }
        $this->programName = $newProgramName;
    }

    /**
     * accessor method for Time
     *
     * return string of Time for programs
     */
    public function getTime() {
        return ($this->time);
    }

    /**
     * mutator for time
     */
    public function 









}