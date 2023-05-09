(function () {
  console.log('Début du carrousel');
  let bout_carrousel_ouvrir = document.querySelector('.carrousel__ouvrir');
  let carrousel = document.querySelector('.carrousel');
  let carrousel__x = document.querySelector('.carrousel__x');
  let carrousel__figure = document.querySelector('.carrousel__figure');

  let fleche_gauche = document.querySelector('.arrow-left');
  let fleche_droite = document.querySelector('.arrow-right');


  console.log(fleche_gauche)
  let carrousel__form = document.querySelector('.carrousel__form');
  let galerie = document.querySelector('.galerie');
  let galerie__img = galerie.querySelectorAll('img');
  let ancien_index = -1;
  let position = 0;
  let index = 0;
  remplir_carrousel();








  function remplir_carrousel() {

    for (const element of galerie__img) {

      element.dataset.index = position;
      element.addEventListener('mousedown', function () {
        carrousel.classList.add('carrousel--ouvrir')
        index = this.dataset.index;
        afficher_image(index)
        console.log(index);



      })


      creation_img_carrousel(element);
      creation_radio_carrousel();
    }
  }

  function creation_img_carrousel(element) {

    let img = document.createElement('img')

    let longueur = element.src.length - 12
    img.src = element.src.substr(0, longueur) + ".jpg"

    img.setAttribute('src', element.getAttribute('src'))
    img.classList.add('carrousel__img')
    carrousel__figure.appendChild(img)
  }
  /**
   * Création d'un radio-bouton
   */


  function creation_radio_carrousel() {
    let rad = document.createElement('input')
    console.log(rad.tagName)
    rad.setAttribute('type', 'radio')
    rad.setAttribute('name', 'carrousel__rad')
    rad.classList.add('carrousel__rad')
    rad.dataset.index = position
    position = position + 1 // incrémentation de 1
    // position += 1
    // position++
    carrousel__form.appendChild(rad)
    rad.addEventListener('mousedown', function () {
      console.log(index)
      index = this.dataset.index
      afficher_image(this.dataset.index);
    })

  }








  function afficher_image(index) {


    if (ancien_index != -1) {

      carrousel__figure.children[ancien_index].classList.remove('carrousel__img--activer');
      carrousel__form.children[ancien_index].checked = false;
    }

    // redimensionner_carrousel();
    carrousel__figure.children[index].classList.add('carrousel__img--activer');
    carrousel__form.children[index].checked = true;
    ancien_index = index

  }

  // function redimensionner_carrousel(){
  //   // recuperer les dimentions de l'image courante
  //   const imageWidth = carrousel__figure.children[index].naturalWidth;
  //   const imageHeight = carrousel__figure.children[index].naturalHeight;

  //   const windowWidth = window.innerWidth;
  //   const windowHeight = window.innerHeight;

  //   let carrouselWidth = windowWidth;
  //   if (windowWidth > 1000){

  //     carrouselWidth = windowWidth - windowWidth/2


  //   }

  //   let carrouselHeight = carrouselWidth * imageHeight/imageWidth;

  //   carrousel.style.width = `${carrouselWidth}px`;
  //   carrousel.style.height = `${carrouselHeight}px`;
  //   carrousel.style.top = 0
  //   carrousel.style.left = `${(windowWidth - carrouselWidth)/2}`
  //   carrousel.style.left = `${(windowHeight - carrouselHeight)/2}`

  //   //console.log(windowWidth, windowHeight  = " width , height")
  // }




  bout_carrousel_ouvrir.addEventListener('mousedown', function () {
    carrousel.classList.add('carrousel--ouvrir')
    afficher_image(index);
    console.log("boite ouverte");
  });

  carrousel__x.addEventListener('mousedown', function () {
    console.log('fermer la boîte modale')
    carrousel.classList.remove('carrousel--ouvrir')
  });



  fleche_gauche.addEventListener('mousedown', function () {

    if (index <= 0) {
      index = galerie__img.length - 1
      afficher_image(index)
    } else {
      index = index - 1;
      afficher_image(index);
      console.log(index)
    }
  })
  fleche_droite.addEventListener('mousedown', function () {

    if (index >= galerie__img.length - 1) {
      index = 0
      afficher_image(index);
      console.log(index)
    } else {
      index = index + 1;
      afficher_image(index);
      console.log(index)

    }

  })





  //permet de vérifier si carrousel--activer se trouve dans la liste des classes carrousel
  // carrousel.classlist.contain('carrousel--ouvrir')
  // carrousel.classlist.remove('carrousel--ouvrir')


  //mdn classList.contain

})();