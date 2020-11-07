<template>
    <div
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
                <p>{{ slide.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data: () => ({
    enterSlideIndex: 0,
    exitSlideIndex: null,
    slides: [
      {
        title: 'Creamos',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
      },
      {
        title: 'Impactamos',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
      },
      {
        title: 'Consolidamos',
        description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
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
      setTimeout(() => { this.enterSlideIndex = ++this.enterSlideIndex % this.slides.length }, 1000)
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
            transform: translateX(200px);
            opacity: 0;
        } to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes exitAnimation {
        from {
            transform: translateX(0);
            opacity: 1;
        } to {
            transform: translateX(-200px);
            opacity: 0;
        }
    }

    .home-container {
        min-height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        background: url("/images/home-bg.svg");
        background-size: cover;

        .wrapper {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;

            .slide {
                opacity: 0;
                position: absolute;

                .title {
                    text-transform: uppercase;
                    font-weight: bold;
                    font-size: 2.75rem;
                }

                &.enter {
                    animation: enterAnimation 1.5s ease forwards;
                }

                &.exit {
                    animation: exitAnimation 1.5s ease forwards;
                }
            }

        }
    }
</style>
