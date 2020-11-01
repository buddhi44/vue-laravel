<template>
  <div class="home col-5 mx-auto py-5 mt-5">
    <h1 class="text-center">Roles</h1>
    <div class="card">
      <div class="card-body">
        
          <div class="form-group">
          <label for="name">Name:</label>
          <input
            type="text"
            v-model="form.name"
            class="form-control"
            id="name"
          />
      
        </div>
        <div class="form-group">
          <label for="name">Role:</label>
          <input
            type="text"
            v-model="form.role"
            class="form-control"
            id="role"
          />
      
        </div>
       
        <button
          @click.prevent="submit"
          type="submit"
          class="btn btn-primary btn-block"
        
        >
          submit
        </button>
      
      </div>


    </div>
  </div>
</template>



<script>

export default {
  data() {
    return {
      form: {
        name:"",
        role: "",
       
      },
    
    };
  },

    methods:{

      submit(){
        
         this.$http.post('http://localhost:8000/api/role',this.form)
         .then(function(response){
            console.log(response);
         });
      }

      

    },

      
    

  };
  

  
</script>