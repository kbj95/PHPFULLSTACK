let arr = [ 1, 2, 3, 4, 5 ];

// ------------------------------------------------------
// 1.push() 메소드 : 배열에 값 추가
// 기본형 : 변수명.push(추가할 값);
// ------------------------------------------------------
// $arr[] = 6; // PHP에서 배열에 값 추가하는 방법
arr.push( 6 ); // 또는 배열명[index_key_num] = value 로 넣는 방법도 있지만 좋은 방법은 아님 ex)arr[12] = 7 ; 중간에 공백생김


// ------------------------------------------------------
// 2.delete() 메소드 : 배열의 값 삭제(값만 사라지고 인덱스는 남아 있다.)
// 기본형 : delete 배열명[삭제할 인덱스 키]
// ------------------------------------------------------
delete arr[5];

// ------------------------------------------------------
// 3.splice() 메소드 : 배열의 요소를 삭제 또는 교체
// 기본형 : 변수명.splice(방번호, 자를 개수); 배열명.splice(방번호, 자를 개수, 추가할 값);
// ------------------------------------------------------
arr = [1, 2, 3, 4, 5];
arr.splice(2,1);                // 배열에서 arr[2]가 삭제 : arr = [1, 2, 4, 5] (empty없음)
arr.splice(2,0,3);              // 배열의 arr[2]의 자리에 값 3을 추가
arr.splice(2,1,3);              // 배열의 arr[2]의 값을 3으로 변경
arr.splice(arr.length, 0, 10)   // 배열의 가장 뒤에 값 추가 : 배열명.splice(배열명.length, 0, 추가할 값)
arr.splice(2,1,3,5,6,7);        // 3번째 매개변수부터는 가변파라미터로 모든 값을 추가

// ------------------------------------------------------
// 4.indexOf() 메소드     : 배열에서 특정 요소를 찾는데 사용
//   lastIndexOf() 메소드 : 가장 마지막 요소를 찾는데 사용    
// 기본형 : 변수명.indexOf(); 값이 있을 경우 키 번호를 반환하고 없을 경우 -1를 반환
// ------------------------------------------------------
let arr2 = [1,2,3,4,3,5,6,6,1];
arr2.lastIndexOf(6);

// ------------------------------------------------------
// 5.slice() 메소드 : 문자열 자르기
// 기본형 : 변수.slice(시작위치,끝나는위치);
// ------------------------------------------------------
let tt = 'abcdefg';
tt.slice(2); //cdefg
tt.slice(-2); //fg

// 예제 문제
// javaScript
// log
// php 로 콘솔에 출력해 주세요.(indexOf(), lastIndexOf(),slice()메소드를 이용)
let fileName = 'javascript.log.php';

// console.log(fileName.slice(0,fileName.indexOf('.')));
// console.log(fileName.slice(fileName.indexOf('.') + 1, fileName.lastIndexOf('.'))); // 11,14
// console.log(fileName.slice(fileName.lastIndexOf('.') + 1 ));

// 또 다른 방법
// console.log(fileName.slice(-(fileName.length - (fileName.lastIndexOf('.') + 1))));

// let fileSplit = fileName.split('.');
// for ( let i in fileSplit ){
//     console.log( fileSplit[i] );
// }

// ------------------------------------------------------
// 6.concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환
// 기본형 : 합칠변수명1.concat(합칠변수명2,합칠변수명3...);
// ------------------------------------------------------
let arrCon1 = [1,2,3];
let arrCon2 = [10,20,30];
let arrCon3 = arrCon1.concat( arrCon2 );
// console.log( arrCon3 );

// ------------------------------------------------------
// 7.includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별
// 기본형 : 변수명.includes(찾고싶은값); 있으면 true 없으면 false를 반환
// ------------------------------------------------------
let arrInc = [1,2,3,4];
// console.log( arrInc.includes( 2 ) ); // true
// console.log( arrInc.includes( 7 ) ); // false

// ------------------------------------------------------
// 8.sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
// 기본형 : 변수명.sort();
// ------------------------------------------------------
const arrSort = [ 6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40 ];
// arrSort.sort(); // [100, 3, 3, 40, 5, 5, 6, 7, 8, 80, 92]
// arrSort.sort(
//     function( a, b ){
//         return a - b ; // 양수가 오면 위치를 바꾸고 음수가 오면 위치를 바꾸지않음 ex) a = 6 이고 b = 3일때 6-3= 양수이기때문에 위치가 바뀜 
//     }
// ); 
// ↑또는 arrSort.sort( (a ,b) => a - b ); [3, 3, 5, 5, 6, 7, 8, 40, 80, 92, 100] 오름차순

// arrSort.sort(
//     function( a, b ){
//         return b - a ;
//     }
// ); 
// ↑또는 arrSort.sort( (a ,b) => b - a ); [100, 92, 80, 40, 8, 7, 6, 5, 5, 3, 3] 내림차순

// ------------------------------------------------------
// 9.join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열 만들어 줍니다.
// ------------------------------------------------------
const arrJoin = ["안녕","하세","요"];
arrJoin.join(); // '안녕,하세,요'
arrJoin.join(''); // '안녕하세요'
arrJoin.join('/'); // '안녕/하세/요'

// ------------------------------------------------------
// 10.every() 메소드 : 배열의 모든 요소들이 주어진 함수를 통과하는지 판별
// 모두 통과하면 true 하나라도 통과하지 못하면 false
// ------------------------------------------------------
const arrEvery = [ 1, 2, 3, 4, 5 ];
let result = arrEvery.every(
    function( val ){
        return val <= 5;
    }
);
// 또는 result = arrEvery.every( val => val <= 5 );
console.log( result );

// 예제 : every를 사용해서 모든 요소를 2로 나머지가 0인지 판별해주세요
let result2 = arrEvery.every(
    function( val ){
        return val % 2 === 0;
    }
);
// 또는 result2 = arrEvery.every( val => val % 2 === 0 );
console.log( result2 );

// ------------------------------------------------------
// 11.some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
// 하나라도 통과하면 true를 반환
// ------------------------------------------------------
const arrSome = [ 1, 2, 3, 4, 5 ];
let result3 = arrSome.some(
    function(val){
        return val >= 5;
    }
);
// 또는 result3 = arrSome.some( val => val >= 5 );
console.log(result3);

// ------------------------------------------------------
// 12.filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환 
// ------------------------------------------------------
const arrFilter = [ 1, 2, 3, 4, 5 ];
let result4 = arrFilter.filter(
    function( val ){
        return val >= 3;
    }
);
// 또는 result4 = arrFilter.filter( val => val >= 3 );
console.log( result4 ); // [ 3, 4, 5 ]