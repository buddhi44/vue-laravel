<template>
  <v-content>
    <router-view />

    <dashboard-core-footer />
  </v-content>
</template>

<script>
import appbar from './AppBar' 
  export default {
    name: 'DashboardCoreView',

    components: {
      DashboardCoreFooter: () => import('./Footer'),
    
    },
  }
</script>
