import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import MlgFile from './components/MlgFile';

Vue.config.productionTip = false

new Vue({
  
  vuetify,
  render: h => h(App)
}).$mount('#app')

Vue.use(VueRouter)


const routes = [
  {
path: "/",
    component: MlgFile,
    redirect: "/mlgfile",
    children: [
      {
        path: "mlgfile",
        name: "mlgfile",
        component: MlgFile
      },
    ]
  },
  // { path: "*", component: NotFound },
];
export default routes;