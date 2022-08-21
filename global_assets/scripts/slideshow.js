class Slideshow{
    constructor(id ,imagefiles, imagefolder, size){
        this.files = imagefiles;
        this.slideIndex = 0;
        this.containerId = id;
        this.imagefolder = imagefolder
        this.slideshowContainer = null
        this.size = size
    }

    displaySlide(){
        this.slideshowContainer.style.background = "url(" + encodeURI(this.imagefolder + this.files[this.slideIndex]) + ")"
        document.querySelectorAll("[data-id=" + this.containerId + "]").forEach((dot) =>
            dot.style.color = "slategray"
        )
        document.querySelector("[data-id=" + this.containerId + "][ data-index=\"" + this.slideIndex + "\"]").style.color = "black"
    }

    nextSlide(){
        this.slideIndex += 1;
        if(this.slideIndex > this.files.length-1){
            this.slideIndex = 0;
        }
        this.displaySlide()
    }
    prevSlide(){
        this.slideIndex -= 1;
        if (this.slideIndex < 0){
            this.slideIndex = this.files.length-1;
        }
        this.displaySlide()
    }

    setSlide(index){
        this.slideIndex = index-1;
        if(this.slideIndex > this.files.length-1){
            this.slideIndex = this.files.length-1;
        }else if (this.slideIndex < 0){
            this.slideIndex = 0;
        }
        this.displaySlide()
    }
    
    init(){
        this.slideshowContainer = document.getElementById(this.containerId)
        var parentWidth = this.slideshowContainer.parentElement.clientWidth
        var widthRatio = parentWidth/this.size[0]
        this.slideshowContainer.style.height = widthRatio*this.size[1]*0.8
        this.setSlide(1)
        this.displaySlide()
    }
}