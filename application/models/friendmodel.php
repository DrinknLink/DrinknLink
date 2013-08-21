<?php

class friendmodel extends CI_Model {

    function friendmodel() {
        parent::__construct();
    }

    public function getRelationship($cuid, $uid) {
        $result = selectSql('FriendConnection', array('UserID_A' => $cuid, 'UserID_B' => $uid));
        if ($result->num_rows() != 0) {
            $row = $result->row_array();
            return $row['FriendStatus'];
        }
        return 0;
    }
    
    public function getFriendByUid($cuid) {
    	$sql = 'SELECT * FROM `FriendConnection` LEFT JOIN `User` ON `FriendConnection`.`UserID_B` = `User`.`UserID`';
    	$result = execSql($sql);
    	
    	if ($result->num_rows() != 0) {
    		$row = $result->row_array();
    		return $row;
    	}
    	return 0;
    }

    /**
     * Friend actions 
     */
    public function sendRequest($cuid, $uid) {
        insertSql('FriendConnection', array('UserID_A' => $cuid, 'UserID_B' => $uid, 'FriendStatus' => 1)
        );
        insertSql('Notification', array('NotifiType' => 0, 'NotifiTitle' => 'Add Friend Request', 'NotifiFromType' => 0, 'NotifiFromID' => $cuid, 'NotifiToID' => $uid, 'NotifiStatus' => 1)
        );
        return true;
    }

    public function confirmRequest($cuid, $notifiID) {
        //
        $result = selectSql('Notification', array('NotifiID' => $notifiID));
        if ($result->num_rows() != 0) {
            $row = $result->row_array();
            if ($cuid != $row['NotifiToID'])
                return false;
        }else {
            return false;
        }
        //
        updateSql('Notification', array('NotifiID' => $notifiID), array('NotifiStatus' => 2)
        );
        updateSql('FriendConnection', array('UserID_A' => $row['NotifiFromID'], 'UserID_B' => $row['NotifiToID']), array('FriendStatus' => 2)
        );
        insertSql('FriendConnection', array('UserID_A' => $row['NotifiToID'], 'UserID_B' => $row['NotifiFromID'], 'FriendStatus' => 2)
        );
        return true;
    }

    public function getRequest($cuid, $uid) {
        $result = selectSql('FriendConnection', array('UserID_A' => $cuid, 'UserID_B' => $uid));
        if ($result->num_rows() != 0) {
            $row = $result->row_array();
            return $row;
        }
        return 0;
    }

    public function ignoreRequest($cuid, $uid) {
        updateSql('FriendConnection', array('UserID_A' => $uid, 'UserID_B' => $cuid), array('FriendStatus' => 0)
        );
    }

    public function deleteFriend($cuid, $uid) {
        
    }

    /**
     * Friend Group
     */
    public function createGroup($cuid, $title) {
        insertSql('FriendGroup', array('UserID' => $cuid, 'FriendGroupTitle' => $title)
        );
        return true;
    }

    public function editGroup($cuid, $uid) {
        
    }

    public function deleteGroup($cuid, $uid) {
        
    }

    public function addIntoGroup($cuid, $uid) {
        
    }

    public function deleteFromGroup($cuid, $uid) {
        
    }

}