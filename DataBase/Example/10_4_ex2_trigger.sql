-- 1.트리거 생성 
--	DELIMITER $$
--	CREATE TRIGGER 트리거명
--	{BEFORE | AFTER} {INSERT | UPDATE| DELETE } -- 실행시기와 작업 선택
--	ON 테이블 -- 트리거를 부착할 테이블
--	FOR EACH ROW -- 아래 나올 조건에 해당하는 모든 row에 적용

--	BEGIN
	-- 트리거시 실행되는 코드
--	IF NEW.컬럼 != OLD.컬럼 THEN -- update 트리거는 old와 new 값이 존재한다.
--		UPDATE 테이블
--		SET 컬럼 = NEW.컬럼
--		WHERE 컬럼 = OLD.컬럼;
--	END IF;
--	END $$
--	DELIMITER ;

DELIMITER $$
CREATE TRIGGER test_update
AFTER UPDATE
ON departments
FOR EACH ROW
BEGIN
	UPDATE titles
	SET title = 'trigger test'
	WHERE emp_no = '10001';
END $$
DELIMITER ;

-- 2. 트리거 실행 
--	설정한 테이블에서 설정한 쿼리를 실행하면 자동으로 작동

-- 3. 트리거 확인 
-- SHOW TRIGGERS;
SHOW TRIGGERS;

-- 4.트리거 삭제 
--	DROP TRIGGERS 트리거명;
DROP TRIGGER test_update;

