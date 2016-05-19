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
     * @var int for $missionsId
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
     * @var string for $location;
     */
    private $location;

    /**
     * names of the programs
     * @var string for $programName;
     */
    private $programName;

    /**
     * sets the time for the program
     * @var DateTime for program $time;
     */
    private $time;

    public function __construct($newProgramsId, $newMissionsId, $newDate, $newDescription,
                                $newLocation, $newProgramName,$newTime)
    {
        try {
            $this->setProgramsId(newProgramsId);
            $this->setMissionsId($newMissionsId);
            $this->setDate($newDate);
            $this->setDescription($newDescription);
            $this->setLocation($newLocation);
            $this->setProgramName($newProgramName);
            $this->setTime($newTime);
        } catch (InvalidArgumentException $invalidArgument) {
            //rethrow the exception to the caller
            throw(new InvalidArgumentException($invalidArgument-getMessage(), 0, $invalidArgument));
        } catch (RangeException $range) {
            //rethrow the exception to the caller
            throw (new RangeException($range->getMessage(), 0, $range));
        } catch (Exception $exception) {
            //rethrow generic exception
            throw(new Exception($exception->getMessage(), 0, $exception));
        }
    }

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
    public function setDescription($newDescription) {

        $newDescription = filter_var ($newDescription, FILTER_SANITIZE_STRING);

        if($newDescription === false) {
            throw (new InvalidArgumentException("New description is insecure or empty"));
        }
        $this->description = $newDescription;
    }

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
    public function setLocation($newLocation) {

        $newLocation = filter_var ($newLocation, FILTER_SANITIZE_STRING);

        if($newLocation === false) {
            throw( new InvalidArgumentException("New Location is insecure or empty"));
        }
        $this->location = $newLocation;
    }

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
    public function setTime($newTime)  {
        $newTime = filter_var ($newTime, FILTER_SANITIZE_STRING);

        if($newTime === false) {
            throw( new InvalidArgumentException("New Time is insecure or empty"));
        }
        $this->time = $newTime;
}
}


/**
 * Inserts Programs into MYSQL
 *
 * Inserts this programsId in intervals
 * @param PDO $pdo connection to
 **/
public function insert(PDO &$pdo) {
    //make sure program doesnt already exist
    if($this->programsId !-- null) {
        throw (new PDOException("existing program"));
    }
    //create query template
    $query = "INSERT INTO programs(programsId, missionsId, date, description, location, programName, time)
      VALUES (:programsId, :missionsId, :date, :description, :location, :programName, :time)";
    $statement = $pdo->prepare($query);
    // bind the variables to the place holders in the template
    $parameters = array("programsId" => $this->programsId, "missionsId" => $this->missionsId, "date" => $this->date,
        "description" => $this->description, "location" => $this->location, "programName" => $this->programName, "time" => $this->time);
    $statement->execute($parameters);
    //update null programsId with what mySQL just gave us
    $this->programsId = intval($pdo->lastInsertId());
}

/**
 * Deletes Programs from mySQl
 *
 * Delete PDO to delete programsId
 * @param PDO $pdo
 **/
public function delete(PDO &$pdo) {
    //enforce the bullletin is not null
    if($this->programsId ===null) {
        throw(new PDOException("unable to delete program that does not exist"));
    }
    //create query template
    $query = "DELETE FROM programs WHERE programsId = :programsId";
    $statement = $pdo->prepare($query);
//bind the member variables to the place holder in the template
$parameters = array("programsId" => $this->programsId);
$statement->execute($parameters);
}

/**
 * updates Message in mySQL
 *
 * Update PDO to update programs class
 * @param PDO $pdo pointer to PDO connection, by reference
 **/
public function update(PDO $pdo) {
    // create query template
    $query = "UPDATE programs SET programsId = :programsId, missionsId = :missionsId, date = :date, 
      description = :description, location = :location, programName = :programName, 
      time = :time  WHERE programsId = :programsId";
    $statement = $pdo->prepare($query);
    // bind the member variables
    $parameters = array("programsId" => $this->programsId, "missionsId" => $this->missionsId,
        "date" => $this->date, "description" => $this->description, "location" => $this->location,
        "programName" => $this->programName, "time" => $this->time);
    $statement->execute($parameters);
}
//end class

