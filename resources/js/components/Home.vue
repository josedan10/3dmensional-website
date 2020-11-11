<template>
    <section
        id="inicio"
        class="home-container"
    >
        <div class="wrapper">
            <div
                v-for="(slide, ind) in slides"
                :key="'slide-' + ind"
                class="slide"
                :class="{ enter: ind === enterSlideIndex, exit: ind === exitSlideIndex }"
            >
                <h1 class="title">{{ slide.title }}</h1>
                <div class="description" v-html="slide.description"></div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
  data: () => ({
    enterSlideIndex: 0,
    exitSlideIndex: null,
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
      setTimeout(() => { this.enterSlideIndex = ++this.enterSlideIndex % this.slides.length }, 1500)
    }
  },
  mounted () {
    setInterval(this.startSlideAnimation, 4500)
  }
}
</script>

<style lang="scss">
    // Animations
    @keyframes enterAnimation {
        from {
            transform: translateX(30%);
            opacity: 0;
        } to {
            transform: translateX(-120%);
            opacity: 1;
        }
    }

    @keyframes exitAnimation {
        from {
            transform: translateX(-120%);
            opacity: 1;
        } to {
            transform: translateX(-170%);
            opacity: 0;
        }
    }

    .home-container {
        min-height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        background: url("/images/home-bg.svg");
        background-size: 75% auto;
        background-repeat: no-repeat;
        background-position: center;

        .wrapper {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;

            .slide {
                opacity: 0;
                position: absolute;
                min-width: 400px;

                .title {
                    text-transform: uppercase;
                    font-weight: bold;
                    font-size: 3.5rem;
                }

                .description {
                  font-size: 1.5rem;
                  
                  p {
                    margin-bottom: 1rem;
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
</style>
