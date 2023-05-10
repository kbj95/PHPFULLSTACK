// https://picsum.photos

// const url = "https://picsum.photos/v2/list?page=1&limit=5";

// fetch(url)
// .then(res => {return res.json()})
// .then(data => makeList(data))
// .catch(console.log);

// function makeList(data){
//     data.forEach(item => {
//         console.log(item);
//         const tagImg = document.createElement('img');
//         tagImg.setAttribute('src',item.download_url);
//         tagImg.style.width = "200px";
//         tagImg.style.height = "200px";
//         document.body.appendChild(tagImg);
//     });
// }

// Trainning;
let url = ""
const btn = document.getElementById('btn');
const btn2 = document.getElementById('btn2');
const box = document.getElementById('box');

function getUrl(){
    // box.replaceChildren(); // 여기서 지우면 브라우저에서 깜빡거림ㅋ...
    url = document.getElementById('adress').value;
    fetch(url)
    .then(res => {return res.json()})
    .then(data => makeList(data))
    .catch(console.log);
}

function makeList(data){
    box.innerHTML = '';
    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src',item.download_url);
        box.appendChild(tagImg);
    });
}

function removeList(){
    // box.replaceChildren();
    box.innerHTML = '';
}

function toggle(){
    if( box.innerHTML === ''){
        getUrl();
    }
    else{
        removeList();
    }
}

btn.addEventListener('click',toggle);

// btn.addEventListener('click', getUrl);
// btn2.addEventListener('click',removeList);




