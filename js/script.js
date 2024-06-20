document.addEventListener('DOMContentLoaded',  () => {
  const currentUrl = window.location.href;
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
      if (currentUrl.includes(link.getAttribute('href'))) {
          link.classList.add('current-page');
      }
  });

  const bgMenu = document.getElementById('bg_menu');
  const navUl = document.querySelector('nav ul');

 
  bgMenu.addEventListener('click',  () => {
      
      navUl.classList.toggle('show');
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const modal = document.createElement('div');
  modal.id = 'modalContact';
  modal.className = 'modal';
  modal.innerHTML = `
      <div class="modal_content">
      <a href="#" class="close" id="closePopupBtn">&times;</a>
          <h2>Me contacter</h2>
          <form id="contactForm">
              <label for="name">Votre nom :</label>
              <input type="text" id="name" placeholder="Votre nom" required>
              <label for="email">Votre email :</label>
              <input type="email" id="email" placeholder="Votre email" required>
              <label for="message">Votre message :</label>
              <textarea id="message" placeholder="Votre message" required></textarea>
              <input type="submit" value="Envoyer la demande">
          </form>
          
      </div>
  `;
  document.body.appendChild(modal);

  const openPopupBtns = document.querySelectorAll('.openPopupBtn');
  const closePopupBtn = document.getElementById('closePopupBtn');
  const bodyModalClose = document.querySelector('.bcg');

  openPopupBtns.forEach(btn => {
      btn.addEventListener('click', (event) => {
          event.preventDefault();
          modal.style.display = 'flex';
      });
  });

  closePopupBtn.addEventListener('click', (event) => {
      event.preventDefault();
      modal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {

      if (event.target === bodyModalClose) {
          modal.style.display = 'none';   
      }
  });
});


document.addEventListener("DOMContentLoaded", function() {
    const toggles = document.querySelectorAll('.toggle');

    toggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            const isActive = toggle.classList.contains('active');

            toggles.forEach(function(otherToggle) {
                if (otherToggle !== toggle) {
                    otherToggle.classList.remove('active');
                    otherToggle.nextElementSibling.style.display = 'none';
                }
            });

            if (!isActive) {
                toggle.classList.add('active');
                toggle.nextElementSibling.style.display = 'block';
            } else {
                toggle.classList.remove('active');
                toggle.nextElementSibling.style.display = 'none';
            }
        });
    });
});
