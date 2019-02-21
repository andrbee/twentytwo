window.onload = function() {
   var buttonOrder = document.getElementById('buttonOrder'),
       buttonAboutNav = document.getElementById('buttonAboutStudioNav'),
       mainBottomNav = document.getElementById('mainBottomNav'),
       footerContentNav = document.getElementById('footerContentNav'),
       elementAbout = document.getElementById('aboutStudio'),
       mainBottom = document.getElementById('mainBottom'),
       footerContent = document.getElementById('footerContent'),
       collectionPortfolio = document.querySelectorAll('.main__bottom__wrapper-portfolio-content__item'),
       collectionPortfolioArr = Array.prototype.slice.call(collectionPortfolio, 0),
       showAll = document.getElementById('showAll'),
       portfolioContent = document.getElementById('portfolioContent'),
       closePopup = document.getElementById('closePopup'),
       overlay = document.getElementById('overlay'),
       popupPortfolio = document.getElementById('popupPortfolio'),
       jobTitle = document.getElementById('jobTitle'),
       jobText = document.getElementById('jobText'),
       jobImg = document.getElementById('jobImg'),
       headerTop = document.getElementById('headerTop'),
       writeUsBlock = document.getElementById('write-us'),
       writeUsButton = document.getElementById('write-us-button'),
       closePopupWriteUs = document.getElementById('closePopup-write-us'),
       projectApplicationButton = document.getElementById('project-application-button'),
       projectApplication = document.getElementById('project-application'),
       closeProjectApplication = document.getElementById('close-project-application'),
       gamburger = document.getElementById('gamburger'),
       wrapper = document.getElementById('wrapper'),
       nav = document.getElementById('nav'),
       elemS = mainBottom;

   function setInfoPopup() {
      var name = this.getAttribute('data-name');
      var text = this.getAttribute('data-text-about');
      var image = this.getAttribute('data-href-image');

      if(name && text && image) {
         jobTitle.textContent = name;
         jobText.textContent = text;
         jobImg.src = image;
         overlay.classList.remove('none');
         popupPortfolio.classList.remove('none');
         headerTop.scrollIntoView({block: "end"});
         elemS = mainBottom
      }
   }

   function gamburgerAction() {
      wrapper.classList.add('no-scroll');
      nav.classList.add('nav-mobile');
   }


   function projectApp(e) {
      e.preventDefault();
      overlay.classList.remove('none');
      projectApplication.classList.remove('none');
      headerTop.scrollIntoView({block: "end"});
      elemS = projectApplicationButton;
   }

   function writeUs(e) {
      e.preventDefault();
      overlay.classList.remove('none');
      writeUsBlock.classList.remove('none');
      headerTop.scrollIntoView({block: "end"});
      elemS = writeUsButton;
   }

   function close() {
      popupPortfolio.classList.add('none');
      overlay.classList.add('none');
      writeUsBlock.classList.add('none');
      projectApplication.classList.add('none');
      elemS.scrollIntoView({block: "start"});
   }

   function showAllClick() {
      portfolioContent.classList.remove('hide-portfolio');
      showAll.classList.add('none');
   }

   function scrollElementAbout(e) {
      e.preventDefault();
      wrapper.classList.remove('no-scroll');
      nav.classList.remove('nav-mobile');
      elementAbout.scrollIntoView({block: "end", behavior: "smooth"});
   }

   function scrollPortfolio(e) {
      e.preventDefault();
      wrapper.classList.remove('no-scroll');
      nav.classList.remove('nav-mobile');
      mainBottom.scrollIntoView({block: "start", behavior: "smooth"});

   }

   function ScrollFooterContent(e) {
      e.preventDefault();
      wrapper.classList.remove('no-scroll');
      nav.classList.remove('nav-mobile');
      footerContent.scrollIntoView({block: "end", behavior: "smooth"});
   }


   if(collectionPortfolio.length < 7) {
      showAll.classList.add('none');
   } else {
      portfolioContent.classList.add('hide-portfolio');
      showAll.addEventListener('click',showAllClick);
   }


   collectionPortfolioArr.map(function (element) {
      element.lastElementChild.addEventListener('click',setInfoPopup);
   });

   gamburger.addEventListener('click', gamburgerAction);
   buttonOrder.addEventListener('click',projectApp);
   buttonAboutNav.addEventListener('click',scrollElementAbout);
   mainBottomNav.addEventListener('click',scrollPortfolio);
   footerContentNav.addEventListener('click', ScrollFooterContent);
   writeUsButton.addEventListener('click',writeUs);
   projectApplicationButton.addEventListener('click',projectApp);
   closeProjectApplication.addEventListener('click',close);
   closePopupWriteUs.addEventListener('click',close);
   closePopup.addEventListener('click',close);
   overlay.addEventListener('click',close);
};
