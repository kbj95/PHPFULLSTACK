-- 1.  테이블 생성
-- CREATE TABLE 테이블명(
-- 	컬럼 타입(크기) NOT NULL --널값이 들어갈 수 없음
-- 	,컬럼 타입 DEFAULT(값) --초기값 지정
-- 	,CONSTRAINT PK명 PRIMARY KEY(컬럼) --PK설정
-- 	,CONSTRAINT FK명 FOREIGN KEY(컬럼)
-- 		REFERENCE 참조테이블(참조컬럼) [ON DELETE 동작 / ON UPDATE 동작]  -- FK설정
-- 	,CONSTRAINT UNIQUE명 UNIQUE (컬럼) -- UNIQUE설정
-- 	,CONSTRAIN TCHECK명 CHECK (조건) -- CHECK설정 
-- );

CREATE TABLE student (
	stu_no INT NOT NULL
	,stu_birth DATE NOT NULL
	,stu_name VARCHAR(20) NOT NULL
	,stu_addr VARCHAR(100) NOT NULL
	,stu_phone_no VARCHAR(11) NOT NULL
	,stu_gender	ENUM('M','F') NOT NULL
	,stu_from_date	DATE NOT NULL
	,stu_to_date DATE	NOT NULL
	,stu_status	ENUM('0','1','2','3') NOT NULL
	,CONSTRAINT PK_STUDENT_STU_NO PRIMARY KEY(stu_no)
);

CREATE TABLE grade (
	stu_no INT 
	,sub_no INT
	,sub_sco INT NOT NULL
	,com_date DATE	NOT NULL
	,CONSTRAINT PK_GRADE_GROUP PRIMARY KEY(stu_no,sub_no) 
	-- mariaDB에서는 primary key 이름이 설정되지 않아서 primary key(칼럼명1,''')만 적어도된다. 
);

CREATE TABLE professor (
	prof_no INT	NOT NULL
	,prof_name VARCHAR(20) NOT NULL
	,prof_birth	DATE NOT NULL
	,prof_degr_no INT	NULL
	,prof_email INT(50) NULL
	,prof_title VARCHAR(10)	NOT NULL
	,prof_class_no VARCHAR(6) NULL
	,prof_gender ENUM('M','F')	NOT NULL
	,prof_from_date DATE	NOT NULL
	,CONSTRAINT PK_PROFESSOR_PROF_NO PRIMARY KEY(prof_no)
);

CREATE TABLE subject (
	sub_no INT NOT NULL
	,sub_semester ENUM('0','1','2','3') NOT NULL
	,prof_no INT NOT NULL
	,sub_name VARCHAR(200) NOT NULL
	,sub_fixnum INT NOT NULL
	,sub_room INT NOT NULL
	,sub_start_time TIME	NOT NULL
	,sub_end_time TIME NOT NULL
	,tb_no INT NULL
	,sub_com ENUM('Y','N') NOT NULL
	,CONSTRAINT PK_SUBJECT_SUB_NO PRIMARY KEY(sub_no)
);

CREATE TABLE text_book (
	tb_no INT NOT NULL
	,tb_name VARCHAR(30)	NOT NULL
	,CONSTRAINT PK_TEXT_BOOK_TB_NO PRIMARY KEY(tb_no)
);


