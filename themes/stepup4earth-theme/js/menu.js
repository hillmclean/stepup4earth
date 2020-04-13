(function() {
    const menuBtn = document.querySelector('.hamburger');
    const menuList = document.getElementById('primary-menu');
    const header = document.getElementById('masthead');

    menuBtn.addEventListener('click', () => {
	menuBtn.classList.toggle('is-active');
	menuList.classList.toggle('menu-show');
    })
    document.addEventListener('click', e => {
	const menuElem = header.contains(e.target);
	if(!menuElem){
	    menuList.classList.remove('menu-show');
	}
    })
})();
