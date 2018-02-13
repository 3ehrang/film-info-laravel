
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap'); 

window.Vue = require('vue');

import VueRouter from 'vue-router';
 
window.Vue.use(VueRouter);

import FilmsManage from './components/films/FilmsManage.vue';
import FilmsCreate from './components/films/FilmsCreate.vue';
import FilmsEdit from './components/films/FilmsEdit.vue';
//import FilmsIndex from './components/films/FilmsIndex.vue';
 
const routes = [
    { path: '/',		components: {filmsManage: FilmsManage} },
    { path: '/create' , component: 	FilmsCreate, name: 'createFilm' },
    { path: '/edit/:id',component: 	FilmsEdit  , name: 'editFilm' },
    //{ path: '/', 		components: {filmsIndex: FilmsIndex} },
]

// show films in list
Vue.component(
	'index-component',
	require('./components/films/FilmsIndex.vue')
);



const router = new VueRouter({ routes })
 
const app = new Vue({ router }).$mount('#app')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*Vue.component('example-component', require('./components/ExampleComponent.vue')); 

const app = new Vue({
    el: '#app'
});*/
