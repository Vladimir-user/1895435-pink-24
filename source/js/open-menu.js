'use strict';

document.querySelector('.page-header__toggle').addEventListener('click', function() {
  iconOpen.classList.toggle("hidden");
  iconClose.classList.toggle("hidden");
  //pageHeader.classList.remove('page-header--light');
  //pageHeader.classList.toggle("page-header--dark");
  mainMenu.classList.toggle("hidden");

  if (pageHeader.classList.contains('page-header--light')) {
    pageHeader.classList.remove('page-header--light');
    pageHeader.classList.add('page-header--dark');
  } else {
    pageHeader.classList.remove('page-header--dark');
    pageHeader.classList.add('page-header--light');
  }
})
