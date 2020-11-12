<template>
  <section
      id="inicio"
      class="home-container"
  >
    <div class="content">
      <div class="wrapper">
        <div
          class="slide"
          :class="slideClass"
        >
          <div class="title">{{ slides[enterSlideIndex].title }}</div>
          <div class="description" v-html="slides[enterSlideIndex].description"></div>
        </div>
      </div>

      <div class="info">
        <h1>Agencia de Marketing Digital</h1>
        <div class="info-description">
          Ayudamos a impulsar marcas y a crecer en el Mundo Digital. Servicio de <b class="design">Diseño</b>, <b class="development">Desarrollo</b>, <b class="marketing">Marketing Digital</b>.
        </div>

        <a class="action-btn" href="#contacto" v-smooth-scroll>¡Lleva tu idea a otra dimensión!</a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data: () => ({
    enterSlideIndex: 0,
    exitSlideIndex: null,
    slideClass: ['enter'],
    slides: [
      {
        title: 'Creamos',
        description: '<p>Construimos, diseñamos y llevamos a cabo tus ideas y sueños.</p><p> No hay imposibles.</p>'
      },
      {
        title: 'Impactamos',
        description: '<p>Te ayudamos a impulsar y mejorar tu presencia digital.</p><p> No te quedes atrás.</p>'
      },
      {
        title: 'Consolidamos',
        description: '<p>Nos involucramos en tu proyecto al máximo.</p><p> Tu éxito es nuestro éxito.</p>'
      }
    ]
  }),
  methods: {
    startSlideAnimation () {
      // Check if is not the first animation
      if (this.exitSlideIndex !== null) {
        this.exitSlideIndex = ++this.exitSlideIndex % this.slides.length
      } else {
        this.exitSlideIndex = this.enterSlideIndex
      }
      this.slideClass = ['exit']
      setTimeout(() => {
        this.enterSlideIndex = ++this.enterSlideIndex % this.slides.length
        this.slideClass = ['enter']
      }, 1600)
    }
  },
  mounted () {
    setInterval(this.startSlideAnimation, 4000)
  }
}
</script>

<style lang="scss">
@import '../../sass/media-queries.scss';

    // Animations
    @keyframes enterAnimation {
        from {
            // transform: translateX(20vw);
            opacity: 0;
        } to {
            // transform: translateX(0vw);
            opacity: 1;
        }
    }

    @keyframes exitAnimation {
        from {
            // transform: translateX(0vw);
            opacity: 1;
        } to {
            // transform: translateX(-20vw);
            opacity: 0;
        }
    }

    $developmentColor: #124074;
    $marketingColor: #F7B32C;
    $designColor: #9E0031;


    .home-container {
        min-height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url("/images/home-bg.svg");
        background-size: 70% auto;
        background-repeat: no-repeat;
        background-position: center;

        .content {
          display: flex;
          justify-content: space-between;
          align-items: stretch;
          width: 100%;
          max-width: 1200px;

          .info {
            padding: 2rem;
            max-width: 650px;
            min-width: 450px;
            width: 36%;
            border-radius: 1rem;
            background: white;
            box-shadow: 0 10px 10px rgba(42, 45, 52, 0.3);

            h1 {
              font-weight: bold;
              font-size: 1.5rem;
              margin-bottom: 2rem;
              color: $developmentColor;
              text-align: center;
            }

            .info-description {
              font-size: 1.125rem;
            }

            .action-btn {
              padding: 1rem;
              border-radius: 1rem;
              margin-top: 2rem;
              color: #fff;
              background-color: $developmentColor;
              transition: all .5s ease;
              display: block;
              font-weight: bold;
              text-align: center;
              font-size: 1.2rem;

              &:hover {
                background-color: #838f93;
                color: #fff;
                text-decoration: none;
                transition: all .5s ease;
              }
            }
          }

          .wrapper {
              display: flex;
              max-width: 600px;
              width: 40%;
              padding-right: 2rem;
              position: relative;

              .slide {
                  opacity: 0;
                  position: relative;
                  top: 0;
                  width: 100%;

                  .title {
                      text-transform: uppercase;
                      color: $developmentColor;
                      // text-align: center;
                      font-weight: bold;
                      font-size: 3.5rem;
                  }

                  .description {
                    font-size: 1.5rem;

                    p {
                      margin-bottom: 1rem;
                      // text-align: center;
                    }
                  }

                  &.enter {
                      animation: enterAnimation 2s ease forwards;
                  }

                  &.exit {
                      animation: exitAnimation 2s ease forwards;
                  }
              }

          }
        }


        @include lt-lg {
          .content {
            flex-wrap: wrap;
            justify-content: space-around;

            .wrapper {
              .slide {
                .title {
                  font-size: 2.8rem;
                }
  
                .description {
                  font-size: 1.2rem
                }
              }
            }
          }
        }

        @include lt-md {
          align-items: stretch;

          .content {
            padding: 2rem;
            height: 100%;
            display: grid;
            grid-template-rows: repeat(2, 1fr);
            grid-gap: 4rem;
            justify-items: center;

            .info {
              grid-row: 1;
            }

            .wrapper {
              grid-row: 2;
              height: 50%;

              .slide {
                .title {
                  font-size: 2.2rem;
                  text-align: center;
                }

                .description  {
                  font-size: 1rem;
                  text-align: center;
                }
              }
            }
          }
        }
    }
</style>
