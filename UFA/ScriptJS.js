

	let openModal = document.querySelector('.openModal'),
    modal = document.querySelector('.modal'),
    closeModal = document.querySelector('.closeModal'),
    closeModalSign = document.querySelector('.closeModalSign'),
    signIn = document.querySelector('.signIn'),
    modalSign = document.querySelector('.modalSign');

openModal.addEventListener('click', function() {
    modal.style.display = 'block';
});
closeModal.addEventListener('click', function() {
    modal.style.display = 'none';
});
signIn.addEventListener('click', function(){
    modal.style.display = 'none';
    modalSign.style.display = 'block';
});
closeModalSign.addEventListener('click', function() {
    modal.style.display = 'none';
    modalSign.style.display = 'none';
})