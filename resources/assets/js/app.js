
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
        val_500k: 0,
        val_200k: 0,
        val_100k: 0,
        val_50k: 0,
        val_20k: 0,
        val_10k: 0,
        val_5k: 0,
        val_2k: 0,
        val_1k: 0,
        val_500: 0,
        val_pay_1: 0,
        val_pay_2: 0,
        val_pay_3: 0,
        val_pay_4: 0,
        val_pay_500k: 0,
        val_pay_200k: 0,
        val_pay_100k: 0,
        val_pay_50k: 0,
        val_pay_20k: 0,
        val_pay_10k: 0,
        val_pay_5k: 0,
        val_pay_2k: 0,
        val_pay_1k: 0,
        val_pay_500: 0,
    },
});
