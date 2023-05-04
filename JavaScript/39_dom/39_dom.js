// ------------------------------------------------------
// 1.요소를 선택하는 방법
// ------------------------------------------------------
// 1-1. document.getElementById(); : ID로 선택하는 방법 
document.getElementById('title');
title.style.color = 'blue'; 

// 1-2. document.getElementsByTagName(); : 태그명으로 요소를 선택하는 방법
const LI = document.getElementsByTagName('li');
console.log( LI );

// 연습문제 - 탕수육은 노란색 짬뽕은 빨간색으로 변경
LI[1].style.color = 'yellow';
LI[2].style.color = 'red';

// 연습문제 - 탕수육, 볶음밥, 깐풍기는 배경색상을 오렌지색으로 짜장면,짬뽕,라조기는 배경색상을 베이지색
// 방번호 홀수가 오렌지 짝수가 베이지
for( a = 0; a < LI.length; a++ ){
    if( a % 2 === 0){
        LI[a].style.background = 'beige'; 
    }
    else { LI[a].style.background = 'orange'; }
}

// 1-3. document.getElementsByClassName(); : 클래스명으로 요소를 선택하는 방법
const none_li = document.getElementsByClassName('none_li');
none_li[5].style.color = 'blue';

// 1-4. document.querySelector(); : CSS 선택자로 요소를 선택하는 방법
// 복수의 요소가 있다면 가장 첫번째 것만 선택
const title2 = document.querySelector('#title');
const li2 = document.querySelector('.none_li');

// 1-5. document.querySelectorAll(); : 복수의 요소라도 전부 선택
const li3 = document.querySelectorAll('.none_li');

// ------------------------------------------------------
// 2.요소 조작하기
// ------------------------------------------------------
// 2-1. 콘텐츠를 조작하는 방법
    // 요소명.textContent = 'text'; : 순수 텍스트데이터를 전달, 이전의 태그들은 모두 제거
    title.textContent = '<span>바꿧지롱~</span>'; // 태그까지 모두 텍스트로 출력됨

    // 요소명.innerHTML : 'text'; : 태그는 태그로 인식해서 전달, 이전의 태그들은 모두 제거
    title.innerHTML = '<span>innerHTML로 바꿧지롱~</span>';

    const div1 = document.getElementById('div1');
    div1.innerHTML = '이너로 넣었어요.'; // 이전의 태그(=h2)들은 모두 제거

// 2-2. 요소에 속성을 추가 : 속성명.setAttribute('추가할 속성명','추가할 속성값');
const it = document.getElementById('it');
// it.setAttribute('placeholder','셋어트리뷰트로 삽입');

const aa = document.getElementById('aa');
// aa.setAttribute('href','http://www.naver.com');

// 2-3. 요소에 속성을 제거
it.removeAttribute('placeholder');

    // 이벤트 추가
    // it.addEventListener('mouseenter',function(e){
    //     it.setAttribute('placeholder','셋어트리뷰트로 삽입');
    // });
    // it.addEventListener('mouseleave',function(e){
    //     it.removeAttribute('placeholder');
    // });

    // * 참고사이트 mdn *

// 2-4. 요소의 스타일링
    // ↓ 인라인 스타일로 적용
    // aa.style.textDecoration = 'none';
    // aa.style.color = 'skyblue';

    // ↓ 클래스로 적용
    aa.classList.add('aa1','aa2','aa3');

// 2-5. 새로운 요소 만들기 : document.createElement('태그명');
    // 요소 만들기
    const cli = document.createElement('li');
    cli.innerHTML = '야끼우동';

    // 요소를 자식요소 가장 마지막에 삽입
    const UL = document.getElementsByTagName('ul');
    // UL[0].appendChild(cli);

    // 요소를 특정 위치에 삽입하는 방법
    const li_zzam = document.querySelector('li:nth-Child(3)');
    UL[0].insertBefore( cli, li_zzam);

    // 해당 요소를 지우는 방법
    // cli.remove(); // 화면에 표시되지않게 지우기 (cli변수는 남아있음)

    // 연습 문제 : 라조기와 깐풍기 사이에 "잡채밥","동파육"을 순서대로 넣고 배경색깔 제대로 나오게 수정하기

    const job = document.createElement('li');
    job.innerHTML = '잡채밥';
    const dong = document.createElement('li');
    dong.innerHTML = '동파육';

    const li_ggan = document.querySelector('li:nth-Child(7)');
    UL[0].insertBefore( dong, li_ggan);
    UL[0].insertBefore( job, dong);
    
    for( a = 0; a < LI.length; a++ ){
        if( a % 2 === 0){
            LI[a].style.background = 'beige'; 
        }
        else { LI[a].style.background = 'orange'; }
    }

