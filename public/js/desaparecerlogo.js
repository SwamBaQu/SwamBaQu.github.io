window.addEventListener('scroll', function () {
    const header = document.getElementById('logo-header');
    const scrollY = window.scrollY;

    const startFade = 600;
    const endFade = 676;
    const maxScroll = endFade - startFade;

    if (scrollY >= startFade) {
        const progress = (scrollY - startFade) / maxScroll;
        const opacity = Math.max(1 - progress, 0);
        const translateY = Math.min(progress * 100, 100);

        header.style.opacity = opacity;
        header.style.transform = `translateY(-${translateY}%)`;
    } else {
        header.style.opacity = 1;
        header.style.transform = 'translateY(0)';
    }
});