<template>
    <carousel-3d>
        <slide :key="'project-slide-' + project.id" v-for="(project, ind) in projects" :index="ind" :style="{ backgrounImage: project.img }" >{project.name}</slide>
    </carousel-3d>
</template>

<script>
// import { Carousel3d, Slide } from 'vue-carousel-3d'

export default {
  data: () => ({})
}
</script>

<style lang="scss">

</style>
