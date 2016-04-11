CREATE TABLE Users (
  Username  VARCHAR(20) NOT NULL,
  Fname     VARCHAR(25),
  Lname     VARCHAR(25),
  Email     VARCHAR(254),
  Password  VARCHAR(32) NOT NULL,
  Usergroup VARCHAR(20),
  CONSTRAINT chk_UG CHECK (Usergroup IN ('SysAdmin', 'Doctor', 'Nurse', 'LabTechnician', 'HospitalAdmin', NULL)),
  CONSTRAINT chk_pw CHECK (LENGTH(Password>6)),
  CONSTRAINT usr_id PRIMARY KEY (Username)
);