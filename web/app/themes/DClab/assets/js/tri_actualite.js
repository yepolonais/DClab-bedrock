console.log('coucou');


jQuery(function () {
  jQuery('option').click(function () {
    let maCategorie = this.value.toLowerCase(); //* enregistre la catégorie sélectionnée par l'utilisateur dans le <select>
    console.log(maCategorie);
    jQuery('article').each(function () {
      // console.log(jQuery(this)[0].className);
      if (jQuery(this)[0].className.includes(maCategorie)) //* vérifie que la catégorie sélectionnée est présente dans les class des articles
      {
        jQuery(this).fadeIn(500);
      }
      else
      {
        jQuery(this).fadeOut(500);
      }
    });
  });
});

