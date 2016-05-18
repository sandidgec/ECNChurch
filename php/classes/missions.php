<?php

/** 
 * Class Mission for sites Mission base
 *
 *This class handles missions/**
 *
 *@author Gerlene Gordy gerlenejgordy1996@gmail.com
 */
class Mission implements JsonSerializable
{
    /**
     * id for this mission; this is the primary key
     * @var int $missionId
     **/
    private $missionId;
    /**
     *address line 1 for this missison
     * @var string for $address1
     **/
    private $address1;
    /**
     *address line 2 for this misison
     * @var string for $address2
     **/
    private $address2;
    /**
     * city for this mission
     * @var string for $city
     **/
    private $city;
    /**
     * email for the mission
     * @var string for $email
     **/
    private $email;
    /**
     * hash of password with salt
     * @var string for password hash
     */
    private $hash;
    /**
     * phone number of mission
     * @var string for $phone
     **/
    private $phone;
    /**
     * person in charge for mission
     * @var string for $pic
     **/
    private $pic;
    /**
     * programs for this mission
     * @var string for $programs
     **/
    private $programs;
    /** salt off password with hash
     * @var string for password salt
     */
    private $salt;
    /**
     * service times for this mission
     * @var string for $serviceTime
     **/
    private $serviceTime;
    /**
     * state for this mission
     * @var string for $state
     **/
    private $state;
    /**
     * zip for this mission
     * @var string for $zip
     **/
    private $zip;


    /**
     * Mission Constructor.
     * @param $missionId
     * @param $address1
     * @param $address2
     * @param $city
     * @param $email
     * @param $hash
     * @param $phone
     * @param $pic
     * @param $programs
     * @param $salt
     * @param $serviceTime
     * @param $state
     * @param $zip
     **/
public function __construct($newMissionId, $newAddress1, $newAddress2, $newCity, $newEmail, $newHash, $newPhone,
$newPic, $newPrograms, $newSalt, $newServiceTime, $newState, $newZip)
{
try {

    $this->setMissionId($newMissionId);
    $this->setAddress1($newAddress1);
    $this->setAddress2($newAddress2);
    $this->setCity($newCity);
    $this->setEmail($newEmail);
    $this->setHash($newHash);
    $this->setPhone($newPhone);
    $this->setPic($newPic);
    $this->setPrograms($newPrograms);
    $this->setSalt($newSalt);
    $this->setServiceTime($newServiceTime);
    $this->setState($newState);
    $this->setZip($newZip);


} catch
(InvalidArgumentException $invalidArgument) {
    //rethrow the exctption to the caller
    throw(new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));

}   catch (RangeException $range) {
    // rethrow the exception to the caller
    throw (new RangeException($range->getMessage(), 0, $range));

}   catch (Exception $exception) {
    // rethrow generic exception
    throw(newException($exception->getMessage(), 0, $exception));
}
        }
        /**
         * accessor method for MissionId
         *
         * @retrun int value of unique MissionId
         **/
        public function getMissionId()
{
    return ($this->missionId);
}

        /**
         * mutator method for the MissionId
         *
         * @param int unique balue to represent a user $newMissionId
         * @thorws InvalidArgumentException for invalid content
         **/
        public function setMissionId($newMissionId)
{
    //base case: if the missionId is null,
    //this is a new mission without a mySQL assigned id (yet)
    if ($newMissionId === null) {
        $this->missionId = null;
        return;
    }
    //varify the mission is valid
    $newMissionId = filter_var($newMissionId, FILTER_VALIDATE_INT);
    if (empty($newMissionId) === true) {
        throw (new InvalidAgrumentException ("missionId invalid"));
    }
    $this->missionId = $newMissionId;
}

        /**
         * accessor method for adress line 1
         *
         * @rerturn string for address line 1
         **/
        public function getAddress1()
{
    return ($this->address1);

}




        /**
         * Mutator method for Address Line 1
         *
         * @param string  mission address1 $newAddress1
         */
        public function setAddress1($newAddress1) {

            $newAddress1 = filter_var($newAddress1, FILTER_SANITIZE_STRING);

            if ( $newAddress1 === false) {
                throw (new InvalidArgumentException("New Address 1 is invalid"));
            }

            if (empty($newAddress1) === true) {
                throw new InvalidArgumentException("address1 invalid");
            }
            if (strlen($newAddress1) > 76) {
                throw (new RangeException ("Address1 content too large"));
            }
            $this->address1 = $newAddress1;
        }

    /**
     * accessor method for adress line 2
     *
     * @rerturn string for address line 2
     **/
    public function getAddress2()
    {
        return ($this->address2);

    }


    /**
     * Mutator method for Address Line 2
     *
     * @param string  mission address2 $newAddress2
     */
    public function setAddress2($newAddress2) {

        $newAddress2 = filter_var($newAddress2, FILTER_SANITIZE_STRING);

        if ( $newAddress2 === false) {
            throw (new InvalidArgumentException("New Address 2 is invalid"));
        }

        if (empty($newAddress2) === true) {
            throw (new InvalidArgumentException("address2 invalid"));
        }
        if (strlen($newAddress2) > 76) {
            throw (new RangeException ("Address2 content too large"));
        }
        $this->address2 = $newAddress2;
    }


    /**
     * accessor method for city
     *
     * @return string for city
     **/
    public function city()
    {
        return ($this->city);

    }

    /**
     * Mutator method for city
     *
     * @param string mission city $newCity
     */
    public function setCity($newCity) {
        $newCity = filter_var($newCity, FILTER_SANITIZE_STRING);

        if ( $newCity === false) {
            throw (new InvalidArgumentException("New City is Invalid"));
        }

        If (empty($newCity) === true) {
            throw (new InvalidArgumentException("New City is invalid"));
        }

        if (strlen($newCity) > 16) {
            throw (new RangeException ("City content too large"));
        }
        $this->city = $newCity;
    }

    /**
     * accessor method for email
     *
     *@return string of email for user
     **/
    public function getEmail() {
        return ($this->email);
    }
    /**
     * mutator method for Email
     *
     *@param string $newEmail of users' email $newEmail
     * @throws InvalidArgumentException if email does not pass sanitization
     * @throws RangeException if email is longer than 64 characters
     **/
    public function setEmail($newEmail) {
        //varify email is valid
        $newEmail = filter_var($newEmail, FILTER_SANITIZE_EMAIL);
        if (empty($newEmail) === true) {
            throw new InvalidArgumentException ("user email is invalid");
        }
        if(strlen($newEmail) > 64) {
            throw(new RangeException ("Email content too large"));
        }
        $this->email = $newEmail;
    }



    /**
     * accessor method for hash
     * @return string of users password hash
     */
    public function getHash() {
        return ($this->hash);
    }
    /**
     * mutator for hash -insure it is 128 length string
     *
     *@param string $newHash of users $newHash
     * @throws InvalidArgumentException of newHash is not valid int
     * @throws RangeException if newHash is not exactly 128 xdiits
     **/
    public function setHash($newHash){
    //varify hash is exactly string of 128
   if ((ctype_xdigit($newHash)) === false) {
    if(empty($newHash) === true) {
        throw new InvalidArgumentException ("hash invalid");
        }
    if(strlen($newHash) !== 128) {
        throw new RangeException ("hash not valid");
        }
    }
    $this->hash = $newHash;
    }
    /** Accessor method for Phone Number
     *
     *@return int for phone number
     **/
public function getPhone() {
    return ($this->phone);
    }

    /**
     * mutator method for Phone Number
     *
     *@param int $newPhone of user phone number $newPhone
     *@throwsInvalidArgumentException if phone is not ctype digits
     *@throws RangeException if int is not 10 digits
     **/
    public function setPhone($newPhone) {
        //verfiy phone is valid and digits only
        if((ctype_digit($newPhone)) === false) {
            throw new InvalidArgumentException ("phoneNumber invalid");
        }
        if(strlen($newPhone) > 10) {
            throw (new RangeException ("Phone should be formatted 5055555555"));
        }
        $this->phone = $newPhone;
    }
    /**accessor method for Person In Charge
     *
     * @return string for Person In Charge
     * **/
    public function getPic() {
        return ($this->pic);
    }

    /**
     * Mutator methof for Person in Charge sanitation
     *
     * $param string for person in Charge $Pic
     **/
    Public function setPic($newPic) {
        //verify pic is valid
        $newPic = filter_var($newPic, FILTER_SANITIZE_STRING);
        if (empty($newPic) === true) {
            throw new InvalidArgumentException("Person In Charge invalid");
        }
        if(strlen($newPic) > 32) {
            throw (new RangeException("Person In Charge too large"));
        }
        $this->pic = $newPic;
    }



    /**
     * accessor method for programs
     *
     * @retun int value of unique programs
     **/
    public function getPrograms() {
        return ($this->programs);
    }
    /**
     * mutator method for the programs
     *
     * @param int unique value to represent a user $newPrograms
     * @thorws InvalidArgumentException for invalid content
     */
    public function setPrograms($newPrograms) {
        //base case: if the program is null,
        //this is a new program withour a mySQL assigned id (yet)
        if($newPrograms === null) {
            $this->programs = null;
            return;
        }
        //varify the program is valid
        $newPrograms = filter_var($newProframs, FILTER_SANITIZE_STRING);
        if(empty($newPrograms) === true) {
            throw (new InvalidArgumentException ("programs invalid"));
        }
        $this->programs = $newPrograms;
    }



    /**
     * accessor method for Salt
     *
     * @return string of Salt for user password
     **/
    public function getSalt() {
        return ($this->salt);
    }

    /**
     * mutator method for Salt
     *
     * @param string of users password salt $newSalt
     * @throw InvalidArgumentException if salt is not valid int
     * @throw RangeException if salt is not exactly 64 xdigits
     **/
    public function setSalt($newSalt) {
        // verify salt is exactly string of 64
        if((ctype_xdigit($newSalt)) === false) {
            if(empty($newSalt) === true) {
                throw new InvalidArgumentException ("salt invalid");
            }
            if(strlen($newSalt) !== 64) {
                throw (new RangeException ("salt not valid"));
            }
        }
        $this->salt = $newSalt;
    }

        public function JsonSerialize() {
            $fields = get_object_vars($this);
            unset ($fields["salt"]);
            unset ($fields["hash"]);
            return ($fields);
    }




    /**
     * accessor method for Service Time
     *
     * @rerturn string for Service time
     **/
    public function serviceTime()
    {
        return ($this->serviceTime);

    }




    /**
     * Mutator method for Service Time
     *
     * @param string $serviceTime
     */
    public function setServiceTime($newServiceTime) {

        $newServiceTime = filter_var($newServiceTime, FILTER_SANITIZE_STRING);

        if ( $newServiceTime === false) {
            throw (new InvalidArgumentException("New Service Time is invalid"));
        }

        if (empty($newServiceTime) === true) {
            throw new InvalidArgumentException("Service Time invalid");
        }
        if (strlen($newServiceTime) > 32) {
            throw (new RangeException ("Service Time content too large"));
        }
        $this->serviceTime = $newServiceTime;
    }



    /**
     * accessor method for State
     *
     * @return string for State
     **/
    public function state()
    {
        return ($this->state);

    }




    /**
     * Mutator method for State
     *
     * @param string for $state
     */
    public function setState($newState) {

        $newState = filter_var($newState, FILTER_SANITIZE_STRING);

        if ( $newState === false) {
            throw (new InvalidArgumentException("New State is invalid"));
        }

        if (empty($newState) === true) {
            throw new InvalidArgumentException("State invalid");
        }
        if (strlen($newState) > 2) {
            throw (new RangeException ("State content too large"));
        }
        $this->state = $newState;
    }




    /**
     * accessor method for Zip Code
     *
     * @rerturn string for Zip code
     **/
    public function zip()
    {
        return ($this->zip);

    }




    /**
     * Mutator method for Zip Code
     *
     * @param string  mission zip code
     */
    public function setZip($newZip) {

        $newZip = filter_var($newZip, FILTER_SANITIZE_STRING);

        if ( $newZip === false) {
            throw (new InvalidArgumentException("New Zip is invalid"));
        }

        if (empty($newZip) === true) {
            throw new InvalidArgumentException("Zip invalid");
        }
        if (strlen($newZip) > 32) {
            throw (new RangeException ("Zip content too large"));
        }
        $this->zip = $newZip;
    }




    /**
     * Inserts User into mySQL
     *
     * Inserts this userId into mySQL in intervals
     * @param PDO $pdo connection to
     **/
    public function insert(PDO &$pdo) {
        // make sure mission doesn't already exist
        if($this->missionId !== null) {
            throw (new PDOException("existing user"));
        }
        //create query template
        $query
            = "INSERT INTO mission(address1, address2, city, email, hash, phone, pic, programs, salt, serviceTime, state, zip)
        VALUES (:address1, :address2, :city, :email, :hash, :phone, :pic, :programs, :salt, :serviceTime, :state, :zip);
		
        $statement = $pdo->prepare($query);

        // bind the variables to the place holders in the template
        $parameters = array("address1" => $this->address1, "address2" => $this->address2, "city" => $this->city, 
        "email" => $this->email, "hash" => $this->hash,
            "phone" => $this->phone, "pic" => $this->pic, "programs" => $this->progrmas, "salt" => $this->salt,
            "serviceTime" => $this->serviceTime, "state" => $this->state, "zip" => $this->zip);
        $statement->execute($parameters);

        //update null missionId with what mySQL just gave us
        $this->missionId = intval($pdo->lastInsertId());
    }

    /**
     * Deletes mission from mySQL
     *
     * Delete PDO to delete missionId
     * @param PDO $pdo
     **/
    public function delete(PDO &$pdo) {
        // enforce the user is not null
        if($this->missionId === null) {
            throw(new PDOException("unable to delete a mission that does not exist"));
        }

        //create query template
        $query = "DELETE FROM mission WHERE missionId = :missionId";
        $statement = $pdo->prepare($query);

        //bind the member variables to the place holder in the template
        $parameters = array("missionId" => $this->missionId);
        $statement->execute($parameters);
    }

    /**
     * updates Missiom in mySQL
     *
     * Update PDO to update missiom class
     * @param PDO $pdo pointer to PDO connection, by reference
     **/
    public function update(PDO $pdo) {
    
        //create query template
        $query = "UPDATE mission SET address1 = :address1, address2 = :address2, city = :city, email = :email,
        hash = :hash, phone = :phone, pic = :pic, programs= :programs, salt = :salt, serviceTime = :serviceTime, state = :state,
        zip = :zip;
        $statement = j$pdo->prepare(query);


        // bind the member variables
        $parameters = array("addressl" => $this->address1, "address2" => $this->address2, "city" => #this->city, "email" => $this->email,
            "hash" => $this->hash, "missionId" => $this->missionId, "phone" => $this->phone, "pic" => $this->pic, "programs" => $this->programs,
            "salt" => $this->salt, "serviceTime" => $this->serviceTime, "state" => $this->state, "zip" =>$this->zip);
        $statement->execute($parameters);
    }

    /**
     * Get user by userId integer
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param int for unique userId $userId
     * @return mixed|Misison
     **/
    public static function getUserByMissionId(PDO $pdo, $missionId) {
        // sanitize the missionId before searching
        $missionId = filter_var($missionId, FILTER_VALIDATE_INT);
        if($missionId === false) {
            throw(new PDOException("mission id is not an integer"));
        }
        if($missionId <= 0) {
            throw(new PDOException("mission id is not positive"));
        }

        // create query template
        $query = "SELECT missionId, address1, address2, city, email, hash, phone, pic, programs, salt, serviceTime, 
                state, zip, FROM mission WHERE missionId = :missionId";
        $statement = $pdo->prepare($query);

        // bind the user id to the place holder in the template
        $parameters = array("missionId" => $missionId);
        $statement->execute($parameters);

        // grab the user from mySQL
        try {
            $mission = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $mission = new Mission ($row["missionId"], $row["address1"], $row["address2"], $row["city}, $row["email"],
                    $row["hash"], $row["phone"], $row["pic], $row[programs], $row[salt], $row[serviceTime],
                    $row[state], $row[zip];

            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($mission);
    }


    /**
     * get user by email
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param mixed info for $mission
     * @return null|Mission
     **/
    public static function getMissionByEmail(PDO &$pdo, $mission) {
        // sanitize the email before searching
        $mission = filter_var($mission, FILTER_SANITIZE_EMAIL);
        if($mission === false) {
            throw(new PDOException(""));
        }
        // create query template
        $query = "SELECT missionId, address1, address2, city, email, hash, phone, pic, programs, salt, serviceTime, state, zip
        FROM mission WHERE email = :email";
        $statement = $pdo->prepare($query);

        // bind the mission id to the place holder in the template
        $parameters = array("email" => $mission);
        $statement->execute($parameters);

        // grab the mission from mySQL
        try {
            $mission = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $mission = new Mission ($row["missionId"], $row["address1"], $row["$this->address2"], $row["city"], $row["email"],
                    $row["hash"], $row["phone"], $row["pic"], $row["programs"], $row["salt"], $row["serviceTime"], $row["state"], $row["zip"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($mission);
    }

    /**
     * Get all Missions
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @return mixed|Mission
     **/
    public static function getAllMissions(PDO &$pdo) {

        // create query template
       $query = "SELECT missionId, address1, address2, city, email, hash, phone, pic, programs, salt, serviceTime, state, zip
        FROM mission WHERE email = :email";
        $statement = $pdo->prepare($query);

        // grab the mission from mySQL
        try {
            $mission = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
              $mission = new Mission ($row["missionId"], $row["address1"], $row["$this->address2"], $row["city"], $row["email"],
                    $row["hash"], $row["phone"], $row["pic"], $row["programs"], $row["salt"], $row["serviceTime"], $row["state"], $row["zip"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($mission);
    }


}