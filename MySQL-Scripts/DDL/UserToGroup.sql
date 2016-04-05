CREATE TABLE usertogroup
(
    userID INT(11) NOT NULL,
    groupID INT(11) NOT NULL,
    CONSTRAINT usertogroup_groups_groupID_fk FOREIGN KEY (groupID) REFERENCES groups (groupID),
    CONSTRAINT usertogroup_userchatroom_idNumber_fk FOREIGN KEY (userID) REFERENCES userchatroom (idNumber)
);
CREATE INDEX usertogroup_groups_groupID_fk ON usertogroup (groupID);
CREATE INDEX usertogroup_userchatroom_idNumber_fk ON usertogroup (userID);