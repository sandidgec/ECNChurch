<?php
/**
 * Class Bulletin
 *
 * This class handles bulletins posted to site
 *
 * @author name email
 **/
class Bulletin implements JsonSerializable {
    /**
     *id for a bulletin this is primary key
     * @var int $bulletinId
     */
    private $bulletinId;
    /**
     * attaches key for user posting bulletin
     * @var int $missionsId foreign key for $missionsId
     */
    private $missionsId;
    /**
     * describes a bulletins category
     * @var string for category description of the bulletin
     */
    private $category;
    /**
     * the actual message content posted to the bulletin
     * @var string content of the bulletin message itself text only
     */
    private $message;
    /**
     * describes a timestamp
     * @var string for timestamp of the bulletin
     */
    private $timestamp;
    /**
     * Bulletin constructor.
     * @param $newBulletinId
     * @param $newMissionsId
     * @param $newCategory
     * @param $newMessage
     * @param $newTimestamp
     */
    public function __construct($newBulletinId, $newMissionsId, $newCategory, $newMessage, $newTimestamp)
    {
        try {
            $this->setBulletinId($newBulletinId);
            $this->setMissionsId($newMissionsId);
            $this->setCategory($newCategory);
            $this->setMessage($newMessage);
            $this->setTimestamp($newTimestamp);
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
     * accessor method for bulletinId
     *
     * @return int value of unique bulletinId
     **/
    public function getBulletinId()
    {
        return ($this->bulletinId);
    }
    /**
     * mutator method for the bulletinId
     *
     * @param int unique value to represent a user $newBulletinId
     * @throws InvalidArgumentException for invalid content
     **/
    public function setBulletinId($newBulletinId)
    {
        // base case: if the bulletinId is null,
        // this is a new bulletin without a mySQL assigned id (yet)
        if ($newBulletinId === null) {
            $this->bulletinId = null;
            return;
        }
        //verify the User is valid
        $newBulletinId = filter_var($newBulletinId, FILTER_VALIDATE_INT);
        if (empty($newBulletinId) === true) {
            throw (new InvalidArgumentException ("bulletinId invalid"));
        }
        $this->bulletinId = $newBulletinId;
    }

    /**
     * accessor method for missionsId
     *
     * @return int misisonsId
     **/
    public function getMissionsId() {
        return ($this->missionsId);
    }
    /**
     * Mutator method for missionsId
     *
     * @param $newMissionsId int
     * @throws InvalidArgumentException if userId is invalid
     **/
    public function setUserId($newMissionsId) {
        // verify access level is integer
        $newUserId = filter_var($newMissionsId, FILTER_VALIDATE_INT);
        if(empty($newMissionsId) === true) {
            throw new InvalidArgumentException ("Missions Id Invalid");
        }
        $this->missionsId = $newMissionsId;
    }

    /**
     * accessor method for category
     *
     * @return string of category
     **/
    public function getCategory()
    {
        return ($this->category);
    }
    /**
     * Mutator method for Category
     *
     * @param string bulletin category $newCategory
     */
    public function setCategory($newCategory)
    {
        // verify category is valid
        $newCategory = filter_var($newCategory, FILTER_SANITIZE_STRING);
        if (empty($newCategory) === true) {
            throw new InvalidArgumentException("category invalid");
        }
        if (strlen($newCategory) > 32) {
            throw (new RangeException ("Category name too large"));
        }
        $this->category = $newCategory;
    }

    /**
     * accessor method for message
     *
     * @return string of message
     **/
    public function getMessage()
    {
        return ($this->message);
    }
    /**
     * Mutator method for Message
     *
     * @param string bulletin category $newMessage
     */
    public function setMessage($newMessage)
    {
        // verify message is valid
        $newMessage = filter_var($newMessage, FILTER_SANITIZE_STRING);
        if (empty($newMessage) === true) {
            throw new InvalidArgumentException("message invalid");
        }
        $this->category = $newMessage;
    }
    public function JsonSerialize()
    {
        $fields = get_object_vars($this);
        return ($fields);
    }

    /**
     * accessor method for timestamp
     *
     * @return string of timestamp
     **/
    public function getTimestamp()
    {
        return ($this->timestamp);
    }
    /**
     * Mutator method for timestamp
     *
     * @param string timestamp category $newTimestamp
     */
    public function setTimestamp($newTimestamp)
    {
        // verify timestamp is valid
        $newTimestamp = filter_var($newTimestamp, FILTER_SANITIZE_STRING);
        if (empty($newTimestamp) === true) {
            throw new InvalidArgumentException("timestamp invalid");
        }
        $this->category = $newTimestamp;
    }
    public function JsonSerialize()
    {
        $fields = get_object_vars($this);
        return ($fields);
    }

    /**
     * Inserts Bulletin into mySQL
     *
     * Inserts this bulletinId into mySQL in intervals
     * @param PDO $pdo connection to
     **/
    public function insert(PDO &$pdo)
    {
        // make sure bulletin doesn't already exist
        if ($this->bulletinId !== null) {
            throw (new PDOException("existing bulletin"));
        }
        //create query template
        $query
            = "INSERT INTO bulletin(missionsId, category, message, timestamp)" .
            "VALUES (:missionsId, :category, :message, :timestamp")";
        $statement = $pdo->prepare($query);
        // bind the variables to the place holders in the template
        $parameters = array("missionsId" => $this->missionsId, "category" => $this->category, "message" => $this->message, "timestamp" => $this->timestamp);
        $statement->execute($parameters);
        //update null bulletinId with what mySQL just gave us
        $this->bulletinId = intval($pdo->lastInsertId());
    }

    /**
     * Deletes Bulletin from mySQL
     *
     * Delete PDO to delete bulletinId
     * @param PDO $pdo
     **/
    public function delete(PDO &$pdo) {
        // enforce the bulletin is not null
        if($this->bulletinId === null) {
            throw(new PDOException("unable to delete a bulletin that does not exist"));
        }
        //create query template
        $query = "DELETE FROM bulletin WHERE bulletinId = :bulletinId";
        $statement = $pdo->prepare($query);
        //bind the member variables to the place holder in the template
        $parameters = array("bulletinId" => $this->bulletinId);
        $statement->execute($parameters);
    }

    /**
     * updates Message in mySQL
     *
     * Update PDO to update bulletin class
     * @param PDO $pdo pointer to PDO connection, by reference
     **/
    public function update(PDO $pdo) {
        // create query template
        $query = "UPDATE bulletin SET missionsId = :missionsId, category = :category, message = :message WHERE bulletinId = :bulletinId";
        $statement = $pdo->prepare($query);
        // bind the member variables
        $parameters = array("missionsId" => $this->missionsId, "category" => $this->category, "message" => $this->message,
            "bulletinId" => $this->bulletinId);
        $statement->execute($parameters);
    }

    /**
     * Get bulletin by bulletinId integer
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param int for unique bulletinId $bulletinId
     * @return mixed|Bulletin
     **/
    public static function getBulletinByBulletinId(PDO $pdo, $bulletinId) {
        // sanitize the bulletinId before searching
        $bulletinId = filter_var($bulletinId, FILTER_VALIDATE_INT);
        if($bulletinId === false) {
            throw(new PDOException("bulletin id is not an integer"));
        }
        if($bulletinId <= 0) {
            throw(new PDOException("bulletin id is not positive"));
        }
        // create query template
        $query = "SELECT bulletinId, missionsId, category, message FROM user WHERE bulletinId = :bulletinId";
        $statement = $pdo->prepare($query);
        // bind the bulletin id to the place holder in the template
        $parameters = array("bulletinId" => $bulletinId);
        $statement->execute($parameters);
        // grab the bulletin from mySQL
        try {
            $bulletin = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $bulletin = new Bulletin ($row["bulletinId"], $row["missionsId"], $row["category"], $row["message"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($bulletin);
    }

    /**
     * get bulletin by category
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @param mixed info for $bulletin
     * @return null|Bulletin
     **/
    public static function getBulletinByCategory(PDO &$pdo, $bulletin) {
        if($bulletin === false) {
            throw(new PDOException(""));
        }
        // create query template
        $query = "SELECT bulletinId, missionsId, category, message
        FROM bulletin WHERE category = :category";
        $statement = $pdo->prepare($query);
        // bind the bulletinid to the place holder in the template
        $parameters = array("category" => $bulletin);
        $statement->execute($parameters);
        // grab the bulletin from mySQL
        try {
            $bulletin= null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $bulletin = new Bulletin ($row["bulletinId"], $row["missionsId"], $row["category"], $row["message"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($bulletin);
    }
    /**
     * Get all Bulletins
     *
     * @param PDO $pdo pointer to PDO connection, by reference
     * @return mixed|Bulletin
     **/
    public static function getAllBulletins(PDO &$pdo) {
        // create query template
        $query = "SELECT bulletinId, missionsId, category, message FROM bulletin";
        $statement = $pdo->prepare($query);
        // grab the bulletin from mySQL
        try {
            $bulletin = null;
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            if($row !== false) {
                $bulletin = new Bulletin ($row["bulletinId"], $row["missionsId"], $row["category"], $row["message"]);
            }
        } catch(Exception $exception) {
            // if the row couldn't be converted, rethrow it
            throw(new PDOException($exception->getMessage(), 0, $exception));
        }
        return ($bulletin);
    }
}