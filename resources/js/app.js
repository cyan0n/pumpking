require('./bootstrap');

window.Vue = require('vue');
import VueLazyLoad from 'vue-lazyload'

Vue.use(VueLazyLoad)

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('slider', require('./components/SliderComponent.vue').default);

const app = new Vue({
	el: '#app'
});