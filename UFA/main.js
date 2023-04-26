let openModal = document.querySelector('.openModal'),
	    modal = document.querySelector('.modal'),
	    closeModal = document.querySelector('.closeModal')
	openModal.addEventListener('click', function(){
		modal.style.display = 'block';
	})
	closeModal.addEventListener('click', function(){
		modal.style.display = 'none';
	})