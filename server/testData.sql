
INSERT INTO users(firstName, lastName, username, email,city, postCode, houseNumber, password, confirmPassword, birthdate, createdDate, modifyDate, createUser, modifyUser, country)
VALUES('Marcel', 'Hacker', 'hacker', 'mhacker@example.com', 'Wien', 1120, 12, 'demo123.', 'demo123.', '1999-12-20', CURRENT_TIMESTAMP, NULL, 'admin', NULL, 'Austria');

INSERT INTO users(firstName, lastName, username, email,city, postCode, houseNumber, password, confirmPassword, birthdate, createdDate, modifyDate, createUser, modifyUser, country)
VALUES('Admin', null, 'admin', NULL, 'Wien', 1120, 12, 'admin123.', 'admin123.', '1999-12-20', CURRENT_TIMESTAMP, NULL, 'root', NULL, 'Austria');