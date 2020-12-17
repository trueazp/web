function previewImg() {
      const sampul = document.querySelector('#sampul');
      const sampulLabel = document.querySelector('.custom-file-label');
      const imgPrev = document.querySelector('.img-preview');

      sampulLabel.textContent = sampul.files[0].name;

      const fileSampul = new FileReader();
      fileSampul.readAsDataURL(sampul.files[0]);

      fileSampul.onload = function(e) {
        imgPrev.src = e.target.result;
      }
    }

// intro animation
$('#snkCover').transition('fly right', '1500ms');
$('#welcomeMessage').transition('fly left', '1500ms');

// animate the cover
$('#animateButton').click(function () {
  $('#snkCover').transition('fly right', '1500ms');
});

const mainLogo = document.querySelector('#snkCover');
mainLogo.addEventListener('mouseover', function () {
  $('#snkCover').transition('tada');
});

const mainHeader = document.querySelector('#mainHeader');
mainHeader.addEventListener('mouseover', function () {
  $('#mainHeader').transition('jiggle');
});