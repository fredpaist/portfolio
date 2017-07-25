/**
 * Created by fredp on 6/14/2017.
 */

var Vue = require( 'vue/dist/vue' );
var VueRouter = require('vue-router/dist/vue-router');
var VueResource = require('vue-resource');

var componentPath = './resources/components/';
var ProgressBar = require( './components/Progress.vue' );
var AboutMe = require( './components/AboutMe.vue' );
var Portfolio = require( './components/Portfolio.vue' );

// Main Vue instance that bootstraps the frontend.
const router = new VueRouter({
    routes: [
        // dynamic segments start with a colon
        { path: '/', component: AboutMe },
        { path: '/portfolio', component: Portfolio },
    ]
});

Vue.use(VueRouter)
Vue.use(VueResource)

new Vue( {
    router: router,
    el: '#body',
    http: {
        emulateJSON: true,
        emulateHTTP: true
    }
} );


