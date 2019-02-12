import $ from "jquery"

require('../scss/main.scss');
require('bootstrap');

$(document).ready(function () {
    console.log("ok, JQuery fonctionne !");
});

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});

console.log('Bienvenue sur WebPack!');