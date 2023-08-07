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

// 연습문제2 방법 1
// const clock = document.getElementById('clock');
// function getTime(){
//     const time = new Date();
//     const hour = time.getHours();
//     const minutes = time.getMinutes();
//     const seconds = time.getSeconds();
//     const hourFlg = hour > 12 ? '오후 ' + (hour - 12) : '오전 ' + hour ;
    
//     const minFlg = minutes < 10 ? '0' + minutes : minutes ;
//     const secondsFlg = seconds < 10 ? '0' + seconds : seconds ;
//     clock.innerHTML = hourFlg +" : " + minFlg + " : "+ secondsFlg;
// }

// let timer = setInterval(getTime, 1000);

// // stop 버튼
// const stopBtn = document.getElementById('stop');
// stopBtn.addEventListener('click',() => {
//     clearInterval(timer);
// });

// // start 버튼
// const startBtn = document.getElementById('start');
// startBtn.addEventListener('click',() => {
//     timer = setInterval(getTime, 1000);
// });

// 연습문제2 방법 2
const clock = document.getElementById('clock');
// getTime(); // 로딩시 바로 출력하기위해 한번 호출해줌
function getTime(){
    const time = new Date();
    const nows = time.toLocaleTimeString();
    clock.innerHTML = '현재 시각 ' + nows;
}
let timer = setInterval(getTime,3000);

const stopBtn = document.getElementById('stop');
stopBtn.addEventListener('click', () => {
    clearInterval(timer)
});

// 오류있음 수정필요@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
const startBtn = document.getElementById('start');
startBtn.addEventListener('click', () =>{
    timer = setInterval(getTime,1000)
});


// 연습문제3 스톱워치
let timerId;
let time = 0;
const stopwatch = document.getElementById("stopwatch");
let  hour, min, sec;


function printTime() {
    time++;
    stopwatch.innerText = getTimeFormatString();
}

//시계 시작 - 재귀호출로 반복실행
function startClock() {
    printTime();
    stopClock();
    timerId = setTimeout(startClock, 1000);
}

//시계 중지
function stopClock() {
    if (timerId != null) {
        clearTimeout(timerId);
    }
}

// 시계 초기화
function resetClock() {
    stopClock()
    stopwatch.innerText = "00:00:00";
    time = 0;
}

// 시간(int)을 시, 분, 초 문자열로 변환
function getTimeFormatString() {
    hour = parseInt(String(time / (60 * 60)));
    min = parseInt(String((time - (hour * 60 * 60)) / 60));
    sec = time % 60;

    return String(hour).padStart(2, '0') + ":" + String(min).padStart(2, '0') + ":" + String(sec).padStart(2, '0');
}


