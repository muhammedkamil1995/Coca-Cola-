// slideshow.js

let player;
const videoIds = ['g4xs_5rZdos', 'anotherVideoId', 'yetAnotherVideoId']; // Replace with actual video IDs
let currentIndex = 0;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '100%',
        width: '100%',
        videoId: videoIds[currentIndex],
        playerVars: {
            'autoplay': 1,
            'loop': 1,
            'playlist': videoIds[currentIndex], // Required for loop to work
            'controls': 0, // Hide controls
            'modestbranding': 1, // Reduce branding
            'rel': 0, // Prevent related videos
            'iv_load_policy': 3 // Hide annotations
        },
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerStateChange(event) {
    if (event.data === YT.PlayerState.ENDED) {
        loadNextVideo();
    }
}

function loadNextVideo() {
    currentIndex = (currentIndex + 1) % videoIds.length;
    player.loadVideoById(videoIds[currentIndex]);
}

// Load the first video when the page is ready
document.addEventListener('DOMContentLoaded', () => {
    // Initialize the YouTube API
    const tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Set up the YouTube player
    window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
});
