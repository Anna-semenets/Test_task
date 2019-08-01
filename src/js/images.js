	    
	    $(document).ready(function() {
			$("a.single_image").fancybox({
		            'overlayShow' : true,
		            'transitionIn' : 'elastic', 
		            'transitionOut' : 'elastic', 
		            'hideOnContentClick' :true   
		});

		var imgWrappers = document.querySelectorAll('.img_wrapper');
             
		function sendMessage(imgName) {
			var xhr = new XMLHttpRequest();
      		xhr.open("POST", "delete.php");
      		xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
      		xhr.send(JSON.stringify({imgName: imgName }));

      		xhr.onreadystatechange = function() {
        		console.log(this.readyState);
        		if (this.readyState != 4) return;
        		var response = this.responseText;
        		if (response !== 'true') {
           			console.log('error');
        		}
			}
		}

		function deleteImg(event) {
			var targetElem = event.currentTarget;
			var target = event.target;
			if (!target.classList.contains('delete_btn')) return;
			var imgName = targetElem.querySelector('.single_image').dataset.imgName;
			console.dir(imgName);
			sendMessage(imgName);
			targetElem.remove();
		}

		imgWrappers.forEach(function(item) {
			item.addEventListener('click', deleteImg);			
		})
	});	 
