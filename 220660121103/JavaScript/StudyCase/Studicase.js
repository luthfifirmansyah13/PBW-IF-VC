
function generateRandomColor() {
    var randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
    return randomColor;
}


function changeBackgroundColor() {
    document.body.style.backgroundColor = generateRandomColor();
}


window.onload = function() {
    changeBackgroundColor();
};


function showWelcomeMessage() {
    alert("halo perkenalkan nama saya Luthfi Firmansyah saya seorang mahasiswa aktif dari universitas Sebelas April Sumedang Prodi Teknik Informatika");
}

window.onload = function() {
    changeBackgroundColor();
    showWelcomeMessage(); 
    displayProjects();
    displayExperience();
};