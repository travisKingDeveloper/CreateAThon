DROP PROCEDURE IF EXISTS internetprogrammingdatabasepublic.addUser;
CREATE DEFINER=`be250abbbbd852`@`%` PROCEDURE `addUser`(IN userName CHAR(9), in Password VARCHAR(30))
BEGIN
  INSERT INTO userchatroom(userName,password) VALUE (userName,Password);
  END;