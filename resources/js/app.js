require('./bootstrap');

window.Vue = require('vue');
import VueLazyLoad from 'vue-lazyload'

Vue.use(VueLazyLoad)
//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const files = require.context('./components', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
	el: '#app'
});
