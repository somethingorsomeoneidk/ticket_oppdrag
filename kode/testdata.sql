test data for data basen



-- Insert test data into bruker table
INSERT INTO `ticketoppdrag`.`henvendelser` (``) VALUES
('user1', 'password1', 'user1@example.com', 1),
('user2', 'password2', 'user2@example.com', 2),
('user3', 'password3', 'user3@example.com', 1);

-- Insert test data into ticket-status table
INSERT INTO `ticket-nettside`.`ticket-status` (`idticket-status`, `status`) VALUES
(1, 'Open'),
(2, 'Closed'),
(3, 'In Progress');

-- Insert test data into kategorier table
INSERT INTO `ticket-nettside`.`kategorier` (`kategorinavn`) VALUES
('Category 1'),
('Category 2'),
('Category 3');

-- Insert test data into ticket table
INSERT INTO `ticket-nettside`.`ticket` (`ticket-innhold`, `bruker_brukerid`, `ticket-status_idticket-status`, `kategorier_idkategorier`) VALUES
('Ticket 1', 1, 1, 1),
('Ticket 2', 2, 2, 2),
('Ticket 3', 3, 3, 3);