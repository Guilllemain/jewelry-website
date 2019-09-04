require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });
//
window.displayFileName = (input, container, multiple = false) => {
    const file = document.querySelector(`#${input}`);
    file.onchange = () => {
        if (file.files.length > 0) {
            if (multiple) {
                document.querySelector(`#${container}`).innerHTML = file.files.length + ' fichiers sélectionnés';
            } else {
                document.querySelector(`#${container}`).innerHTML = file.files[0].name;
            }
        }
    };
}

window.deleteImage = (url, id) => {
    if (!confirm('Es-tu sûr de vouloir supprimer cette image ?')) {
        return
    }
    axios.delete(url + id)
        .then(response => document.querySelector("#image-" + id).parentNode.removeChild(document.querySelector("#image-" + id)))
        .catch(error => console.log(error))
}
