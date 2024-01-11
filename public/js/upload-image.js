const openFileInput = document.getElementById('openFileInput');
const textPhoto = document.getElementById('text-photo');
const fileInput = document.getElementById('fileInput');
const uploadedImage = document.getElementById('uploadedImage');
// Agrega un evento de clic al div para activar el input de archivo
openFileInput.addEventListener('click', () => {
  fileInput.click();
  console.log('hoola')
  
  
})

fileInput.addEventListener('change', () => {
  const file = fileInput.files[0];

  if (file) {
    // Crear un objeto FileReader para leer el archivo como una URL de datos
    const reader = new FileReader();

    // Configurar el evento de carga para actualizar la imagen una vez que se haya cargado
    reader.onload = function (e) {
      console.log(e)
      uploadedImage.src = e.target.result;
      uploadedImage.classList.remove('hidden'); 
      textPhoto.style.display="none"// Mostrar la imagen
    };

    // Leer el archivo como una URL de datos
    reader.readAsDataURL(file);
  }
});