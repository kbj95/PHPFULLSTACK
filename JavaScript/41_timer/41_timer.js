// ------------------------------------------------------
// 타이머 함수
// ------------------------------------------------------

// 1.setTimeout() / clearTimeout()
const timeOut = setTimeout(() => console.log('A'),2000); // 타이머 셋팅

clearTimeout(timeOut); //타이머 제거

// 2.setInterval() / clearInterval()
const myInterval = setInterval(() => console.log('A'),1000); // 안터벌 셋팅

clearInterval(myInterval); // 인터벌 제거

// 연습문제1
// 1~5를 1초마다 콘솔에 출력해 주세요.
let i = 1;

const printNum = setInterval( function(){
    console.log(i);
    i++;
    if (i > 5){
        clearInterval(printNum);
        // i = 1;
    }
},1000);

// 연습문제2
const clock = document.getElementById('clock');
function getTime(){
    const time = new Date();
    const hour = time.getHours();
    const minutes = time.getMinutes();
    const seconds = time.getSeconds();
    const hourFlg = hour > 12 ? '오후 ' + (hour - 12) : '오전 ' + hour ;
    const minFlg = minutes < 10 ? '0' + minutes : minutes ;
    const secondsFlg = seconds < 10 ? '0' + seconds : seconds ;
    clock.innerHTML = hourFlg +" : " + minFlg + " : "+ secondsFlg;
}

let timer = setInterval(getTime, 1000);

// stop 버튼
const stopBtn = document.getElementById('stop');
stopBtn.addEventListener('click',() => {
    clearInterval(timer);
});

// start 버튼
const startBtn = document.getElementById('start');
startBtn.addEventListener('click',() => {
    timer = setInterval(getTime, 1000);
});

