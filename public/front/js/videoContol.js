const closeVideo = () => {
    let video = document.querySelectorAll('video');
    console.log(video.length);

    video.forEach(element => {
        if(element.play) element.pause()
    });  
}