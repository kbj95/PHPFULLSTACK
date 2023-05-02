// ------------------------------------------------------
// 제어문
// ------------------------------------------------------

// ------------------------------------------------------
// 1.조건문 ( if, switch )
// ------------------------------------------------------
// if( 1 > 0 ) {
//     console.log("1은 0보다 크다.");
// } else if( 1 < 0 ){
//     console.log("1은 0보다 작다.");
// } else {
//     console.log("기타 등등");
// }

// let u_age = 30;
// switch ( u_age ){
//     case 20 :
//         console.log("20살");
//         break;
//     case 10 :
//         console.log("10살");
//         break;
    
//     default:
//         console.log(u_age + "살");
//         break;
// }

// ------------------------------------------------------
// 2.반복문 ( while, do_while, for, foreach, for...in, for...of )
// ------------------------------------------------------
// 2-1. while문
// let num = 0;
// while ( num <= 3 ){
//     console.log(num);
//     num++;
// }

// 2-2. do while문
let dan = 2;
let multi = 1;
// do {
//     console.log(dan + " x " + multi + " = " + (dan * multi) );
//     multi++;
// } while ( multi <= 9 );

// 2-3. for문
// multi = 1;
// for( let i = 1; i <= 9; i++ ){
//     console.log( dan + " x " + i + " = " + (dan * i) )
// }

// 2-4. foreach문 : 배열만 루프 가능( = 배열만 foreach메소드를 사용할 수 있다.)
let arr = [1, 2, 3, 4];
// arr.forEach( function(val){
//     console.log(val);
// });

// 2-5. for...in 문 : 모든 객체를 루프 가능
arr = {
    u_name: "홍길동"
    ,u_age: 0
};

for( let i in arr ){
    // console.log( i ); // key가 나옴
    // console.log( arr[i] ); // val이 나옴
    console.log( i + " : " + arr[i] ); // key와 val 다 출력하기
}

// 2-6. for...of 문
arr = [5, 4, 3];
arr.num = 2;
console.log(arr);
for( let i of arr ){
    console.log( i );
}
