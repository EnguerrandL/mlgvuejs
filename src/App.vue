<template>
  <v-app>
    <v-app-bar
      app
      color="orange lighten-1"
      dark
    >
      <!-- <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          id="breathing"
          contain
          src="https://www.netmedia.fr/wp-content/uploads/2020/10/Logos-NETMEDIA-2020-BLANC.png"
          transition="scale-transition"
          width="200"
        />
      </div> -->
      <v-spacer></v-spacer>
        <div class="h1 mr-6" >Mentions Légales Générateur</div>
    </v-app-bar>

    <v-main >
        <v-container id="" bg fill-height  align="center" justify="center" >
              <v-layout class="mainBack">
          
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          id="breathing"
          
          contain
          src="https://www.netmedia.fr/wp-content/uploads/2020/10/Logos-NETMEDIA-2020-BLANC.png"
          width="500"
        />
         


                    
      <!-- <MlgForm  /> -->
      <!-- <ComingSoon  /> -->



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
// import MlgForm from './components/MlgForm';
// import ComingSoon from './components/ComingSoon';






export default {
  name: 'App',

components: {
    // MlgForm,
    // ComingSoon,

  },
      method: {

  },



  data() {
    return {


    }

  }


  


};
</script>

<style lang="css">

.mainBack{
    background-color: #FFA726;



}

#breathing {
    margin-left: auto !important;
    margin-right: auto !important;
    -webkit-animation: breathing 5s ease-out infinite normal;
    animation: breathing 5s ease-out infinite normal;
 
    }


@-webkit-keyframes breathing {
  0% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  25% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  60% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  100% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }
}

@keyframes breathing {
  0% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }

  25% {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }

  60% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }

  100% {
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
  }
}

  
</style>