<template>
    <v-flex xs12  class="text-center">


      <v-col cols="12">

         <v-form

            v-model="inputs.valid" 
            method="post"
            lazy-validation
            ref="form"
            
            >
    <!-- @submit.prevent="getValue" -->

 <v-row>


   
        <v-col
          cols="12"
          md="4" 
        >
        <v-text-field
            v-model="inputs.adresse_url"
            :rules="adresse_url_rules"
            label="Adresse URL de votre site internet"
            required
          ></v-text-field>

        <v-text-field
            v-model="inputs.forme_juridique"
            :rules="inputs.forme_juridique_rules"
            label="Forme juridique de l'entreprise"
            required
          ></v-text-field>

        <v-text-field
            v-model="inputs.nom_entreprise"
            :rules="nom_entreprise_rules"
            label="Nom de l'entreprise"
            required
          ></v-text-field>

        <v-text-field
            v-model="inputs.adresse_siege_social"
            :rules="adresse_siege_social_rules"
            label="Adresse du siège social de l'entreprise"
            required
          ></v-text-field>

           </v-col>


            <!-- SECOND BLOC -->



        <v-col
          cols="12"
          md="4" 
        >
        <v-text-field
            v-model="inputs.code_postal"
            :rules="code_postal_rules"
            label="Veuillez entrer  le code postale"
            required
            counter
          ></v-text-field>

        <v-text-field
            v-model="inputs.ville"
            :rules="inputs.ville_rules"
            label="Veuillez entrer  le nom de la ville"
            required
          ></v-text-field>

        <v-text-field
            v-model="inputs.capital_social"
            :rules="capital_social_rules"
            label="Capital social"
            required
          ></v-text-field>

        <v-text-field
            v-model="inputs.ville_tribunal"
            :rules="ville_tribunal_rules"
            label="Veuillez entrer la ville du tribunal"
            required
          ></v-text-field>

           </v-col>




        <!-- </v-col> -->
      </v-row>


   <!-- :disabled="!valid" -->
   <v-btn
   
      color="success"    
      class="mr-4"
      @click="validate" 
      
  
    >
      Générer les Mentions Légales
    </v-btn>
 

    <v-btn
      color="red darken-1"
      @click="resetValidation"
    >
      Effacer les données
    </v-btn>
   <MlgFile  :inputs="inputs" />
  </v-form>
 
 

      </v-col>
    </v-flex>

</template>


<script>

import MlgFile from './MlgFile';

  export default {
    name: 'MlgForm',
    





    components: {
      MlgFile,    
},
// (

       methods: {

      validate () {
   
        this.$refs.form.validate() 
        this.inputs.check = 1
        this.inputs.expand = !this.inputs.expand
      },      

      resetValidation () {
        this.$refs.form.reset()    
      },


    


    },
    data: () => { 

 

   return {



                inputs: {
    progress: 0,                           
    expand: false,        
    valid: true,
    check: 0,
       adresse_url: '',
       forme_juridique: '',
       nom_entreprise: '',
       adresse_siege_social: '',


       code_postal: '',
       ville: '',
       capital_social: '',
       ville_tribunal: '',

      //  siret: '',
      //  rm: '', 
      //  tva_number:  '', 
      //  delegue_protection_donnees: '', 
       

          },

       adresse_url_rules: [
        v => !!v || 'Ce champ est requis' && this.inputs.progress++ * 10,
        v => (v && v.length >= 7) || 'Vous devez entrer une adresse URL (http://.../)',  
      ],

        forme_juridique_rules: [
        v => !!v || 'Ce champ est requis',
        v => (v && v.length >= 3) || 'SCOP, SAS, ASSOCIATION LOI 1901',
      ],

        nom_entreprise_rules: [
        v => !!v || 'Ce champ est requis',
        v => (v && v.length >= 0) || 'Veuillez entrer le nom de l\'entreprise',
      ],

        adresse_siege_social_rules: [
        v => !!v || 'Ce champ est requis',
        v => (v && v.length >= 0) || 'Veuillez entrer  l\'adresse de l\'entreprise',
      ],
        code_postal_rules: [
        v => !!v || 'Ce champ est requis',
        v => (v && v.length === 5 ) || 'Veuillez entrer  un  code postale valide ( ex : 84100)',
        
      ],
         ville_rules: [
        v => !!v || 'Ce champ est requis',
        v => (v && v.length >= 0) || 'Veuillez entrer  le nom de la ville',
       
      ],
              capital_social_rules: [
        v => !!v || 'Ce champ est requis',
        v => (v && v.length >= 0) || 'Capital social',
      ],
        ville_tribunal_rules: [
        v => !!v || 'Ce champ est requis',
        v => (v && v.length >= 0) || 'Veuillez entrer la ville du tribunal',
      ],
 

        }

            //  function copyElementToClipboard(element) {
            //     window.getSelection().removeAllRanges();
            //     let range = document.createRange();
            //     range.selectNode(typeof element === 'string' ? document.getElementById(element) : element);
            //     window.getSelection().addRange(range);
            //     document.execCommand('copy');
            //     window.getSelection().removeAllRanges();
            //   }
    
            // copyElementToClipboard(document.body);
            // copyElementToClipboard('myImageId');

            
      //   siret: '',
      //   siret_rules: [
      //   v => !!v || 'Ce champ est requis',
      //   v => (v && v.length >= 0) || 'Veuillez entrer  le code postale',
      // ],

      //   rm: '',
      //   rm_rules: [
      //   v => !!v || 'Ce champ est requis',
      //   v => (v && v.length >= 0) || 'Veuillez entrer  le nom de la ville',
      // ],

      //   tva_number: '',
      //   tva_number_rules: [
      //   v => !!v || 'Ce champ est requis',
      //   v => (v && v.length >= 0) || 'Capital social',
      // ],
      
      //   delegue_protection_donnees: '',
      //   delegue_protection_donnees_rules: [
      //   v => !!v || 'Ce champ est requis',
      //   v => (v && v.length >= 0) || 'Veuillez entrer la ville du tribunal',
      // ],



   
    },
    // ),

        

    computed: {
      completedTasks () {
        return this.tasks.filter(task => task.done).length
      },
      progress () {
        return this.completedTasks / this.tasks.length * 100
      },
      remainingTasks () {
        return this.tasks.length - this.completedTasks
      },
    },
    


  }

  

</script>
