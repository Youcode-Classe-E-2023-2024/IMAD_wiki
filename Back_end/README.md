var fileInput = document.getElementById('image');
    var file = fileInput.files[0];

    var formData = new FormData();
    formData.append('file', file);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/Survey-Corps_Blog/Back_end/start/middlewarephotos.php', true);

    xhr.onload = function () {
      if (xhr.status === 200) {
        // Handle the response from the server
        console.log(xhr.responseText);
      } else {
        console.error('Error during file upload. Status:', xhr.status);
      }
    };

    xhr.send(formData);
  





