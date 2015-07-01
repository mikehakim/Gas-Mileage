

/* This is going to be my table for the gas mileage calculator */

CREATE TABLE IF NOT EXISTS 'Type of vehicle' (
'Price per gallon' mediumdecimal(4.19) unsigned NOT NULL,
'Number of Gallons used' mediumint(25) unsigned NOT NULL,
'Number of Cylinders' mediumint(4) unsigned NOT NULL,
PRIMARY KEY ('Price per gallon')
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;

