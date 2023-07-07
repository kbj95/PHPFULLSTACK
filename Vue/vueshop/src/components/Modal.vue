<template>
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
        <img :src="products[productNum].img">
        <h4>{{products[productNum].name}}</h4>
        <p>{{products[productNum].content}}</p>
        <p>{{products[productNum].price * products[productNum].count}}</p>
        <button @click="$emit('cntUp');">수량증가</button>
        <span>{{ products[productNum].count }}</span>
        <button @click="$emit('cntDown');">수량감소</button>
        <br>
        <button type="button" @click="$emit('closeModal');">닫기</button>
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
    }
}
</script>
<style>
    
</style>