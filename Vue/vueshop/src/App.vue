<template>
  <img alt="Vue logo" src="./assets/logo.png">

  <!-- nav -->
  <Navi :navList="navList"/>

  <!-- modal -->
  <!-- @자식이 보내는 값 가져오고 :자식에게 값 보내기-->
  <Modal 
    @closeModal="modalFlg = false; products[productNum].count = 1" 
    :modalFlg="modalFlg"
    :products="products"
    :productNum="productNum"
    @cntUp="plus(productNum)"
    @cntDown="minus(productNum)"
  />

  <!-- <div class="bg_black" v-if="modalFlg">
    <div class="bg_white">
      <img :src="products[productNum].img">
      <h4>{{ products[productNum].name }}</h4>
      <p>{{ products[productNum].content }}</p>
      <p>{{ products[productNum].price * products[productNum].count }}</p>
      <button type="button" @click="plus(productNum);">수량증가</button>&nbsp;<span>{{ products[productNum].count }}</span>
      &nbsp;
      <button type="button" @click="minus(productNum);">수량감소</button><br>
      <button type="button" @click="modalFlg = false ; products[productNum].count = 1">닫기</button>
    </div>
  </div> -->

  <!-- 상품 리스트 -->
  <!-- <div v-for="(item, i) in products" :key = "i">
    <img class="img" :src="item.img" alt="images">
    <h4 @click="openmodal(i)">{{ item.name }}</h4>
    <p>{{ item.price }}</p>
    &nbsp;<button type="button" v-on:click="item.count--">수량감소</button>
  </div> -->

  <ProductList 
    :product="product"
    @openModal="modalFlg = true; productNum=i" 
    v-for="(product, i) in products" :key = "i"
  />

  <!-- if -->
  <p v-if="1 == 1">if문 테스트</p>

  <!-- <div>
    <h4>{{ product1 }}</h4>
    <p>{{ price1 }}원</p>
  </div>
  <div>
    <h4 :style="styleR">{{ product2 }}</h4>
    <p>{{ price2 }}원</p>
  </div> -->
</template>

<script>
// 받아오기
import data from './assets/js/data.js';

import Navi from './components/Navi.vue';
import ProductList from './components/ProductList.vue';
import Modal from './components/Modal.vue';

export default {
  name: 'App',
  data() { // 데이터 바인딩
    return {
      // products: 
      // ['티셔츠', '바지', '점퍼'],
      // count : 1,
      navList : ['홈', '상품', '기타'],
      products: data,
      modalFlg: false,
      productNum: 1,
      // [
      //   {name: '티셔츠', price: '3800', count : 1, img : require('@/assets/t.png')}
      //   ,{name: '바지', price: '3800', count : 1, img: require('@/assets/pants.jpg')}
      //   ,{name: '점퍼', price: '10000', count : 1, img: require('@/assets/outer.jpg')}
      // ],
      product1: '양말',
      price1: '3800',
      product2: '바지',
      price2: '5000',
      styleR: 'color:red',
    }
  },
  methods: {  // 함수를 설정하는 영역
    plus(productNum){
      if(this.products[productNum].count < 10){
        this.products[productNum].count++
      }  
    },
    minus(productNum){
      if(this.products[productNum].count > 0){
        this.products[productNum].count--
      }
    },
    openmodal(i){
      this.modalFlg = true
      this.productNum = i
    },
    // closemodal(productNum){
    //   this.modalFlg = false
    // }
  },
  components: {  // 컴포넌트 정의
    Navi: Navi, // Navi로 생략가능
    ProductList: ProductList,
    Modal: Modal,
  }
}
</script>

<style>
@import url('./assets/css/app.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
