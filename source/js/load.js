'use strict';

const pageHeader = document.querySelector('.page-header');
const headerToggle = document.querySelector('.page-header__toggle');
const mainMenu = document.querySelector('.main-menu');

headerToggle.classList.toggle('page-header__toggle--active');
mainMenu.classList.toggle('main-menu--close');
pageHeader.classList.toggle('page-header--absolute');
pageHeader.classList.toggle('page-header--light');

headerToggle.addEventListener('click', function () {
  pageHeader.classList.toggle('page-header--light');
  headerToggle.classList.toggle('page-header__toggle--active');
  headerToggle.classList.toggle('page-header__toggle--close');
  mainMenu.classList.toggle('main-menu--close');
})

