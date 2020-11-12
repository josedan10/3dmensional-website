<template>
    <div class="menu">
        <nav class="navbar">
            <a v-smooth-scroll href="#inicio" class="logo">
                <img class="large-logo" src="/images/svgs/3dmensional-logo.svg" alt="3Dmensional Agency Logo" title="3Dmensional Agency Logo">
                <img class="small-logo" src="/images/svgs/3Dmensional Isotipo Positivo.svg" alt="3Dmensional Agency Isotipo" title="3Dmensional Agency Logo, Isotipo">
            </a>

            <button @click="toggleMenu" class="menu-icon">
              <img src="/images/svgs/bars.svg" alt="3Dmensional Agency Menu Icon" title="3Dmensional Agency Menu Icon">
            </button>

            <ul class="menu-wrapper" :class="{ opened: openMenu }">
                <li class="menu-item"><a @click="setActiveLink" v-smooth-scroll class="menu-link active" href="#inicio">INICIO</a></li>
                <li class="menu-item"><a @click="setActiveLink" v-smooth-scroll="{ offset: -30 }" class="menu-link" href="#servicios">SERVICIOS</a></li>
                <li class="menu-item"><a @click="setActiveLink" v-smooth-scroll="{ offset: -30 }" class="menu-link" href="#clientes">CLIENTES</a></li>
                <li class="menu-item"><a @click="setActiveLink" v-smooth-scroll="{ offset: -30 }" class="menu-link" href="#nosotros">NOSOTROS</a></li>
                <li class="menu-item"><a @click="setActiveLink" v-smooth-scroll="{ offset: 20 }" class="menu-link" href="#contacto">CONTACTO</a></li>
            </ul>
        </nav>
    </div>
</template>
<script>
export default {
  data: () => ({
    openMenu: false,
  }),
  methods: {
    toggleMenu () {
      this.openMenu = !this.openMenu
    },
    setActiveLink (e) {
      document.querySelector('.menu-link.active').classList.toggle('active')
      e.target.classList.toggle('active')
      this.openMenu = false
    },
    handleActiveLink () {
      const navbar = document.querySelector('.navbar')
      const positionY = window.scrollY
      const maxScroll = 30

      // Shadow on scroll
      if (positionY > maxScroll && !navbar.classList.contains('shadow')) {
        navbar.classList.add('shadow')
      } else if (positionY <= maxScroll && navbar.classList.contains('shadow')) {
        navbar.classList.remove('shadow')
      }

      // Set active section
      const home = document.getElementById('inicio')
      const about = document.getElementById('nosotros')
      const services = document.getElementById('servicios')
      const clients = document.getElementById('clientes')
      const contact = document.getElementById('contacto')

      // Links
      const homeLink = document.querySelector('.menu-link[href="#inicio"]')
      const aboutLink = document.querySelector('.menu-link[href="#nosotros"]')
      const clientsLink = document.querySelector('.menu-link[href="#clientes"]')
      const servicesLink = document.querySelector('.menu-link[href="#servicios"]')
      const contactLink = document.querySelector('.menu-link[href="#contacto"]')

      if (positionY >= contact.offsetTop - maxScroll && !contactLink.classList.contains('active')) {
        document.querySelector('.menu-link.active').classList.remove('active')
        contactLink.classList.add('active')
      } else if (positionY >= about.offsetTop - maxScroll && positionY < contact.offsetTop - maxScroll && !aboutLink.classList.contains('active')) {
        document.querySelector('.menu-link.active').classList.remove('active')
        aboutLink.classList.add('active')
      } else if (positionY >= clients.offsetTop - maxScroll && positionY < about.offsetTop - maxScroll && !clientsLink.classList.contains('active')) {
        document.querySelector('.menu-link.active').classList.remove('active')
        clientsLink.classList.add('active')
      } else if (positionY >= services.offsetTop - maxScroll && positionY < clients.offsetTop - maxScroll && !servicesLink.classList.contains('active')) {
        document.querySelector('.menu-link.active').classList.remove('active')
        servicesLink.classList.add('active')
      } else if (positionY >= home.offsetTop - maxScroll && positionY < services.offsetTop - maxScroll && !homeLink.classList.contains('active')) {
        document.querySelector('.menu-link.active').classList.remove('active')
        homeLink.classList.add('active')
      }
    }
  },
  mounted () {
    window.addEventListener('scroll', this.handleActiveLink)

    this.handleActiveLink()
  }
}
</script>
<style lang="scss">
    @import '../../sass/media-queries.scss';

    .navbar{
        position: fixed;
        z-index: 300;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.75rem;
        transition: all .5s ease;

        .logo {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 250px;

          .large-logo {
            width: 100%;

            @include lt-md {
              display: none;
            }
          }

          .small-logo {
            display: none;
            width: 100%;

            @include lt-md {
              display: block;
            }
          }

          @include lt-md {
            width: 55px;
          }
        }

        &.shadow {
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
            transition: all .5s ease;
        }

        .menu-wrapper {
            display: flex;
            list-style: none;
            margin-bottom: 0;

            .menu-item {
                padding: 0.5rem 2rem;

                a {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: #8e8f93;
                    font-weight: bold;
                    position: relative;

                    &:hover {
                        text-decoration: none;

                        &::after {
                            width: 100%;
                            transition: width .2s ease;
                        }
                    }

                    &::after {
                        content: "";
                        position: absolute;
                        bottom: -5px;
                        height: 4px;
                        background: #8e8f93;
                        width: 0;
                        transition: width .2s ease;
                    }

                    &.active {
                        color:#2a2d34;

                        &::after {
                            background: #2a2d34;
                            width: 100%;
                        }
                    }

                }
            }

            @include lt-md {
              height: 0;
              overflow-y: hidden;
              flex-direction: column;
              justify-content: space-around;
              transition: height 0.5s ease;

              &.opened {
                height: 200px;
                background: rgba(255, 255, 255, 1);
              }

              .menu-item {
                a {
                  &::after {
                    display: none;
                  }
                }
              }
            }

        }

        .menu-icon {
          display: none;
        }

        @include lt-md {
          padding: 1rem;
          flex-wrap: wrap;

          .menu-wrapper {
            width: 100%;
          }

          .menu-icon {
            display: flex;
            height: 30px;

            img {
              height: 100%;
            }
          }
        }
    }
    .language{
        bottom: 1.75rem;
        left: 1.75rem;
        position: fixed;
        cursor: pointer;
        z-index: 100;
    }
</style>
