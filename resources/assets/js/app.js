
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//var requirejs = require('requirejs');
//
//requirejs.config({
//    //Pass the top-level main.js/index.js require
//    //function to requirejs so that node modules
//    //are loaded relative to the top-level JS file.
//    nodeRequire: require
//});
//
//requirejs(['bootstrap'],
//function   (bootstrap) {
//    //foo and bar are loaded according to requirejs
//    //config, but if not found, then node's require
//    //is used to load the module.
//});

require('bootstrap');
//require(["http://localhost/football-rant/resources/assets/js/'bootstrap"], function () {
//    //foo is now loaded.
//});
import Vue from 'vue';

window.Vue = require('vue');
//window.Bus = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('chat-message', require('./components/ChatMessage.vue').default);

const app = new Vue({
    el: '#app'
});
