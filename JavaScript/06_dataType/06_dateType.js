// -------------------
// typeof() : 데이터 타입을 알려주는 함수
// -------------------


// -------------------
// 1.기본 데이터 타입
// -------------------

    // 1-1 : 숫자 (number)
    let num = 1;

    // 1-2 : 문자열 (string)
    let str = "안녕";

    // 1-3 : 불리언 (boolean)
    let bool = true;

    // 1-4 : null
    let test1 = null;

    // 1-5 : undefined
    let test2;

    // 1-6 : 심볼 ( symbol )
    const S_CONST1 = Symbol("심볼입니다.");
    const S_CONST2 = Symbol("심볼입니다.");
    // S_CONST1 === S_CONST2; // 겉으로 보기엔 같지만 다르다.false를 반환


// -------------------
// 2.객체 타입 ( JSON ) 
// -------------------
    // 2-1 : 연상배열 느낌의 object ↓
    let obj1 = {
        u_name: "홍길동"
        ,u_age: 30
        ,u_gender: "남자"
        ,test : function(){
            console.log("객체 함수 test")
        }
        ,addr: {
            addr1: "대구"
            ,addr2: "중구"
        }
    }
    // 호출방법 : obj1.u_name; obj_test(); obj1.addr.addr1;


    // 2-2 : 배열 ( Array ) : 데이터타입이 array로 뜨는건아니고 object로 뜸
    let arr = [ "탕수육","짜장면","짬뽕" ];
    // 호출방법 : arr[0];

    // Date

    // Object
