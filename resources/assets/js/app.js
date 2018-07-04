
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    data: {
        val_500k: null,
        val_200k: null,
        val_100k: null,
        val_50k: null,
        val_20k: null,
        val_10k: null,
        val_5k: null,
        val_2k: null,
        val_1k: null,
        val_500: null,
        val_pay_1: null,
        val_pay_2: null,
        val_pay_3: null,
        val_pay_4: null,
        val_pay_500k: null,
        val_pay_200k: null,
        val_pay_100k: null,
        val_pay_50k: null,
        val_pay_20k: null,
        val_pay_10k: null,
        val_pay_5k: null,
        val_pay_2k: null,
        val_pay_1k: null,
        val_pay_500: null,
    },
});
