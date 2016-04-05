CREATE TABLE messages
(
    messageID INT(11) PRIMARY KEY NOT NULL,
    message VARCHAR(8000),
    groupID INT(11),
    userID INT(11),
    date DATETIME,
    CONSTRAINT messages_groups_groupID_fk FOREIGN KEY (groupID) REFERENCES groups (groupID),
    CONSTRAINT messages_userchatroom_idNumber_fk FOREIGN KEY (userID) REFERENCES userchatroom (idNumber)
);
CREATE INDEX messages_groups_groupID_fk ON messages (groupID);
CREATE INDEX messages_userchatroom_idNumber_fk ON messages (userID);