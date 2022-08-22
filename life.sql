CREATE TABLE `life` (
    `ID` INTEGER NOT NULL,
    `_id` VARBINARY(12),
    `name` LONGTEXT,
    `contact` LONGTEXT,
    `email` LONGTEXT,
    PRIMARY KEY (`ID`)
) CHARSET=utf8mb4;



-- { _id: null }
INSERT INTO `life` (`ID`, `_id`, `name`, `contact`, `email`)
    VALUES
        (0, x'6129D8A1512E090677EE916D', 'Hitesh', '9999999999', 'hitesh@hiteshchoudhary.com');


-- { _id: null }
INSERT INTO `life` (`ID`, `_id`, `name`, `contact`, `email`)
    VALUES
        (1, x'6129D8A1512E090677EE916E', 'Mark', '9999999888', 'mark@example.com');