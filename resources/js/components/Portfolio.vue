<template>
    <section
      id="clientes"
      class="portfolio d-flex flex-direction-column justify-content-center"
      data-aos="fade-up"
      data-aos-offset="-200"
      data-aos-delay="20"
      data-aos-duration="500"
      data-aos-easing="ease-in-out"
      data-aos-once="false"
      data-aos-anchor-placement="top-center"
    >
      <h1 class="section-title mb-5">ELLOS CREYERON EN NOSOTROS</h1>
      <div class="projects-container">
        <div
          v-for="(project, ind) in projects"
          :key="'project-' + ind"
          class="project"
        >
          <b-img-lazy blank="true" blankColor="#fff" :src="project.miniImage" :alt="project.description" class="project-img"></b-img-lazy>
        </div>
      </div>
    </section>
</template>

<script>
export default {
  data: () => ({
    projects: [
      {
        name: 'Arte & Estilo Salazar',
        backgroundImage: '/images/projects/arte-y-estilo-salazar-bg.png',
        miniImage: '/images/projects/arte-y-estilo-salazar-logo.svg',
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
        miniImage: '/images/projects/byNikoleMendoza-logo.svg',
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
        miniImage: '/images/projects/elion-logo.svg',
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
        miniImage: '/images/projects/heavens-sweet-logo.svg',
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

  .portfolio {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    .projects-container {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      grid-gap: 4rem;
      max-width: 1200px;

      .project {
        display: flex;
        grid-column: span 3;
        justify-content: center;
        align-items: center;

        .project-img {
          width: 100%;
          // filter: grayscale(100%);
        }
      }
    }
  }
</style>
