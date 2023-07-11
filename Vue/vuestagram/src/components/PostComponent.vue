<template>
    <!-- {{ $store.state.lastId }} -->
    <!-- {{ $store.state.boardData }} -->
    <div class="post" v-for="(item, i) in $store.state.boardData" :key="i">
        <!-- <div class="post-img" :style="{ backgroundImage : `url(${item.img})`}"> -->
        <div class="post-img" :style="`background-image : url(${item.img})`">
            <!-- <img :src="item.img"> -->
        </div>
        <div class="post-content">
            <p>ID : {{ item.id }}</p>
            <p>{{ item.likes }} 좋아요</p>
            <p><strong>{{ item.name }}</strong> {{ item.content }}</p>
            <p>{{ item.created_at }}</p>
        </div>
    </div>
</template>
<script>

export default {
    name: 'PostComponent',
}
</script>
<style>
    
</style>