const closeVideo = () => {
    let video = document.querySelectorAll('video');

    video.forEach(element => {
        if(element.play) element.pause()
    });  
}

let video = document.getElementById('video');
let video2 = document.getElementById('video2');
let video3 = document.getElementById('video3');

video.addEventListener('play', () => {
    console.log('video');
   if( video2.play ) video2.pause();
   if( video3.play ) video3.pause();
});

video2.addEventListener('play', () => {
    console.log('video2');
    if( video.play ) video.pause();
    if( video3.play ) video3.pause();
});

video3.addEventListener('play', () => {
    console.log('video3');
    if( video.play ) video.pause();
    if( video2.play ) video2.pause();
});