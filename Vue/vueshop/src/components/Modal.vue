<template>
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
        <img :src="products[productNum].img">
        <h4>{{products[productNum].name}}</h4>
        <p>{{products[productNum].content}}</p>
        <!-- <p>{{products[productNum].price * products[productNum].count}}</p> -->
        <p>{{products[productNum].price * productCnt}}</p>
        <!-- <span>{{ productCnt }}</span> -->
        <input type="number" v-model="productCnt" min="0">
        <!-- <button @click="$emit('cntUp');">수량증가</button>
        <span>{{ products[productNum].count }}</span>
        <button @click="$emit('cntDown');">수량감소</button> -->
        <br>
        <br>
        <button type="button" @click="$emit('closeModal'); productCnt = 0;">닫기</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "modal",
    props: {
        modalFlg: Boolean,
        products: Array,
        productNum: Number,
    },
    data() {
        return {
            productCnt: ""
        }
    },
    watch: {
    productCnt(input) {
        if( input > 10 ){
            alert('최대 10개까지 구매 가능합니다');
            this.productCnt = 10;
        }
        }
    },
}
</script>
<style>
    
</style>