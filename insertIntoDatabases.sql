-- INSERT INTO MEMBERS 
INSERT INTO members(fname,lname,address,city,
	state, zip,phone,email,userid, password, creditcardtype,creditcardnumber)
	VALUES ('Nicki','Clifford','88 south road','Wakefield','MA', 01880, '6172406365', 'maddie@gmail.com', 'mshea', 'password', 'amex','0876662222');
    
    
INSERT INTO members(fname,lname,address,city,
	state, zip,phone,email,userid, password, creditcardtype,creditcardnumber)
	VALUES ('Lauren','Cross','89 pine street','Melrose','VA', 23173, '6172409901', 'lauren@gmail.com', 'lcross', 'password', 'discover','0876662290');

    
    
INSERT INTO members(fname,lname,address,city,
	state, zip,phone,email,userid, password, creditcardtype,creditcardnumber)
	VALUES ('Dennis','Smith','100 lake street','Smithfield','VA', 23172, '6172400880', 'dennis@gmail.com', 'dsmith', 'password', 'mc','9076662290');
    
-- INSERT INTO BOOKS 

INSERT INTO books(isbn, author,title,price, subject)
	VALUES ('0123456789', 'Ryan Smith', 'Databases', 10, 'Non-fiction');
    
INSERT INTO books(isbn, author,title,price, subject)
	VALUES ('9876543210', 'Shakespeare', 'Romeo and Juliet', 20, 'Classics');

INSERT INTO books(isbn, author,title,price, subject)
	VALUES ('6789012345', 'Oswald Pepper', 'Creating the Universe', 5, 'Fiction');


INSERT INTO books(isbn, author,title,price, subject)
	VALUES ('6745672345', 'Oswald Pepper', 'Destroying the Universe', 20, 'Fiction');


INSERT INTO books(isbn, author,title,price, subject)
	VALUES ('123412345', 'Harper Lee', 'To Kill a Mockingbird', 7, 'Classics');


-- INSERT ORDERS
INSERT INTO orders( userid, ono, received,shipped ,shipAddress,shipCity,shipState,  
    shipZip)
	VALUES ('dsmith', 12345, to_date ('2018-01-09', 'yyyy-mm-dd'), to_date('2018-01-01', 'yyyy-mm-dd') ,'UR 3092 410 Westhampton Way', 'Richmond', 'VA', 23173);

INSERT INTO orders( userid, ono, received,shipped ,shipAddress,shipCity,shipState,  
    shipZip)
	VALUES ('dsmith', 12346, to_date ('2018-01-09', 'yyyy-mm-dd'),to_date('2018-01-01', 'yyyy-mm-dd') ,'100 lake street', 'Smithfield', 'VA', 23172);
    
INSERT INTO orders( userid, ono, received,shipped ,shipAddress,shipCity,shipState,  
    shipZip)
	VALUES ('mshea', 12347, to_date('2018-02-09', 'yyyy-mm-dd'),to_date('2018-02-02', 'yyyy-mm-dd') ,'UR 3093 410 Westhampton Way', 'Richmond', 'VA', 23173);

INSERT INTO orders( userid, ono, received,shipped ,shipAddress,shipCity,shipState,  
    shipZip)
	VALUES ('lcross', 12348, to_date('2018-02-18','yyyy-mm-dd') ,to_date('2018-02-10','yyyy-mm-dd') ,'89 pine street', 'Melrose', 'VA', 23173);

--- INSERT ODETAILS

INSERT INTO odetails(ono, isbn, qty , price)
	VALUES (12345,'9876543210',2,40);


INSERT INTO odetails(ono, isbn, qty , price)
	VALUES (12346,'6745672345',1,20);


INSERT INTO odetails(ono, isbn, qty , price)
	VALUES (12347,'123412345',3,21);


INSERT INTO odetails(ono, isbn, qty , price)
	VALUES (12348,'0123456789',1,10);

-- INSERT CART 

INSERT INTO cart(userid,  isbn,  qty)
	VALUES ('dsmith','9876543210', 1 );
 
INSERT INTO cart(userid,  isbn,  qty)
	VALUES ('mshea','9876543210', 2 );   