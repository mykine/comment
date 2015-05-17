DROP TABLE t_comment;
CREATE TABLE t_comment(
 id INT(11) AUTO_INCREMENT PRIMARY KEY,
 parent_id INT(11),
 nickname VARCHAR(100),
 head_pic VARCHAR(400),
 content TEXT(4000),
 create_time DATETIME 
)