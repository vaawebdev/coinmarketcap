import "./bootstrap";
import Vue from "vue";
import App from "./pages/App.vue";

const app = new Vue({
    el: "#app",
    // @ts-ignore
    components: { App },
    template: `<App />`
});

export default app;
