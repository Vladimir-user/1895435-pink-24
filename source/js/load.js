'use strict';

const pageHeader = document.querySelector('.page-header');
const mainMenu = document.querySelector('.main-menu');
const iconOpen = document.querySelector('.page-header__icon-open');
const iconClose = document.querySelector('.page-header__icon-close');

mainMenu.classList.toggle('hidden');
iconOpen.classList.toggle('hidden');
pageHeader.classList.toggle('page-header--light');
