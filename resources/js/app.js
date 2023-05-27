import './bootstrap';

// import 'admin-lte/plugins/jquery/jquery.min.js';
// import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js';
// import 'admin-lte/plugins/datatables/jquery.dataTables.min.js';
// import 'admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js';
// import 'admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js';

// import 'admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js';
// import 'admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js';
// import 'admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js';
 // import toastr from 'toastr/build/toastr.min.js';
  // import 'admin-lte/dist/js/adminlte.min.js';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
// import { createApp } from 'vue';

import { createRouter,createWebHistory } from 'vue-router';
import Routes from './router.js';
import Sidebar from './components/Sidebar.vue';
import Navbar from './components/Navbar.vue';

import App from './App.vue';


const app=createApp({
    components:{
        'sidebar': Sidebar,
        'navbar': Navbar,
    }
});
const router=createRouter({
    routes:Routes,
    history: createWebHistory(),
});
 const sidebar=createApp(Sidebar);


app.use(router);
// app.mount('#sidebar');
app.mount('#app');
