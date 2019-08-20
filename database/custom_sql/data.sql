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