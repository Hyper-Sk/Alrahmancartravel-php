function headerSidebar() {
    let open = document.querySelector('.mobile-content .mobile__open')
    let close = document.querySelector(".aside .aside__close")

    
    open.addEventListener('click', () => {
        gsap.to('.aside', {
            x: 0,
            opacity:1
        })
    })
    close.addEventListener('click', () => {
        gsap.to('.aside', {
            x: "100%",
            opacity:0
        })
    })


}
headerSidebar()

