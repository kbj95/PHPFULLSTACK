// ------------------------------------------------------
// 인라인 이벤트 등록 - onclick
// ------------------------------------------------------


// 1.프로퍼티 리스너
const btn1 = document.getElementById('btn1');
btn1.onclick = function(){
    location.href = "http://www.google.com";
}

// 2. 이벤트 추가 : addEventListener( eventType, function ) 방식
const btn2 = document.querySelector('#btn2');

// 2-1.현재창에서 열기
// btn2.addEventListener('click', () => {
//     location.href = 'http://www.daum.net';
// });
    // 풀어서 쓰면 btn2.addEventListener('click', function(){ 실행문 });

// 2-2.팝업 창 열고 닫기
let newWindow = null;
// 팝업 열기
btn2.addEventListener('click', () => {
    newWindow = open('http://www.daum.net','','width=500px height=500px');
});

// 팝업 닫기 
const btn3 = document.querySelector('#btn3');
// btn3.addEventListener('click', () => {
//     newWindow.close();
// });

// btn3.addEventListener('click',popClose(newWindow));

// 3.이벤트 삭제 : removeEventListener( eventType, function )
// addEventListener()로 등록한 이벤트의 인수(=아규먼트)와 같은 인수를 셋팅해야 삭제됩니다.
// btn3.removeEventListener('click',popClose(newWindow));


// function popClose(pop){
//     pop.close();
// }

// ------------------------------------------------------
// 이벤트 타입
// ------------------------------------------------------
// 1. 마우스 이벤트
// - mousedown - 마우스가 요소안에서 클릭이 눌릴 때 
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown', () => {
    alert('div1 클릭');
});

// - mouseenter - 마우스 포인터가 요소 안으로 진입 했을 때
div1.addEventListener('mouseenter', () => {
    alert('div1 진입');
});



// ------------------------------------------------------
// 연습장
// ------------------------------------------------------
function colorChange(){
    let bg = ['red','blue','purple','yellow','green','pink','skyblue','black','white','orange','hotpink','aqua'];

    let rand_num = Math.floor( Math.random() * bg.length );
    let body = document.getElementById('bg_color');
    body.style.backgroundColor = bg[rand_num];
}

let font_normal = 16;
let btn = document.querySelectorAll('div > button');
function resize(){
    let smallBtn = document.querySelector('.big');
    for (i = 0; i < btn.length; i++){
        if( btn[i] === smallBtn){
            
        }
    }
    if( smallBtn.onclick ){
        if( font_normal <= 7 ) return false;
        font_normal--;
    }
}

