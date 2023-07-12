<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <!-- <router-link to="/">홈으로</router-link>
  <router-link to="/post"> 포스트로</router-link> -->

  <hr>
  <PostComponent :propsTest = 1></PostComponent>
  <hr>
  <h2> {{ data.name }} </h2>
  <button @click="data.name = '김김김'">김김김</button>
  <br>
  <br>

  <h2> {{ data2.name }} </h2>
  <button @click="data2.name = '김김김'">data2</button>
  <br>
  <br>

  <!-- <h2> {{ test }} </h2>
  <button @click="test= '김김김'">김김김</button>
  <br>
  <br> -->

  <router-view></router-view>

</template>

<script>
import { ref, reactive } from 'vue';
import PostComponent from './components/PostComponent.vue';

export default {
  name: 'App',
  setup(){
    let data = ref({
      name: '홍길동',
      age: 20
    });
    let data2 = reactive({
      name: '철수',
      age: 5
    });
    let test = 'bbb';

    return { test, data, data2};
  },
  data() {
    return {
      // flg: true,
    }
  },
  components: {
    PostComponent
}
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
