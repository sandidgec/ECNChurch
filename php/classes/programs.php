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
     * param $newActivation
     **/
    public function setActivation($newActivation) {
        if($newActivation === null) {
            $this->activation = null;
            return;
        }
        //Verify salt is exactly string of 16
        if((ctype_xdigit($newActivation)) === false) {
            if(empty($newActivation) === true) {
                throw new InvalidArgumentException ("activation invalid");
            }
            if(strlen($newActivation) !== 16) {
                throw (new RangeException ("Activation not valid"));
            }
        }
        $this->activation = $newActivation;
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
    public function setDate($newDate) {
        return ();
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
     * accesssor method for Hash
     * @return string of users password Hash
     **/
    public function getHash() {
        return ($this->hash);
    }

    /**
     * mutator for hash - insure it is 128 length string
     * 
     * @param string of users $newHash
     * @throws InvalidArgumentException if newHash is not valid int
     * @throws RangeException if newHash is not exactly 128 xdigits
     **/
    public function setHash($newHash) {
        //verify Hash is exactly string of 128
        if((ctype_xdigit($newHash)) === false) {
            if(empty($newHash) === true) {
                throw new InvalidArgumentException ("hash invalid");
            }
            if(strlen($newHash) !== 128) {
               throw new RangeException ("hash invalid"); 
            }
        }
        $this->hash = $newHash;
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
     */

    /**
     * accessor method for Salt
     *
     * @return string of Salt for user password
     **/
    public function getSalt() {
        return ($this->salt);
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