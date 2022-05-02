require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('tablex', require('./components/TablaComponent.vue').default);
Vue.component('formcom', require('./components/FormularioComponent.vue').default);
Vue.component('formpers', require('./components/CustomComponent.vue').default);
Vue.component('formsamp', require('./components/FormSampComponent.vue').default);
Vue.component('formnoti', require('./components/FormNotiComponent.vue').default);

const app = new Vue({
    el: '#app',
    data :{
        menu:0
    }
});