const tombolCari = document.querySelector('.cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');





keyword.addEventListener('keyup', function(){

    // var xhr = new XMLHttpRequest();

    // xhr.onreadystatechange = function() {
    //     if(xhr.readyState == 4 && xhr.status == 200) {
    //         container.innerHTML = xhr.responseText;
    //     }
    // }

    // xhr.open('GET', 'ajax/ajax_cari.php?keyword=' + keyword.value, true);
    // xhr.send();

    fetch('ajax/ajax_cari.php?keyword=' +keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));

})





//preview image untuk tambah dan ubah
function previewImage() {
    const gambar = document.querySelector('.gambar');
    const imgPreview = document.querySelector('.img-preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}