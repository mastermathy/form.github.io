document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    var form = document.getElementById("contactForm");
    var formData = new FormData(form);
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", form.action, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        alert("Message sent successfully!");
        form.reset();
      }
    };
    xhr.send(formData);
  });
  