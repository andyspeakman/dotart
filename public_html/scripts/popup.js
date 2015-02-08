function popUp(title, fileName, artist, imageWidth, imageHeight) {
    var imageRef = '../../artists-work/' + artist + "/";
    imageRef += fileName + '_en.jpg';
    myLightWindow.activateWindow({
        href: imageRef, 
        title: title, 
        author: artist,
        width: imageWidth,
        height: imageHeight
    });
}

function fixedPopup(fileName) {
    myLightWindow.activateWindow({
        href: fileName, 
        title: 'enlargement', 
        author: 'dot-art',
        width: 670,
        height: 670
    });
 }