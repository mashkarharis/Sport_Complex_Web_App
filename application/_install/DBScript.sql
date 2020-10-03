drop database webappfinalized;
create database webappfinalized;
use webappfinalized;

// Sports;
 
CREATE TABLE sports (
name VARCHAR(30) NOT NULL PRIMARY KEY ,
maxplay INT(6) UNSIGNED default 10,
fee INT(10) UNSIGNED default 200,
imgname VARCHAR(5000) default '' ,
mon_open_at TIME default '08:00:00' ,
mon_close_at TIME default '18:00:00',
tue_open_at TIME default '08:00:00',
tue_close_at TIME default '18:00:00',
wed_open_at TIME default '08:00:00',
wed_close_at TIME default '18:00:00',
thu_open_at TIME default '08:00:00',
thu_close_at TIME default '18:00:00',
fri_open_at TIME default '08:00:00',
fri_close_at TIME default '18:00:00',
sat_open_at TIME default '08:00:00',
sat_close_at TIME default '18:00:00',
sun_open_at TIME default '08:00:00',
sun_close_at TIME default '18:00:00'
);
insert into sports (name,IMGNAME,maxplay,fee,mon_open_at) values ('Swimming'.'https://www.pngitem.com/pimgs/m/119-1192935_black-and-white-swimming-png-swimming-icon-png.png',6,150,'08:00:00');
insert into sports (name,IMGNAME,maxplay,fee,mon_open_at) values ('Badminton','https://st2.depositphotos.com/8663904/11553/v/950/depositphotos_115536498-stock-illustration-badminton-icon-black-icon-on.jpg',20,130,'08:00:00');
insert into sports (name,IMGNAME,mon_CLOSE_at) values ('Tabletennis','https://www.colourbox.com/preview/19165621-table-tennis-simple-icon.jpg','08:00:00');
insert into sports (name,IMGNAME,mon_CLOSE_at) values ('Football','https://www.pinclipart.com/picdir/big/133-1331729_black-and-white-football-clipart-soccer-ball-png.png','08:00:00');

select * from sports;

//Member User and Admin;

CREATE TABLE members (
nicnumber varchar(12) primary key,
first_name varchar(40),
last_name varchar(40),
user_name varchar(40) unique,
profile_pic varchar(500),
email varchar(40),
mobile_no varchar(10),
password varchar(50),
previlege varchar(8),
status varchar(20) 
);

insert into members (nicnumber,first_name,last_name,user_name,profile_pic,email,mobile_no,password,previlege,status) values ("0001V","Saman","Perera","Saman123","","Saman@gmail.com","0912323232","123123","admin","Active");
insert into members (nicnumber,first_name,last_name,user_name,profile_pic,email,mobile_no,password,previlege,status) values ("0002V","Kamal","Silva","Kamal1232","","Kamal@gmail.com","0912322232","124123","user","Pending");
insert into members (nicnumber,first_name,last_name,user_name,profile_pic,email,mobile_no,password,previlege,status) values ("0003V","Vimal","Amal","Vimal432","","vimal@gmail.com","0913323232","133123","user","Active");
insert into members (nicnumber,first_name,last_name,user_name,profile_pic,email,mobile_no,password,previlege,status) values ("0004V","Vijitha","Roshan","Vijitha123","","viji@gmail.com","0913333232","123a23","user","Pending");

select * from members;


// Notifications;

CREATE TABLE IF NOT EXISTS `notifications` (
  `notification_id` varchar(40) ,
  `senderuname` varchar(40),
  `title` text,
  `description` text,
  `type` text,
  `datetime` datetime ,
  
  PRIMARY KEY (`notification_id`),
  FOREIGN KEY (`senderuname`) REFERENCES members(`user_name`)
);

select * from notifications;


// mailbox;


CREATE TABLE IF NOT EXISTS `mailbox` (
  `notification_id` varchar(40),
  `receiveruname` varchar(40),
  `status` text,
  FOREIGN KEY (`notification_id`) REFERENCES notifications(`notification_id`),
  FOREIGN KEY (`receiveruname`) REFERENCES members(`user_name`)
);

select * from mailbox;


// bookings;


CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` varchar(40),
  `uname` varchar(40),
  `date` DATE,
  `slot` varchar(40),
  `sport` varchar(40),
  FOREIGN KEY (`sport`) REFERENCES sports(`name`),
  FOREIGN KEY (`uname`) REFERENCES members(`user_name`)
);
insert into bookings (booking_id,uname,date,slot,sport) values ("0001","Vimal432","2020-06-24","09:00-10:00","Swimming");
insert into bookings (booking_id,uname,date,slot,sport) values ("0002","Saman123","2020-06-24","09:00-10:00","Badminton");
insert into bookings (booking_id,uname,date,slot,sport) values ("0003","Vimal432","2020-06-25","10:00-11:00","Football");
insert into bookings (booking_id,uname,date,slot,sport) values ("0004","Vimal432","2020-06-24","10:00-11:00","Tabletennis");
insert into bookings (booking_id,uname,date,slot,sport) values ("0005","Vimal432","2020-06-24","09:00-10:00","Tabletennis");
insert into bookings (booking_id,uname,date,slot,sport) values ("0006","Sama123","2020-06-24","09:00-10:00","Football");
insert into bookings (booking_id,uname,date,slot,sport) values ("0007","Vimal432","2020-06-24","10:00-11:00","Swimming");
insert into bookings (booking_id,uname,date,slot,sport) values ("0008","Vimal432","2020-06-24","10:00-11:00","Swimming");
insert into bookings (booking_id,uname,date,slot,sport) values ("0008","Vimal432","2020-06-24","11:00-12:00","Badminton");
insert into bookings (booking_id,uname,date,slot,sport) values ("0008","Vimal432","2020-06-24","11:00-12:00","Badminton");
insert into bookings (booking_id,uname,date,slot,sport) values ("0002","Saman123","2020-06-24","13:00-14:00","Football");
insert into bookings (booking_id,uname,date,slot,sport) values ("0002","Saman123","2020-06-24","13:00-14:00","Football");
insert into bookings (booking_id,uname,date,slot,sport) values ("0002","Saman123","2020-06-24","13:00-14:00","Tabletennis");

select * from bookings;

show tables;
;
;
;