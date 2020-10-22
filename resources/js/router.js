import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)


//project pages
import home from './components/Pages/home/home.vue'

const routes=[
    //project routes

     


    //home
    {

        path:'/',
        component:home,
    },

    



   


];

export default new Router({
    mode:'history',
    routes
});