<template>
    <div>
        <img :src="product.img" alt="images" class="img">
        <h4 @click="$emit('openModal');">{{product.name}}</h4>
        <p>{{ product.price }} 원</p>
        <p>{{ product.count }} 개</p>
    </div>
</template>
<script>
export default {
    name: "productList",
    props: {
        product: Object,
    }
}
</script>
<style>
    
</style>