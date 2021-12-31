'use strict';

document.querySelector('.page-header__toggle').addEventListener('click', function() {
const headerContainer = document.querySelector('.page-header');
const iconOpen = document.querySelector('.page-header__icon-open');
const iconClose = document.querySelector('.page-header__icon-close');
const mainMenu = document.querySelector('.main-menu');
  iconOpen.classList.toggle("hidden");
  iconClose.classList.toggle("hidden");
  headerContainer.classList.toggle("page-header--dark");
  mainMenu.classList.toggle("hidden");
})
