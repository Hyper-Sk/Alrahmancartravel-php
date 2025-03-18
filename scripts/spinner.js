function spinner() {
    window.addEventListener('load', () => {
        gsap.to('.loader-container', {
            y:"-100%",
        })
    })
}
spinner()