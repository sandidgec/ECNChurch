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
     * accessor method for access level of identifying programs (missionsId)
     *
     * @return  mixed
     **/
    public function getMissionsId() {
        return ($this->missionsId);
    }


    /**
     * accessor method
     */








}