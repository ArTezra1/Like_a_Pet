window.addEventListener('scroll', function() {
    console.log('Scroll detectado'); // Teste para ver se a função está funcionando
    const header = document.querySelector('.header');
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

