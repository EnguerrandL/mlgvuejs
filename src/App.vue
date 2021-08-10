<template>
  <v-app>
    <v-app-bar
      app
      color="orange lighten-1"
      dark
    >
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="https://www.netmedia.fr/wp-content/uploads/2020/10/Logos-NETMEDIA-2020-BLANC.png"
          transition="scale-transition"
          width="200"
        />
      </div>
      <v-spacer></v-spacer>
        <div class="h1 mr-6" >Mentions Légales Générateur</div>
    </v-app-bar>

    <v-main >
        <v-container>
              <v-layout>


                    
      <MlgForm  />



          </v-layout>
        </v-container>
    </v-main>





      <v-footer
    color="primary lighten-1"
    padless
  >
    <v-row
      justify="center"
      no-gutters
    >

      <v-col
        class="orange lighten-1 py-4 text-center white--text"
        cols="12"
      >
        {{ new Date().getFullYear() }} — <strong>Réalisé par l'agence NetMédia</strong>
      </v-col>
    </v-row>
  </v-footer>
  </v-app>
</template>

<script>
import MlgForm from './components/MlgForm';






export default {
  name: 'App',

components: {
    MlgForm,

  },
      method: {

  },



  data() {
    return {


    }

  }


  


};
</script>
