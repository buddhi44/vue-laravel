<template>
    <v-container
    id="dashboard"
    fluid
    tag="section"
  >
           

        <div class="red" v-if="users">
            
             <h3>Hello, {{ users.name }} </h3>
             <span> {{ users .email }} </span>

            
        </div>

 </v-container>
</template>

<script>

import User from '../../log/api/user'


 export default {
        
        
        data() {
            return {
                users:null,
                
            }
        },
       
            created(){
                this.$http.get('http://127.0.0.1:8000/api/getDetails/2')
                .then(function(response){
                    this.users=response.body.oneUser;
                });
            }
    
    }
    
</script>

