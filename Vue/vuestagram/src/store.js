import{ createStore } from 'vuex'
import axios from 'axios'

const store = createStore({
    state(){
        return {
            boardData: [], // 게시글 데이터
            lastId: '', // 가장 마지막에 로드된 게시물의 ID
            flg: true, // 더보기 버튼 표시용 flg
            tabFlg: 0, // tab UI flg(0:메인, 1:필터, 2:작성)
            imgUrl: '', // 이미지 url
            filterClass: '', // 필터
        }
    },
    mutations: { // 일반적인 js 함수 정의
        // 초기 데이터 셋팅용
        createBoardData(state, data){
            state.boardData = data;
            this.commit('changeLastId', data[data.length -1].id);
        },
        // 더보기 데이터 셋팅용
        addBoardData(state, data){
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // lastId 변경
        changeLastId(state, id){
            state.lastId = id;
        },
        // tab UI flg 변경
        changeTabFlg(state, num){
            state.tabFlg = num;
        },
        // 이미지 URL 변경
        changeImgUrl(state, imgUrl){
            state.imgUrl = imgUrl;
        },
        // 필터명 변경
        changeFilter(state, filter){
            state.filterClass = filter;
        },
        // 초기화
        clearState(state){
            state.filterClass = '';
            state.imgUrl = '';
        }
    },
    actions: {  // 비동기, ajax 처리 정의
        getMainList(context){
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                // console.log(res.data);
                context.commit('createBoardData', res.data);
            })
            .catch( err => {
                console.log(err)
            })
        },
        getMoreList(context){
            axios.get('http://192.168.0.66/api/boards/' + context.state.lastId)
            .then(res => {
                if(res.data){
                    context.commit('addBoardData', res.data);
                    if(context.state.lastId === 1){
                        context.state.flg = false;
                    }
                }
                // else{
                //     // context.state.flg = false;
                //     alert('없어용');
                // }
            })
            .catch( err => {
                console.log(err)
            })
        },
    }
})

export default store