import { createWebHistory, createRouter } from 'vue-router';
import Main from './components/MainComponent.vue';
import Login from './components/LoginComponent.vue';
import TokenController from './js/TokenController.js';
import Home from './components/HomeComponent.vue';

const configFlg = {
    home: false,
    main: true,
    login: false,
}

const beforeAuth = path => (from, to, next) => {
    const isToken = TokenController.getToken();
    const flg = configFlg[path];

    if( isToken ){
        if ( path == 'login') {
            next('main');
        }
        
        return next();
    }else{
        if(flg){
            next('/login');
        }
        return next();
    }

}

const routes = [
	{
		path: '/',
        name: 'home',
        component: Home,
        beforeExter: beforeAuth('home'),
	}
    ,{
        path: '/main',
        name: 'main',
        component: Main,
        beforeExter: beforeAuth('main'),
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        beforeExter: beforeAuth('login'),
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;