
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var app = new Vue({
	el: '#app',

	router: new VueRouter(routes),
	components: {
    	
    },
	data: {
		laracast_url: 'https://laracasts.com/series/modern-css-for-backend-developers',
	},
	methods : {

	},
	computed : {

	},
	mounted() {

	},
	created() {

	},
});

