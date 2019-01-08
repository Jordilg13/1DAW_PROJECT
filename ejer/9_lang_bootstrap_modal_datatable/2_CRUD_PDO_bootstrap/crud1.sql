create database crud1;
use crud1;
CREATE TABLE `customers` (
	`id`         int(10) NOT NULL auto_increment,
	`name` varchar(250) NOT NULL default '',
	`email`  varchar(250) NOT NULL default '',
	`mobile`   varchar(250) NOT NULL default '',
	PRIMARY KEY  (`id`)
);
INSERT INTO `customers`
		( id, name, email, mobile ) 
	VALUES
		( 1, 'Tiger', 't.nixon@datatables.net', '687447125' ),
		( 2, 'Garrett', 'g.winters@datatables.net', '674890255' ),
		( 3, 'Ashton', 'a.cox@datatables.net', '674102495' ),
		( 4, 'Cedric', 'c.kelly@datatables.net', '692334827' );
		