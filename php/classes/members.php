<?php
/**
 * Class Member for sites member base
 *
 * This class handles members
 *
 * @author Aarick Lameman lamemanaarick@gmail.com
 */
class User implements JsonSerializable {
    /**
     * id for this member; this is the primary key
     * @var int $membersId
     **/
    private $membersId;
    /**
     * access level id to identify member groups
     * @var int for $missionsFkId
     **/
    private $missionsFkId;
    /**
     * allows activation of a new member account
     * @var string for activation
     **/
    private $activation;
    /**
     * email for the user
     * @var string for $email
     **/
    private $email;
    /**
     * first name of the user
     * @var string for $firstName
     **/
    private $firstName;
    /**
     * hash of password w/ salt
     * @var string for password hash
     **/
    private $hash;
    /**
     * last name of the user
     * @var string for $lastName
     **/
    private $lastName;
    /**
     * phone number of user
     * @var int $phone
     **/
    private $phone;
    /**
     * path for a profile pic
     * @var string of profile picture path
     **/
    private $profilePath;
    /**
     * position of the member
     * @var string $position
     **/
    private $position;
    /**
     * zip code for each member
     * @var string for $zip
     **/
    private $zip;
    /**
     * state that member lives in
     * @var string for $state
     **/
    private $state;
    /**
     * city that member lives in
     * @var string for $city
     **/
    private $city;
    /**
    * city that member lives in
    * @var string for $city
    **/
    private $city;
    /**
     * salt of password w/ hash
     * @var string for password salt
     **/
    private $salt;


    /**
     * User constructor.
     * @param $newUserId
     * @param $newAccessLevelId
     * @param $newEmail
     * @param $newFirstName
     * @param $newHash
     * @param $newLastName
     * @param $newPhone
     * @param $newProfilePath
     * @param $newSalt
     **/
    public function __construct($newUserId, $newAccessLevelId, $newActivation, $newEmail, $newFirstName, $newHash, $newLastName,
                                $newPhone, $newProfilePath, $newSalt)
    {
        try {
            $this->setUserId($newUserId);
            $this->setAccessLevelId($newAccessLevelId);
            $this->setActivation($newActivation);
            $this->setEmail($newEmail);
            $this->setFirstName($newFirstName);
            $this->setHash($newHash);
            $this->setLastName($newLastName);
            $this->setPhone($newPhone);
            $this->setProfilePath($newProfilePath);
            $this->setSalt($newSalt);
        } catch (InvalidArgumentException $invalidArgument) {
            //rethrow the exception to the caller
            throw(new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
        } catch (RangeException $range) {
            // rethrow the exception to the caller
            throw (new RangeException($range->getMessage(), 0, $range));
        } catch (Exception $exception) {
            // rethrow generic exception
            throw(new Exception($exception->getMessage(), 0, $exception));
        }
    }
    /**
     * accessor method for userId
     *
     * @return int value of unique userId
     **/
    public function getUserId() {
        return ($this->userId);
    }
    /**
     * mutator method for the userId
     *
     * @param int unique value to represent a user $newUserId
     * @throws InvalidArgumentException for invalid content
     **/
    public function setUserId($newUserId) {
        // base case: if the userId is null,
        // this is a new user without a mySQL assigned id (yet)
        if($newUserId === null) {
            $this->userId = null;
            return;
        }
        //verify the User is valid
        $newUserId = filter_var($newUserId, FILTER_VALIDATE_INT);
        if(empty($newUserId) === true) {
            throw (new InvalidArgumentException ("userId invalid"));
        }
        $this->userId = $newUserId;
    }
    /**
     * accessor method for access level of user
     *
     * @return mixed
     **/
    public function getAccessLevelId() {
        return ($this->accessLevelId);
    }
    /**
     * Mutator method for access levelId
     *
     * @param $newAccessLevelId int
     * @throws InvalidArgumentException if access level is invalid
     **/
    public function setAccessLevelId($newAccessLevelId) {
        // verify access level is integer
        $newAccessLevelId = filter_var($newAccessLevelId, FILTER_VALIDATE_INT);
        if(empty($newAccessLevelId) === true) {
            throw new InvalidArgumentException ("Access Level Invalid");
        }
        $this->accessLevelId = $newAccessLevelId;
    }
    /**
     * @return string
     **/
    public function getActivation() {
        return ($this->activation);
    }
    /**
     * @param $newActivation
     **/
    public function setActivation($newActivation) {
        if($newActivation === null){
            $this->activation = null;
            return;
        }
        // verify salt is exactly string of 16
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
     * accessor method for email
     *
     * @return string of email for user
     **/
    public function getEmail() {
        return ($this->email);
    }
    /**
     * Mutator method for Email
     *
     * @param string of users' email $newEmail
     * @throws InvalidArgumentException if email does not pass sanitization
     * @throws RangeException if email is longer than 64 characters
     **/
    public function setEmail($newEmail) {
        // verify email is valid
        $newEmail = filter_var($newEmail, FILTER_SANITIZE_EMAIL);
        if(empty($newEmail) === true) {
            throw new InvalidArgumentException ("user email invalid");
        }
        if(strlen($newEmail) > 64) {
            throw(new RangeException ("Email content too large"));
        }
        $this->email = $newEmail;
    }
    /**
     * accessor method for First Name
     *
     * @return string for first name
     **/
    public function getFirstName() {
        return ($this->firstName);
    }
    /**
     * Mutator method for First Name
     *
     * @param string for user first name $newFirstName
     */
    public function setFirstName($newFirstName) {
        // verify first name is valid
        $newFirstName = filter_var($newFirstName, FILTER_SANITIZE_STRING);
        if(empty($newFirstName) === true) {
            throw new InvalidArgumentException("first name invalid");
        }
        if(strlen($newFirstName) > 32) {
            throw (new RangeException ("First Name content too large"));
        }
        $this->firstName = $newFirstName;
    }
    /**
     * accessor method for Hash
     * @return string of users password Hash
     **/
    public function getHash() {
        return ($this->hash);
    }
    /**
     * Mutator for Hash -insure it is 128 length string
     *
     * @param string of users $newHash
     * @throws InvalidArgumentException if newHash is not valid int
     * @throws RangeException if newHash is not exactly 128 xdigits
     **/
    public function setHash($newHash) {
        // verify Hash is exactly string of 128
        if((ctype_xdigit($newHash)) === false) {
            if(empty($newHash) === true) {
                throw new InvalidArgumentException ("hash invalid");
            }
            if(strlen($newHash) !== 128) {
                throw new RangeException ("hash not valid");
            }
        }
        $this->hash = $newHash;
    }
    /**
     * accessor method for Last Name
     *
     * @return string for last name
     **/
    public function getLastName() {
        return ($this->lastName);
    }
    /**
     * Mutator method for last name sanitation
     *
     * @param string for user last name $newLastName
     **/
    public function setLastName($newLastName) {
        //verify last name is valid
        $newLastName = filter_var($newLastName, FILTER_SANITIZE_STRING);
        if(empty($newLastName) === true) {
            throw new InvalidArgumentException("last name invalid");
        }
        if(strlen($newLastName) > 32) {
            throw (new RangeException("Last Name content too large"));
        }
        $this->lastName = $newLastName;
    }
    /**
     * Accessor method for Phone Number
     *
     * @return int for phone number
     **/
    public function getPhone() {
        return ($this->phone);
    }
    /**
     * Mutator method for Phone Number
     *
     * @param int of user phone number $newPhoneNumber
     * @throws InvalidArgumentException if phoneNumber is not ctype digits
     * @throws RangeException if int is not 10 digits
     **/
    public function setPhone($newPhone) {
        //verify phone number is valid and digits only
        if((ctype_digit($newPhone)) === false) {
            throw new InvalidArgumentException ("phoneNumber invalid");
        }
        if(strlen($newPhone) > 10) {
            throw (new RangeException ("Phone Number should be formatted 5055558787"));
        }
        $this->phone = $newPhone;
    }
    /**
     * accessor for profile path of profile pic
     *
     * @return string
     **/
    public function getProfilePath() {
        return ($this->profilePath);
    }
    /**
     * Mutator for profile path of profile pic
     *
     * @param $newProfilePath
     **/
    public function setProfilePath($newProfilePath) {
        //verify profile path is valid
        $newProfilePath = filter_var($newProfilePath, FILTER_SANITIZE_STRING);
        if(empty($newProfilePath) === true) {
            throw new InvalidArgumentException("profile pic path is invalid");
        }
        if(strlen($newProfilePath) > 255) {
            throw (new RangeException("Profile Path is too large"));
        }
        $this->profilePath = $newProfilePath;
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
     * Inserts User into mySQL
     *
     * Inserts this userId into mySQL in intervals
     * @param PDO $pdo connection to
     **/
    public function insert(PDO &$pdo) {
        // make sure user doesn't already exist
        if($this->userId !== null) {
            throw (new PDOException("existing user"));
        }
        //create query template
        $query
            = "INSERT INTO user(accessLevelId, activation, email, firstName, hash, lastName, phone, profilePath, salt)
        VALUES (:accessLevel, :activation, :email, :firstName, :hash, :lastName, :phone, :profilePath, :salt)";
        $statement = $pdo->prepare($query);
        // bind the variables to the place holders in the template
        $parameters = array("accessLevelId" => $this->accessLevelId, "activation" => $this->activation, "email" => $this->email,
            "firstName" => $this->firstName,
            "hash" => $this->hash, "lastName" => $this->lastName, "phone" => $this->phone, "profilePath" => $this->profilePath,
            "salt" => $this->salt);
        $statement->execute($parameters);
        //update null userId with what mySQL just gave us
        $this->userId = intval($pdo->lastInsertI