/* eslint-disable no-undef */
import AOS from "aos"
import "aos/dist/aos.css" // You can also use <link> for styles
import { BootstrapVue } from "bootstrap-vue"

Vue.use(BootstrapVue)
Vue.use(require("vue-moment"))
Vue.use(require("svg-vue"))
Vue.use(require("vue2-smooth-scroll"))

// ..
AOS.init()
