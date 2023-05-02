// -------------------
// console.log() : 콘솔창에 출력하는 함수
// -------------------
// console.log("안녕하세요. js파일입니다.","두번째");


// -------------------
// 1.변수
// -------------------
// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이"; // 중복 선언 가능
// u_name = "갑돌이" // 재할당 가능
// console.log( u_name );

// let : 같은 스코프 내에서 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// u_age = 30; // 재할당 가능


// -------------------
// 2.상수 : 같은 스코프 내에서 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
// -------------------
// const gender = "남자";
// gender = "여자"; // 값이 바뀌지않는다. 재할당 불가능


// -------------------
// 3.스코프
// -------------------

    // 3-1. 전역 스코프
    let u_name = "홍길동";

    // function test() {
    //     console.log(u_name);
    // } 
    // test(); // 홍길동 출력

    // 3-2. 함수 레벨 스코프 : 함수 안에서 선언된 변수는 함수내에서만 사용가능
    function test() {
        console.log(u_name);
        let u_age = 30;
        console.log(u_age);
    }
    // console.log (u_age); // 출력 안됨

    // 3-3. 블록 레벨 스코프 : {}안에서 선언된 변수는 {}안에서만 사용가능
    function test1(){
        if( true ) {
            // let v_test1 = "함수 : 테스트1";
            var v_var1 = " var로 선언 ";
        }
        // console.log(v_test1);
        console.log(v_var1);
    }
    // test1(); // v _test1은 출력 안됨 . let은 블록레벨 스코프.
    // test1(); // "var로 선언" 출력 . var는 함수레벨 스코프.

// -------------------
// 4.호이스팅( hoisting )
// -------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올려지는 것

// console.log( hTest() ); // 코드가 실행 되기전에 명령했지만 실행됨
// console.log( "68 line "+ varTest ); // 실행안됨
// console.log( "69 line "+ varTest ); // varTest를 찾을수 없음
// console.log( "70 line "+ letTest ); // error
// console.log( "71 line "+ constTest ); // error


function hTest() {
    return "함수 : hTest";
}

var varTest = "var : var변수";
// console.log( "79 line "+ varTest ); // 정상출력

let letTest = "let 변수";
// console.log( "82 line "+ varTest ); // 정상출력

const constTest = "const 상수";
// console.log( "85 line "+ constTest ); // 정상출력


