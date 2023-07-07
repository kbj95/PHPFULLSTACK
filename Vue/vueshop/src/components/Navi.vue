<template>
    <!-- nav -->
    <div class="nav">
        <!-- <a href="#">Home</a>
        <a href="">PRODUCT</a>
        <a href="">ACC</a>
        <a>{{ product1 }}</a> -->
        <a v-for="item in navList" :key = "item">{{item}}
        </a>
    </div>
</template>
<script>
export default {
    name: 'Navi',
    props: {
        // product1: String,
        navList: Array,
    }
}
</script>
<style>
    
</style>