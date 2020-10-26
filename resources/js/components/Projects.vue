<template>
    <div class="projects-container">
      <div class="toggle-categories">
        <button
          :class="{active: ind === activeFilterIndx && 'active'}"
          class="category-btn"
          v-for="(category, ind) in categories"
          :key="'category-' + ind"
          @click="setActiveFilter(ind)"
        >{{ category.toUpperCase() }}</button>
      </div>
        <carousel-3d
          class="projects"
          @before-slide-change="setActiveProject"
          width="600"
          height="420"
        >
            <slide class="project-slide" :key="'project-slide-' + project.id" v-for="(project, ind) in projects" :index="ind">
              <img :src="project.img" :alt="project.imgAlt" class="project-img">
            </slide>
        </carousel-3d>

        <div class="project-data" :class="{show: showData}">
          <div class="project-name">{{activeProject.name}}</div>
          <div class="project-sub-categories">
            <div
              class="sub-category"
              :key="'subCat-' + ind"
              v-for="(sub_cat, ind) in activeProject.sub_categories"
            >{{ (ind < activeProject.sub_categories.length - 1) ? `${sub_cat}&nbsp; / &nbsp;` : sub_cat }}</div>
          </div>
          <div class="project-categories">
            <div
              class="category"
              :key="'proj-category-' + ind"
              v-for="(category, ind) in activeProject.categories"
            >
            {{ (ind < activeProject.categories.length - 1) ? `${category}&nbsp; - &nbsp;` : category }}
            </div>
          </div>
        </div>
    </div>
</template>

<script>
import { Carousel3d, Slide } from 'vue-carousel-3d'

export default {
  components: {
    'carousel-3d': Carousel3d,
    slide: Slide
  },
  data: (vm) => ({
    projects: [
      {
        id: 1,
        name: 'By Nikole Mendoza',
        rrss: [
          {
            instagram: 'https://www.instagram.com/bynikolemendoza/'
          }
        ],
        img: '/images/projects/byNikoleMendoza-min.png',
        imgAlt: 'byNikoleMendoza, makeup, lifestyle, brand, influencer, maquillaje, estilo de vida',
        sub_categories: ['Branding', 'Photographic', 'Influencer'],
        categories: ['Marketing', 'Diseño']
      },
      {
        id: 2,
        name: 'Elion',
        rrss: {
          instagram: 'https://www.instagram.com/elion_ll/'
        },
        img: '/images/projects/elion-min.png',
        imgAlt: 'Elion, fitness, athletic, elite, influencer, atleta elite',
        sub_categories: ['Branding', 'Photographic', 'Influencer'],
        categories: ['Marketing', 'Diseño']
      },
      {
        id: 3,
        name: 'Heaven\'s Sweet',
        rrss: [
          {
            instagram: 'https://www.instagram.com/heavens.sweet/'
          }
        ],
        img: '/images/projects/heavensSweet-min.png',
        imgAlt: 'Heaven\'s Sweet, desserts, cakes, bread, postres artesanales, pasteles, tortas, dulces',
        sub_categories: ['Branding'],
        categories: ['Diseño']
      }
    ],
    activeProject: null,
    showData: true,
    categories: ['Diseño', 'Desarrollo', 'Marketing', 'Todos'],
    activeFilterIndx: 3
  }),
  methods: {
    setActiveProject (index) {
      const _this = this
      _this.showData = false

      setTimeout(function () {
        _this.activeProject = _this.projects[index]
        _this.showData = true
      }, 500)
    },
    setActiveFilter (ind) {
      this.activeFilterIndx = ind
    }
  },
  created () {
    this.setActiveProject(0)
  }
}
</script>

<style lang="scss">

$light-gray: #EAEAEA;

@keyframes fadeData {
  from {
    opacity: 0;
  } to {
    opacity: 1;
  }
}

.projects-container {
  position: relative;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;

  // Fake background
  &::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: url('/images/projects-bg.png');
    background-size: cover;
    background-position: bottom center;
    filter: brightness(50%);
  }

  .toggle-categories {
    position: relative;
    z-index: 1;
    display: flex;
    width: 100%;
    margin: 0 auto;
    max-width: 1000px;
    justify-content: space-around;

    .category-btn {
      border: 0;
      background: none;
      font-size: 2rem;
      color: #707070;
      -webkit-text-fill-color: #707070; /* Will override color (regardless of order) */
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: $light-gray;

      &.active {
        color: $light-gray;
        -webkit-text-fill-color: $light-gray; /* Will override color (regardless of order) */
      }

      &:focus,
      &:active {
        outline: none;
      }
    }
  }

  .projects {
    margin: 0 !important;

    .project-slide {
      background-size: cover;
      background-color: transparent !important;
      display: flex;
      justify-content: center;
      align-items: center;
      border: 0;

      img {
        width: 100%;
      }
    }
  }

  .project-data {
    margin-top: 20px;
    position: relative;
    color: white;
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity .5s ease;

    &.show {
      opacity: 1;
      transition: opacity .5s ease;
    }

    .project-name {
      text-transform: uppercase;
      font-weight: bold;
      font-size: 2.5rem;
    }

    .project-sub-categories,
    .project-categories {
      display: inline-flex;
      margin: 0 auto;
      justify-content: space-around;
      align-items: center;
    }
  }
}
</style>
