<template>
    <div id="wrap">
        <div id="header">
            <h1>To DO LIST</h1>
            <input type="text" placeholder="할일을 적어주세요." id="content">
            <button type="button" @click="addTodoList()">추가</button>
        </div>

    <TodoComponent 
        :item="item"
        v-for="item in listData" :key = "item"
        @changeItem="getTodoList()"
    />
    </div>
</template>

<script>
import TodoComponent from './components/TodoComponent.vue';
import axios from 'axios';

export default {
    name: 'App',
    data() {
        return {
            listData: [],
        }
    },
    created(){
        this.getTodoList();
    },
    methods: {
        getTodoList(){
            axios.get('/api/items')
            .then(res => {
                // console.log(res.data);
                this.listData = res.data;
            })
            .catch( err => {
                console.log(err);
            })
        },
        addTodoList(){
            let content = document.getElementById('content').value;
            const header = {
                headers: {
                    'Content-Type' : 'application/json',
                }
            }
            const item = {
                item: {
                    content: content,
                }
            }
            axios.post('http://localhost:8000/api/items', item, header)
            .then(res=> {
                this.listData.unshift(res.data);
                console.log(res.data);
            })
            .catch(err => {
                console.log(err);
            })
        },
    },
    components: {
        TodoComponent,
    },
}
</script>
<style>
    @import url('../../css/app.css');
</style>