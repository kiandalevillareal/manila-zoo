'use strict';

const subscribe = document.getElementById('subscribe');
const newsletterForm = $('#news__form');

subscribe.addEventListener('click', function(e) {

    e.preventDefault();

    newsletterForm.parsley().validate()
})