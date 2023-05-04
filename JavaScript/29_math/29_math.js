// ------------------------------------------------------
// 수학 관련 메소드
// ------------------------------------------------------
// 1. Math.ceil : 올림
console.log( Math.ceil(3.33) ); // 4
// 2. Math.round : 반올림
console.log( Math.round(3.33) ); // 3
// 3. Math.floor : 내림
console.log( Math.floor(3.83) ); // 3
// 4. Math.random : 0 ~ 1 사이( 0이상~ 10미만 )에 랜덤한 숫자를 뽑음
// console.log( Math.random() );

// 예제 : random() 메소드를 이용해서 1~10까지 랜덤으로 나오게 해주세요.
console.log( Math.floor(Math.random() * 10) + 1 );
