let requests = document.querySelectorAll('.request');
requests.forEach(request =>{
	let show = request.querySelector('.showDesc');
	let description = request.querySelector('.description');
	show.addEventListener('click', ()=>{
		description.classList.toggle('hide');
		setTimeout(()=>{description.style.transform = 'scale(1.0)'}, 10);
		show.classList.toggle('hideDeck');
		if (show.classList.contains('hideDeck'))
			description.style.transform = 'scale(0)';
	})
	console.log(description.classList, show)
})