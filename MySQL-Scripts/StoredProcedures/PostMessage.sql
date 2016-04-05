DROP PROCEDURE IF EXISTS internetprogrammingdatabasepublic.postMessage;
CREATE DEFINER=`be250abbbbd852`@`%` PROCEDURE `postMessage`(IN UserID INT, IN GroupID INT,IN Message VARCHAR(8000))
BEGIN
INSERT INTO messages(userID,groupID,message) VALUES (UserID,GroupID,Message);
END;