var form = document.querySelector('.autorization-form');

    function handleSubmit(event) {
      event.preventDefault();
      var errorMessage = event.target.querySelector('.error_message');
      var elements = event.target.elements;
      console.log(elements);
     

      var formData = new FormData(event.target);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "autorization.php");
      xhr.send(formData);
      
      xhr.onreadystatechange = function() {
        console.log(this.readyState);
        if (this.readyState != 4) return;
        var response = this.responseText;
        console.log(typeof response);
        if (response === '"falsemail"') {
           errorMessage.innerHTML = 'Неверно введен логин и/или пароль';
        }
        if (response === '"success"') {
                    window.location.replace("select_img.php");
        }
        console.log(this.responseText);
      }
    }
   
    form.addEventListener('submit', handleSubmit);
  