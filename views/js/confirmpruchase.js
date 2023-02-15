
const modal = document.querySelector('.modal');
const showModal = document.querySelector('.showModal');
const hideModal = document.querySelector('.hideModal');
// new payment 
const addShowModal = document.querySelector('.addShowModal');
const modalNew = document.querySelector('.modalNew');
const hideModalNew = document.querySelector('.hideModalNew');


// show modal when we click on confirm pruchase button
showModal.addEventListener('click', function()
{
    modal.classList.remove('hidden');
});

// hide modal when we click on cancel button
hideModal.addEventListener('click', function()
{
    modal.classList.add('hidden');
});

// show modal when we click on payment button
addShowModal.addEventListener('click', function()
{
    modalNew.classList.remove('hidden');
    modal.classList.add('hidden');
});

// hide modal when we click on cancel button
hideModalNew.addEventListener('click', function()
{
    modalNew.classList.add('hidden');
});



