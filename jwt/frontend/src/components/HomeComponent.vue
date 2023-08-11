<template>
	<div>
		<h1>HomeComponent</h1>
		<router-link to="./login">로그인 화면으로</router-link>&nbsp;
		<button @click="btn('main')">메인 화면으로</button>
	</div>
</template>

<script>
import router from '../router.js';

export default {
	name: "HomeComponent",
	methods: {
		btn(path){
			router.push(path);
		}
	},
}
</script>
<style>

</style>