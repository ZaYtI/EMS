document.querySelectorAll('.js-slider-thumbnail').forEach(function(thumbnailElement) {
    thumbnailElement.addEventListener('click', function(event) {
        event.preventDefault()
        const imgId = event.currentTarget.getAttribute('href')
        document.querySelector(imgId).scrollIntoView({ behavior: 'smooth' })
    })
})

