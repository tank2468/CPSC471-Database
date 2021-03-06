INSERT INTO Patient (
    id,
    Fname,
    Mname,
    Lname,
    DOB,
    address,
    phoneNumber)
VALUES (
    '123456789',
    'John',
    'M',
    'Black',
    '1996-06-19',
    'Northmount Drive',
    '4031000001');

INSERT INTO Health_Conditions (
    hc_number,
    condition_type)
VALUES (
    '1122334455',
    'infectious disease');

INSERT INTO Health_Background (
    hbID,
    heartRate,
    breathingRate,
    drugs,
    paID)
VALUES (
    '6677889900',
    050,
    15,
    'Eye drop',
    '123456789');

INSERT INTO Department (
    Dnum,
    Dname,
    EID)
VALUES (
    '1234',
    'Surgery',
    '7777777777');

INSERT INTO Employee (
    Ename,
    eID,
    eType,
    specialty,
    labType,
    superID)
VALUES (
    'Sarah Black',
    '7777777777',
    'doctor',
    'Heamatology',
    NULL,
    '7777777777');

INSERT INTO Primary_Contact (
    pID,
    phoneNumber)
VALUES (
    '123456789',
    '4035556666');

INSERT INTO Dept_Section (
    Sname,
    Dnumber)
VALUES (
    'Research',
    '1234');

INSERT INTO Patient_middle_name (
    Mname,
    pID)
VALUES (
    'Steven',
    '123456789');

INSERT INTO Health_background_conditions (
    conditions,
    hbID)
VALUES (
    'heart attack',
    '6677889900');

INSERT INTO Nurses_dept_of_practice (
    DeptOfPractice,
    eID)
VALUES (
    'Emergency',
    '7777777777');

INSERT INTO Has_health_conditions (
    hcNumber,
    patientID)
VALUES (
    '9876543210',
    '123456789');

INSERT INTO Stays (
    deptNumber,
    patID)
VALUES (
    '1234',
    '123456789');

INSERT INTO Works_with (
    emp_id,
    p_id)
VALUES (
    '7777777777',
    '123456789');

INSERT INTO Checks_health_background (
    e_ID,
    hb_ID)
VALUES (
    '7777777777',
    '6382984274');

INSERT INTO Checks_health_conditions (
    employee_id,
    hc_num)
VALUES (
    '7777777777',
    '1122334455');