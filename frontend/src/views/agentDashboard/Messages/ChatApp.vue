<template>
    <v-container
    id="dashboard"
    fluid
    tag="section"
  >

                
      
                    <Conversation/>
                    <ContactsList/>
               
                     
    

</v-container>
</template>

<script>
    import Conversation from './Conversation'
    import ContactsList from './ContactList'
    export default {
        name:'ChatApp',
        components: {Conversation,ContactsList},
        data() {
            return {
                selectedContact: null,
                messages: [],
                contacts: [],
            };
        },
        props: {
            user: {
                type: Object,
                required: true
            }
        },

             mounted() {
                 console.log(this.user);
                axios.get('/contacts')
                .then((response) => {
                    console.log(response.data);
                    this.contacts = response.data;
                });
           
                
            },
    }
    