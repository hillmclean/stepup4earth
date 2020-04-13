// creates success button 

(function () {
    const url = homeUrl.url;
    const wpcf7Elm = document.querySelector('.wpcf7');
    wpcf7Elm.addEventListener('wpcf7mailsent', () => {
        window.location.href = url;
    })
})();

