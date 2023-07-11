<template>
  <!-- {{ $store.state.test }} -->

  <!-- header -->
  <div class="header">
    <ul>
      <li v-if="$store.state.tabFlg != 0" class="header-button header-button-left" @click="$store.commit('changeTabFlg', 0); $store.commit('clearState')">취소</li>
      <li>
        <img alt="Vue logo" src="./assets/logo.png" class="logo">
      </li>
      <li v-if="$store.state.tabFlg == 1" class="header-button header-button-right"  @click="$store.commit('changeTabFlg', 2)">다음</li>
    </ul>
  </div>

  <ContainerComponent/>

  <!-- footer -->
  <div class="footer">
    <div class="footer-button-store" v-if="$store.state.tabFlg == 0">
      <label for="file" class="label-store">+</label>
      <!-- <input @change="$store.commit('changeTabFlg', 1)" accept="image/*" type="file" id="file" class="input-file"> -->
      <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
    </div>
  </div>
</template>

<script>
import ContainerComponent from './components/ContainerComponent.vue';

export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList');
  },
  methods: {
    updateImg(e) {
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]);
      this.$store.commit('changeImgUrl', imgUrl);
      this.$store.commit('changeTabFlg', 1);
      // e.target.value = '';
    }
  },
  components: {
    ContainerComponent: ContainerComponent,
  }
}
</script>

<style>
@import url('./assets/css/common.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
