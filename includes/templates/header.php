

                        <!-- ===== BOX ICONS ===== -->
<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

                        <!-- ===== CSS ===== -->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

/*===== VARIABLES CSS =====*/
:root{
  --header-height: 3rem;
  --nav-width: 68px;

  /*===== Colors =====*/
  --first-color: #555;
  --first-color-light: rgb(142, 142, 142);
  --white-color: #dadada;
  
  /*===== Font and typography =====*/
  --body-font: 'Nunito', sans-serif;
  --normal-font-size: 1rem;
  
  /*===== z index =====*/
  --z-fixed: 100;
}

/*===== BASE =====*/
*,::before,::after{
  box-sizing: border-box;
}

body{
  position: relative;
  margin: var(--header-height) 0 0 0;
  padding: 0 1rem;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  transition: .5s;
}

a{
  text-decoration: none;
}

/*===== HEADER =====*/
.header{
  width: 100%;
  height: var(--header-height);
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 1rem;
  background-color: var(--white-color);
  z-index: var(--z-fixed);
  transition: .5s;
}

.header__toggle{
  color: var(--first-color);
  font-size: 1.5rem;
  cursor: pointer;
}

.header__img{
  width: 35px;
  height: 35px;
  display: flex;
  justify-content: center;
  border-radius: 50%;
  overflow: hidden;
}

.header__img img{
  width: 40px;
}

/*===== NAV =====*/
.l-navbar{
  position: fixed;
  top: 0;
  left: -30%;
  width: var(--nav-width);
  height: 100vh;
  background-color: var(--first-color);
  padding: .5rem 1rem 0 0;
  transition: .5s;
  z-index: var(--z-fixed);
}

.nav{
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  overflow: hidden;
}

.nav__logo, .nav__link{
  display: grid;
  grid-template-columns: max-content max-content;
  align-items: center;
  column-gap: 1rem;
  padding: .5rem 0 .5rem 1.5rem;
}

.nav__logo{
  margin-bottom: 2rem;
}

.nav__logo-icon{
  font-size: 1.25rem;
  color: var(--white-color);
}

.nav__logo-name{
  color: var(--white-color);
  font-weight: 700;
}

.nav__link{
  position: relative;
  color: var(--first-color-light);
  margin-bottom: 1.5rem;
  transition: .3s;
}

.nav__link:hover{
  color: var(--white-color);
}

.nav__icon{
  font-size: 1.25rem;
}

/*Show navbar movil*/
.show{
  left: 0;
}

/*Add padding body movil*/
.body-pd{
  padding-left: calc(var(--nav-width) + 1rem);
}

/*Active links*/
.active{
  color: var(--white-color);
  border-bottom-left-radius: 15px;
}

.active::before{
  content: '';
  position: absolute;
  left: 0;
  width: 2px;
  height: 32px;
  background-color: var(--white-color);
}
/* ===== MEDIA QUERIES=====*/
@media screen and (min-width: 768px){
  body{
    margin: calc(var(--header-height) + 1rem) 0 0 0;
    padding-left: calc(var(--nav-width) + 2rem);
  }

  .header{
    height: calc(var(--header-height) + 1rem);
    padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
  }

  .header__img{
    width: 40px;
    height: 40px;
  }

  .header__img img{
    width: 45px;
  }

  .l-navbar{
    left: 0;
    padding: 1rem 1rem 0 0;
  }
  
  /*Show navbar desktop*/
  .show{
    width: calc(var(--nav-width) + 156px);
  }

  /*Add padding body desktop*/
  .body-pd{
    padding-left: calc(var(--nav-width) + 188px);
  }
}
#logo{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 15%;
}
#log_out:hover{
    color: re;
}
.name_user{
  text-align: center;
}

.nav__logo{
  padding: 0%;
  padding-left: 13%;
}
#nav-bar{
  padding-right: 0.57%;
  padding-top: 0.5%;
} 
</style>



<script>
  window.onload = function() {
      const showNavbar = (toggleId, navId, bodyId, headerId) =>{
          const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId),
          bodypd = document.getElementById(bodyId),
          headerpd = document.getElementById(headerId)
      
          // Validate that all variables exist
          if(toggle && nav && bodypd && headerpd){
              toggle.addEventListener('click', ()=>{
                  // show navbar
                  nav.classList.toggle('show')
                  // change icon
                  toggle.classList.toggle('bx-x')
                  // add padding to body
                  bodypd.classList.toggle('body-pd')
                  // add padding to header
                  headerpd.classList.toggle('body-pd')
              })
          }
      }
      
      showNavbar('header-toggle','nav-bar','body-pd','header')
      
      /*===== LINK ACTIVE  =====*/ 
      const linkColor = document.querySelectorAll('.nav__link')
      
      function colorLink(){
          if(linkColor){
              linkColor.forEach(l=> l.classList.remove('active'))
              this.classList.add('active')
          }
      }
      linkColor.forEach(l=> l.addEventListener('click', colorLink))
  };
</script>