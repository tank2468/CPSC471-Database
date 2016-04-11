CREATE TABLE Patient (
    id char(9) NOT NULL,
    Fname varchar(10),
    Mname varchar(10),
    Lname varchar(10),
    DOB date,
    address varchar(50),
    phoneNumber char(10),
    CONSTRAINT pa_pk PRIMARY KEY (id),
    CONSTRAINT chk_id CHECK(LENGTH(id=9))
);

CREATE TABLE Health_Conditions (
    hc_number char(10) NOT NULL,
    condition_type varchar(30),
    ptnID char(9),
    CONSTRAINT hc_pk PRIMARY KEY (hc_number),
    CONSTRAINT hc_fk FOREIGN KEY (ptnID) REFERENCES Patient(id)
ON DELETE SET NULL
ON UPDATE CASCADE,
    CONSTRAINT chk_hc_num CHECK(LENGTH(hc_number=10))
);

CREATE TABLE Health_Background (
    hbID char(10) NOT NULL,
    heartRate int(3),
    breathingRate int(2),
    drugs varchar(50),
    paID char(9),
    CONSTRAINT hb_pk PRIMARY KEY (hbID),
    CONSTRAINT hb_fk FOREIGN KEY (paID) REFERENCES Patient(id)
ON DELETE SET NULL
ON UPDATE CASCADE,
    CONSTRAINT chk_hbID CHECK(LENGTH(hbID=10))
);

CREATE TABLE Employee (
    Ename varchar(20),
    eID char(10) NOT NULL,
    eType varchar(15),
    specialty varchar(15),
    labType varchar(15),
    superID char(10),
    CONSTRAINT emp_pk PRIMARY KEY (eID),
    CONSTRAINT emp_fk FOREIGN KEY (superID) REFERENCES Employee(eID)
ON DELETE SET NULL
ON UPDATE CASCADE,
    CONSTRAINT chk_eID CHECK(LENGTH(eID=10))
);

CREATE TABLE Department (
    Dnum char(4) NOT NULL,
    Dname varchar(15),
    EID char(10),
    CONSTRAINT dept_pk PRIMARY KEY (Dnum),
    CONSTRAINT dept_fk FOREIGN KEY (EID) REFERENCES Employee(eID)
ON DELETE SET NULL
ON UPDATE CASCADE,
    CONSTRAINT chk_Dnum CHECK(LENGTH(Dnum=4))
);

CREATE TABLE Primary_Contact (
    pID char(9) NOT NULL,
    phoneNumber char(10) NOT NULL,
    CONSTRAINT pc_pk PRIMARY KEY (pID, phoneNumber),
    CONSTRAINT pc_fk FOREIGN KEY (pID) REFERENCES Patient(id)
ON UPDATE CASCADE,
    CONSTRAINT chk_phone CHECK(LENGTH(phoneNumber=10))
);

CREATE TABLE Dept_Section (
    Sname varchar(15) NOT NULL,
    Dnumber char(4) NOT NULL,
    CONSTRAINT ds_pk PRIMARY KEY (Sname, Dnumber),
    CONSTRAINT ds_fk FOREIGN KEY (Dnumber) REFERENCES Department(Dnum)
ON UPDATE CASCADE
);

CREATE TABLE Patient_middle_name (
    Mname varchar(10) NOT NULL,
    pID char(9) NOT NULL,
    CONSTRAINT pmn_pk PRIMARY KEY (Mname, pID),
    CONSTRAINT pmn_fk FOREIGN KEY (pID) REFERENCES Patient(id)
ON UPDATE CASCADE
);

CREATE TABLE Health_background_conditions (
    conditions varchar(20) NOT NULL,
    hbID char(10) NOT NULL,
    CONSTRAINT hbc_pk PRIMARY KEY (conditions, hbID),
    CONSTRAINT hbc_fk FOREIGN KEY (hbID) REFERENCES Health_Background(hbID)
ON UPDATE CASCADE
);

CREATE TABLE Nurses_dept_of_practice (
    DeptOfPractice varchar(15) NOT NULL,
    eID char(10) NOT NULL,
    CONSTRAINT ndop_pk PRIMARY KEY (DeptOfPractice, eID),
    CONSTRAINT ndop_fk FOREIGN KEY (eID) REFERENCES Employee(eID)
ON UPDATE CASCADE
);

CREATE TABLE Has_health_conditions (
    hcNumber char(10) NOT NULL,
    patientID char(9) NOT NULL,
    CONSTRAINT hc_num_pk PRIMARY KEY (hcNumber, patientID),
    CONSTRAINT hc_num_fk FOREIGN KEY (patientID) REFERENCES Patient(id)
ON UPDATE CASCADE,
    CONSTRAINT chk_hc_num CHECK(LENGTH(hcNumber=10))
);

CREATE TABLE Stays (
    deptNumber char(4) NOT NULL,
    patID char(9) NOT NULL,
    CONSTRAINT stays_pk PRIMARY KEY (deptNumber, patID),
    CONSTRAINT stays_fk1 FOREIGN KEY (deptNumber) REFERENCES Department(Dnum)
ON UPDATE CASCADE,
    CONSTRAINT stays_fk2 FOREIGN KEY (patID) REFERENCES Patient(id)
ON UPDATE CASCADE
);

CREATE TABLE Works_with (
    emp_id char(10) NOT NULL,
    p_id char(9) NOT NULL,
    CONSTRAINT ww_pk PRIMARY KEY (emp_id, p_id),
    CONSTRAINT ww_fk1 FOREIGN KEY (emp_id) REFERENCES Employee(eID)
ON UPDATE CASCADE,
    CONSTRAINT ww_fk2 FOREIGN KEY (p_id) REFERENCES Patient(id)
ON UPDATE CASCADE
);

CREATE TABLE Checks_health_background (
    e_ID char(10) NOT NULL,
    hb_ID char(10) NOT NULL,
    CONSTRAINT chb_pk PRIMARY KEY (e_ID, hb_ID),
    CONSTRAINT chb_fk1 FOREIGN KEY (e_ID) REFERENCES Employee(eID)
ON UPDATE CASCADE,
    CONSTRAINT chb_fk2 FOREIGN KEY (hb_ID) REFERENCES Health_Background(hbID)
ON UPDATE CASCADE
);

CREATE TABLE Checks_health_conditions (
    employee_ID char(10) NOT NULL,
    hc_num char(10) NOT NULL,
    CONSTRAINT chc_pk PRIMARY KEY (employee_ID, hc_num),
    CONSTRAINT chc_fk1 FOREIGN KEY (employee_ID) REFERENCES Employee(eID)
ON UPDATE CASCADE,
    CONSTRAINT chc_fk2 FOREIGN KEY (hc_num) REFERENCES Health_Conditions(hc_number)
ON UPDATE CASCADE
);
