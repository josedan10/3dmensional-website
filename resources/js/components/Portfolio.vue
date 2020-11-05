<template>
    <div
      id="proyectos"
      class="portfolio-container"
      :style="{backgroundImage: !isMobileViewport ? `url(${visibleProjects[activeProjectInd].backgroundImage}` : `url(${visibleProjects[activeProjectInd].mobileImg}`}"
    >
        <div
            class="bgImg"
        ></div>

        <!-- Categories filters -->
        <div class="categories">
            <button
                class="category"
                :class="{
                    active: categoriesFilter === category,
                    light: visibleProjects[activeProjectInd].colorCondition === 'light',
                    dark: visibleProjects[activeProjectInd].colorCondition === 'dark'
                }"
                v-for="(category, ind) in categories"
                :key="'category-' + ind"
                @click="categoriesFilter = category"
            >{{category.toUpperCase()}}</button>
            <button
                class="category"
                :class="{
                    active: categoriesFilter === 'all',
                    light: visibleProjects[activeProjectInd].colorCondition === 'light',
                    dark: visibleProjects[activeProjectInd].colorCondition === 'dark'
                }"
                @click="categoriesFilter = 'all'"
            >TODOS LOS PROYECTOS</button>
        </div>

        <!-- Carousel -->
        <carousel-3d
            class="projects-container"
            ref="projectsCarousel"
            @after-slide-change="slideChange"
            :border="0"
            height="400"
            width="500"
        >
            <slide
                class="project"
                v-for="(project, ind) in visibleProjects"
                :key="'project-' + ind"
                :index="ind"
                :style="{backgroundImage: `url(${visibleProjects[ind].miniImage}`}"
            ></slide>
        </carousel-3d>
    </div>
</template>

<script>
export default {
  data: () => ({
    categories: [
      'Marketing',
      'Desarrollo',
      'Diseño'
    ],
    activeProjectInd: 0,
    categoriesFilter: 'all',
    projects: [
      {
        name: 'Arte & Estilo Salazar',
        backgroundImage: '/images/projects/arte-y-estilo-salazar-bg.png',
        miniImage: '/images/projects/arte-y-estilo-salazar-min.png',
        mobileImg: '/images/projects/arte-y-estilo-salazar-mob.png',
        logo: 'arte-y-estilo-logo',
        categories: ['Marketing', 'Diseño', 'Desarrollo'],
        subCategories: ['Branding empresarial', 'Carpinteria'],
        colorCondition: 'light',
        description: 'Laboris dolore eu aute pariatur laboris officia. Pariatur duis dolor occaecat culpa nostrud aute eiusmod dolor duis qui proident mollit. Pariatur consequat proident excepteur sunt culpa cillum. Id mollit ad deserunt consectetur do ipsum nisi sint velit incididunt cillum elit nisi sunt. Officia ex elit duis duis ullamco exercitation cupidatat sunt laborum aliquip proident ex ullamco. Cupidatat nostrud qui Lorem quis mollit enim sint. Do excepteur nulla excepteur id sit commodo ipsum irure aliqua voluptate consequat et est.',
        images: []
      },
      {
        name: 'By Nikole Mendoza',
        backgroundImage: '/images/projects/byNikoleMendoza-bg.png',
        miniImage: '/images/projects/byNikoleMendoza-min.png',
        mobileImg: '/images/projects/byNikoleMendoza-mob.png',
        logo: 'byNikoleMendoza-logo',
        categories: ['Marketing', 'Diseño'],
        colorCondition: 'dark',
        subCategories: ['Branding personal', 'Maquillaje', 'Influencer'],
        description: 'Laboris dolore eu aute pariatur laboris officia. Pariatur duis dolor occaecat culpa nostrud aute eiusmod dolor duis qui proident mollit. Pariatur consequat proident excepteur sunt culpa cillum. Id mollit ad deserunt consectetur do ipsum nisi sint velit incididunt cillum elit nisi sunt. Officia ex elit duis duis ullamco exercitation cupidatat sunt laborum aliquip proident ex ullamco. Cupidatat nostrud qui Lorem quis mollit enim sint. Do excepteur nulla excepteur id sit commodo ipsum irure aliqua voluptate consequat et est.',
        images: []
      },
      {
        name: 'Elion',
        backgroundImage: '/images/projects/elion-bg.png',
        miniImage: '/images/projects/elion-min.png',
        mobileImg: '/images/projects/elion-mob.png',
        logo: 'elion-logo',
        categories: ['Marketing', 'Diseño'],
        colorCondition: 'dark',
        subCategories: ['Branding personal', 'Fitness', 'Influencer'],
        description: 'Laboris dolore eu aute pariatur laboris officia. Pariatur duis dolor occaecat culpa nostrud aute eiusmod dolor duis qui proident mollit. Pariatur consequat proident excepteur sunt culpa cillum. Id mollit ad deserunt consectetur do ipsum nisi sint velit incididunt cillum elit nisi sunt. Officia ex elit duis duis ullamco exercitation cupidatat sunt laborum aliquip proident ex ullamco. Cupidatat nostrud qui Lorem quis mollit enim sint. Do excepteur nulla excepteur id sit commodo ipsum irure aliqua voluptate consequat et est.',
        images: []
      },
      {
        name: 'Heaven\'s Sweet',
        backgroundImage: '/images/projects/heavens-sweet-bg.png',
        miniImage: '/images/projects/heavens-sweet-min.png',
        mobileImg: '/images/projects/heavens-sweet-mob.png',
        logo: 'heavens-sweet-logo',
        categories: ['Marketing', 'Diseño'],
        colorCondition: 'light',
        subCategories: ['Branding empresarial', 'Repostería'],
        description: 'Laboris dolore eu aute pariatur laboris officia. Pariatur duis dolor occaecat culpa nostrud aute eiusmod dolor duis qui proident mollit. Pariatur consequat proident excepteur sunt culpa cillum. Id mollit ad deserunt consectetur do ipsum nisi sint velit incididunt cillum elit nisi sunt. Officia ex elit duis duis ullamco exercitation cupidatat sunt laborum aliquip proident ex ullamco. Cupidatat nostrud qui Lorem quis mollit enim sint. Do excepteur nulla excepteur id sit commodo ipsum irure aliqua voluptate consequat et est.',
        images: []
      }

    ]
  }),
  methods: {
    filterCategories () {
      const _this = this
    },
    slideChange (ind) {
      /**
         *
         * @description Changes the active slide
         * @param {Integer} ind active index
         *
        */
      this.activeProjectInd = ind
      console.log(this.visibleProjects[ind])
    }
  },
  computed: {
    visibleProjects: function () {
      const _this = this
      return (_this.categoriesFilter === 'all') ? [..._this.projects] : _this.projects.filter(proj => proj.categories.includes(_this.categoriesFilter))
    },
    isMobileViewport () {
      return window.innerWidth < 600
    }
  },
  mounted () {
  }
}
</script>

<style lang="scss">
    .portfolio-container {
        position: relative;
        padding: 80px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background-origin: center;
        background-size: cover;

        .project {
          background-position: center;
        }

        .bgImg {
            position: absolute;
            left: 0;
            top: 0;
            background-origin: center;
            background-size: cover;
            width: 100%;
            height: 100%;
        }

        .categories {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            margin-bottom: 30px;

            .category {
                color: transparent;
                font-size: 1.875rem;
                background: none;
                border: none;
                outline: none;
                font-weight: bold;
                -webkit-text-stroke-width: 0.7px;
                transition: all .3s ease;

                &.dark {
                    -webkit-text-stroke-color: rgb(204, 204, 204);

                    &.active {
                        color: white;
                        transition: all .3s ease;
                    }
                }

                &.light {
                    -webkit-text-stroke-color: rgb(70, 70, 70);

                    &.active {
                        color: rgb(29, 29, 29);
                        transition: all .3s ease;
                    }
                }
            }
        }
    }
</style>
