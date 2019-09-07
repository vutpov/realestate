insert into positions (position) values('Admin'),('Accountant'),('Cashier');

insert into roles(role) values('Admin'),('Accountant'),('Cashier'),('Customer');

INSERT INTO `realestate`.`prop_attrib_details`(`propAttributeDetail`) VALUES ('Title'),('Bedroom'),('Bathroom'),('Floor');


INSERT INTO `realestate`.`property_types`(`propertyType`) VALUES ('House'),('Villa'),('Land'),('Condo'),('Office');

INSERT INTO `realestate`.`partner_types`(`partnerType`) VALUES ('Company');

INSERT INTO `realestate`.`partners`(`partner`, `address`, `phone`, `email`, `partnerTypeId`) VALUES ('Angkor Realty', 'Phnom Penh', '012112121', 'email@yahoo.com', 1);

INSERT INTO `realestate`.`prop_attributes`(`propAttribute`) VALUES ('Title:Soft,Bedroom:5,Bathroom:5,Floor:3');

INSERT INTO `realestate`.`u_m_s`(`um`) VALUES ('M');

INSERT INTO `companies`(`CompanyName`, `description`, `tel`, `address`, `email`, `logo`, `created_at`) VALUES ('SO1.7', 'Real Estate', '012606645', 'Phnom Penh', 'so17@gmail.com', 'logo.png', '2019-08-05 19:26:54');

INSERT INTO `realestate`.`staffs`(`staffId`, `name`, `gender`, `dob`, `address`, `phone`, `email`, `profile`, `created_at`, `positionId`) VALUES (1, 'Vut Pov', 'Male', '2019-08-05', 'Phnom Penh', '012606645', 'vutpov@gmail.com', 'profile.png', '2019-08-05 19:28:25', 1);

INSERT INTO `realestate`.`users`(`UserId`, `username`, `password`, `staffId`) VALUES (1, 'admin', '123456', 1);

INSERT INTO `realestate`.`customers`(`name`, `address`, `phone`, `email`) VALUES ('cheata', 'Phnom Penh', '012453455', 'cheata@gmail.com');

INSERT INTO `realestate`.`agency_types`(`agencyType`) VALUES ('Company');

INSERT INTO `realestate`.`agencies`(`agency`, `address`, `phone`, `email`, `tCOm`, `paid`, `amountDue`, `agencyTypeId`) VALUES ('Centrion', 'Phnom Penh', '076669697', 'centrion@gmail.com', 0, 0, 0, 1);


INSERT INTO `realestate`.`properties` VALUES (1, '2167', '12', '12', '12', 15000.00, 20000.00, NULL, NULL, '4x16', 1, '2019-09-04 07:36:07', '2019-09-04 08:14:29', 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (2, '4577', '12', '12', '12', 20000.00, 30000.00, NULL, NULL, '4x16', 1, '2019-09-04 07:36:17', '2019-09-04 08:14:29', 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (3, '3086', '12', '12', '12', 30000.00, 40000.00, NULL, NULL, '4x16', 1, '2019-09-04 07:36:26', '2019-09-04 08:14:29', 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (4, '8922', '12', '12', '12', 150000.00, 300000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:20:22', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (5, '2527', '12', '12', '12', 250000.00, 300000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:20:27', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (6, '2331', '12', '12', '12', 250000.00, 400000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:20:31', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (7, '8936', '12', '12', '12', 250000.00, 800000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:20:36', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (8, '2150', '12', '12', '12', 150000.00, 340000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:20:50', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (9, '7862', '12', '12', '12', 290000.00, 350000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:21:02', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (10, '8973', '12', '12', '12', 590000.00, 650000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:21:13', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (11, '6478', '12', '12', '12', 590000.00, 750000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:21:18', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (12, '4086', '12', '12', '12', 590000.00, 850000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:21:26', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (13, '4302', '12', '12', '12', 590000.00, 950000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:21:42', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (14, '7009', '12', '12', '12', 590000.00, 1050000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:21:49', NULL, 1, 1, NULL, 1, 1, 1, 1);
INSERT INTO `realestate`.`properties` VALUES (15, '2379415', '12', '12', '12', 20000.00, 30000.00, NULL, NULL, '4x16', 1, '2019-09-06 00:23:35', NULL, 1, 1, NULL, 1, 1, 1, 1);

SET FOREIGN_KEY_CHECKS = 1;

SET GLOBAL event_scheduler = ON;







