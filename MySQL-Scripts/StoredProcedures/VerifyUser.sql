DROP PROCEDURE IF EXISTS internetprogrammingdatabasepublic.verifyUser;
CREATE DEFINER=`be250abbbbd852`@`%` PROCEDURE `verifyUser`(IN userId CHAR(9), IN pass VARCHAR(8000), OUT verified BOOLEAN)
BEGIN
      DECLARE users INT DEFAULT 0;

      SELECT
        COUNT(userName) INTO users
      FROM
        userchatroom
      WHERE
        userName = userId AND password = pass;

      IF users = 0 THEN
        SET verified = FALSE;
      ELSE
        SET verified = TRUE;
      END IF;
    END;