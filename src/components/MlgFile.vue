<template> 

 <v-row justify="space-around">




     <v-dialog
        transition="dialog-bottom-transition"
        max-width="600"
      >
            <template v-slot:activator="{ on, attrs }">
          <v-btn
            color="success"
            v-bind="attrs"
            v-on="on"
          >Générer mes mentions légales</v-btn>
        </template>


        
        <template v-activator="dialog = 1" v-slot:default="dialog">
          <v-card>
            <v-toolbar
              color="primary"
              dark
            >Vos mentions légales</v-toolbar>
            <v-card-text>
                 {{inputs}}
            </v-card-text>
            <v-card-actions class="justify-end">
              <v-btn
                text
                @click="dialog.value = false"
              >Close</v-btn>
            </v-card-actions>
          </v-card>
        </template>
      </v-dialog>
  </v-row>







</template>
<script>
   

  export default {

    name: 'MlgFile',
    valu: 1,

   props:['inputs'],


    data() {
      return {
 

        
      }

      
    },
    

        methods: {

        }
    
  }


  
</script>
