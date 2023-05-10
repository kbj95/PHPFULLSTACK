// 1.동기처리
function delay() {
    const delayTime = Date.now() + 2000;
    while( Date.now() < delayTime ){}
    console.log('B');
}
// console.log('A');
// delay();
// console.log('C');
// A 찍고 2초있다가 B C

// 2.비동기처리
// Promise 이용해서 동기 -> 비동기처럼보이게처리
function delay2() {
    return new Promise ( resolve => {
        const delayTime = Date.now() + 2000;
        while( Date.now() < delayTime ){}
        resolve('B');
    });
}
// console.log('A');
// delay2()
// .then( result => console.log( result ));
// console.log('C');
// A C B

// async 이용해서 동기 -> 비동기처럼보이게처리
async function delay3() {
    const delayTime = Date.now() + 2000;
    while( Date.now() < delayTime ){}
    return 'B';
}
// console.log('A');
// delay3()
// .then( result => console.log( result ));
// console.log('C');
// A C B 


// 3.await : async가 붙은 함수안에서만 사용 가능
function myDelay(ms){
    return new Promise( resolve => setTimeout(resolve, ms) );
    // setTimeout(() => {}, ms);
}

async function getA(){
    await myDelay(1000);
    return 'A';
}

async function getB(){
    await myDelay(2000);
    return 'B';
}
// getA()
// .then( strA => console.log( strA ));
// getB()
// .then( strB => console.log( strB ));

// Promise 방식으로 출력
function getAll1(){
    getA()
    .then( strA => { 
       return getB().then(strB => console.log(`${strA} : ${strB}`))
   });
}
// getAll1();

// async를 이용할 경우
async function getAll2(){
    const strA = await getA();
    const strB = await getB();

    console.log(`${strA} : ${strB}`);
}
// getAll2();

// 병렬처리 방법
async function getAll3(){
    Promise.all([getA(), getB()])
    .then( all => console.log(all.join(' : ')));
}
getAll3();