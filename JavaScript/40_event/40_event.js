// 인라인 이벤트 등록
// onclick

// 프로퍼티 리스너
const btn1 = document.getElementById('btn1');
btn1.onclick = function(){
    location.href = "http://www.google.com";
}

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

