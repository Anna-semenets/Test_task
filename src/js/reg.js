 var form = document.querySelector('.registration-form');

    function handleSubmit(event) {
      event.preventDefault();
      var errorMessage = event.target.querySelector('.error_message');
      var elements = event.target.elements;
      console.log(elements);
     

      var formData = new FormData(event.target);
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "registration.php");
      xhr.send(formData);
      
      xhr.onreadystatechange = function() {
        console.log(this.readyState);
        if (this.readyState != 4) return;
        var response = this.responseText;
        console.log(typeof response);
        if (response === '"false"') {
           errorMessage.innerHTML = 'Пользователь с таким логином уже существует';

        }
        if (response === '"falsemail"') {
           errorMessage.innerHTML = 'Пользователь уже зарегистрирован на данный e-mail';

        }
       
       if (response === '"falsepass"') {
           errorMessage.innerHTML = 'Пароли не совпадают';

        }
         
        console.log(this.responseText);
         if (response === '"success"') {
           window.location.replace("select_img.php");
    }
      }
      
    }
    
    form.addEventListener('submit', handleSubmit);