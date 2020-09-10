/* eslint-disable no-unused-vars */
/* eslint-disable no-undef */
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

require('./plugins.js')

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('loader-component', require('./components/Loader.vue').default)
Vue.component(
  'services-component',
  require('./components/Services.vue').default
)
Vue.component(
  'contacts-component',
  require('./components/Contacts.vue').default
)
Vue.component(
  'absolute-component',
  require('./components/Absolute.vue').default
)
Vue.component(
  'watermark-component',
  require('./components/Watermarks.vue').default
)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  el: '#app'
})
