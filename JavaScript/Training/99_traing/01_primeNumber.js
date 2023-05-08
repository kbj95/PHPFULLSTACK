let num = 100;

// 1. 1~입력값의 요소를 가지는 배열을 만들어주세요.
let arr = [];
for( let i = 1; i <= num; i++){
    arr.push(i);
}
// 2. 그 배열에서 소수만 찾아서 새로운 배열을 만들어주세요.
let result = arr.filter(
    function( val ){
        if( val === 1 ){
            return false;
        }
        for(let a = 2; a < val; a++){
            if(val % a === 0){
                return false;
            }
        }
        return true;
    }
);
// 3. 그 배열을 알러트로 출력해 주세요. alert('');
alert(result);
// console.log(result);