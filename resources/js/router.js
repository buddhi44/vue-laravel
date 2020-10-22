import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)


//project pages
import home from './components/home.vue'
import about from './components/Pages/about.vue'
import services from './components/Pages/services.vue'
import contacts from './components/Pages/contact.vue'
import FAQ from './components/Pages/faq.vue'


const routes=[
    //project routes

     


    //home
    {

        path:'/',
        component:home,
    },

    {

        path:'/about',
        component:about,
    },

    {

        path:'/services',
        component:services,
    },
    {

        path:'/contact',
        component:contacts,
    },
    {

        path:'/faq',
        component:FAQ,
    },




    



   


];

export default new Router({
    mode:'history',
    routes
});