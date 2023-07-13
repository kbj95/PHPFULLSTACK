<template>
    <div :id="item.id" class="list">
        <ul>
            <li>
                <input type="checkbox" class="check" @click="editTodoList(item.id)" v-bind="{'checked' : item.completed}">
                <span :class="{'line' : item.completed}">{{ item.content }}</span>
                <button type="button" class="delBtn" @click="deleteTodoList(item.id)">X</button>
            </li>
        </ul>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: "TodoComponent",
    props: {
        item: Object,
    },
    data() {
        return {
            // id: 0,
        }
    },
    methods: {
        editTodoList(id){
            const header = {
                headers: {
                    'Content-Type' : 'application/json',
                }
            }
            const item = {
                item: {
                    completed: !this.item.completed,
                }
            }
            axios.put('http://localhost:8000/api/items/' + id, item, header)
            .then(res=> {
                // console.log(res.data);
                this.$emit('changeItem');
            })
            .catch(err => {
                console.log(err);
            })
        },
        deleteTodoList(id){
            const header = {
                headers: {
                    'Content-Type' : 'application/json',
                }
            }
            const divId = document.getElementById(id);
            axios.delete('http://localhost:8000/api/items/' + id, header)
            .then(res=> {
                // console.log(res.data);
                divId.style.display = 'none';
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
}
</script>
<style>
    
</style>