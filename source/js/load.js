'use strict';

const pageHeader = document.querySelector('.page-header');
const headerToggle = document.querySelector('.page-header__toggle');
const mainMenu = document.querySelector('.main-menu');
const iconOpen = document.querySelector('.page-header__icon-open');
const iconClose = document.querySelector('.page-header__icon-close');

iconOpen.classList.toggle('page-header__icon-open--active');
mainMenu.classList.toggle('main-menu--close');
pageHeader.classList.toggle('page-header--light');

headerToggle.addEventListener('click', function() {
  pageHeader.classList.toggle('page-header--light');
  iconOpen.classList.toggle('page-header__icon-open--active');
  iconClose.classList.toggle('page-header__icon-close--active');
  mainMenu.classList.toggle('main-menu--close');
})
