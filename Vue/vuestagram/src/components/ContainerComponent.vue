<template>
    <!-- list -->
    <div v-if="$store.state.tabFlg == 0">
        <PostComponent/>
        <button @click="$store.dispatch('getMoreList')" v-if="$store.state.flg">더보기</button>
    </div>
    
    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabFlg == 1">
        <div class="upload-img" :style="`background-image : url(${$store.state.imgUrl})`" :class="$store.state.filterClass"></div>
        <div class="filter-box">
            <div class="filter" :class="item" v-for="item in filterList" :key="item" :style="`background-image : url(${$store.state.imgUrl})`" @click="$store.commit('changeFilter', item)">{{ item }}</div>
        </div>
    </div>

    <!-- 글작성 -->
    <div v-if="$store.state.tabFlg == 2">
        <div class="upload-img" :style="`background-image : url(${$store.state.imgUrl})`" :class="$store.state.filterClass"></div>
        <div>
            <textarea name="content" id="content" placeholder="글쓰세요." class="write-box" @input="$store.commit('changeContent', $event.target.value)">
            </textarea>
        </div>
    </div>

</template>
<script>
import PostComponent from './PostComponent.vue';

export default {
    name: "ContainerComponent",
    data() {
        return {
            filterList:  [ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"]
        }
    },
    components: {
        PostComponent: PostComponent,
    }
}
</script>
<style>
    
</style>