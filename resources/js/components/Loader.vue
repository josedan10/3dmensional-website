<template>
  <div id="loader" class="load-animation-container">
    <div class="loader-object">
      <img src="/images/svgs/3dmensional-logo.svg" alt="3dmensional logo brand svg" title="3dmensional logo brand svg">
      <div class="loader-glass"></div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
  }),
  methods: {
  },
  mounted () {
  }
}
</script>

<style lang="scss">
  // Colors
  $black: #2A2D34;
  $gradient-bg: #fff;

  @keyframes move-glass {
    from {
      transform: skew(-45deg) translate(-2%, 0%);
    } to {
      transform: skew(-45deg) translate(105%, 0%);
    }
  }

  .load-animation-container {
    width: 100vw;
    height: 100vh;
    position: fixed;
    left: 0;
    top: 0;
    display: flex;
    justify-content: center;
    align-content: center;
    background: $gradient-bg;
    z-index: 1000;
    opacity: 1;
    visibility: visible;
    transition: all 0.3s ease;

    &.hide {
      transition: all 0.3s ease;
      opacity: 0;
      visibility: hidden;
    }

    .loader-object {
      color: $black;
      font-size: 5rem;
      align-self: center;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40%;
      position: relative;

      img {
        width: 100%;
      }

      .loader-glass {
        position: absolute;
        width: 120%;
        height: 105%;
        z-index: 300;
        background-color: $gradient-bg;
        transform: skew(-45deg) translate(-2%, 0%);
        animation-name: move-glass;
        animation-duration: 5s;
        animation-timing-function: ease;
        animation-delay: 3s;
        animation-iteration-count: infinite;
        animation-fill-mode: forwards;
      }
    }

  }
</style>
