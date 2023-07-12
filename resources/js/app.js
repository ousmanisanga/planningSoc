import './bootstrap';
import 'bootstrap/dist/css/bootstrap.css';
import 'animate.css';


import { createApp} from "vue";

import UsersList from "./components/users/UsersList.vue";

const app = createApp({});

app.component('users-list', UsersList);





app.mount('#app');
