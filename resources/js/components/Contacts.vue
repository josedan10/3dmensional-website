<template>
<div id="contacto" class="d-flex justify-content-between container-fluid flex-wrap about-container">
        <div class="header mb-5"></div>
        <div class="container socials-container mt-4 d-flex flex-column justify-content-between">
            <h1 class="section-title mb-4">CONTACTO</h1>
            <div class="mt-4 d-flex flex-row">
                <p class="w-50 ">CORREO</p>
                <p class="">TELÉFONO</p>
            </div>
            <div class="contact-info mt-1 d-flex flex-row">
                <p class="w-50  text-900">contacto@3dmensional.agency</p>
                <p class=" text-900">+584241131116</p>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-end h-100 mt-5">
                <div
                    v-for="(social, ind) in socialNetworks"
                    :key="ind + '-social'"
                    class="rrss"
                    :class="social.name + '-container'"
                >
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center" >
                        <svg-vue class="icon" :icon="social.name"></svg-vue>
                        <p class="text-light">{{ social.username.toUpperCase() }}</p>
                    </div>
                </div>
            </div>
            <watermark-component class="water-1"></watermark-component>
        </div>
        <watermark-component class="water-2"></watermark-component>
    </div>
</template>
<script>
export default {
  data: () => ({
    socialNetworks: [
      {
        name: 'facebook',
        username: '3dmensional',
        url: '#'
      },
      {
        name: 'instagram',
        username: '3dmensional',
        url: '#'
      },
      {
        name: 'twitter',
        username: '3dmensional',
        url: '#'
      },
      {
        name: 'whatsapp',
        username: '3dmensional',
        url: '#'
      }
    ]
  }),
  methods: {
    hoverin (clases) {
      var element = document.getElementsByClassName(clases)
      for (const int of element) {
        int.style.fill = 'white'
      }
    },
    hoverout (clases, color) {
      var element = document.getElementsByClassName(clases)
      for (const int of element) {
        int.style.fill = color
      }
      console.log(element)
    }
  }
}
</script>
<style lang="scss">

    $facebook: #0071BC;
    $instagram: #EE4B7A;
    $twitter: #34CCFE;
    $whatsapp: #5EFA75;
    .header {
        height:50px;
        width: 100%;
        margin-top: 20px;
    }

    .contact-info {
        font-size: 1.25rem;
    }

    .about-container {
        position: relative;

        .water-2{
            right: -240px;
            bottom: 50px;
        }
    }

    p{
        margin: 0;
    }

    .socials-container {
        padding-bottom: 0;
        max-width: 1200px;
        position: relative;
    }

    .rrss {
        height: 320px;
        width: 25%;
        background: #2A2D34;
        border-radius: 10px 10px 0px 0px;
        transition: all 0.2s ease;

        .d-flex {
            transition: all 0.2s ease;
        }

        z-index: 2;
        transform-origin: bottom;

        .icon {
            height: 60px;
        }

        &:hover {
            cursor: pointer;
            transform: scale(1,1.2);
            transition: all 0.2s ease;
            border-radius: 10px 10px 0px 0px;

            .icon, .text-light {
                transform: scale(1,calc(1/1.2));
            }

            path, circle {
                fill: white;
                transition: all 0.2s ease;
            }
        }
    }

    .instagram-container:hover {
        background-color: $instagram;
    }
    .facebook-container:hover {
        background-color: $facebook;
    }
    .twitter-container:hover {
        background-color: $twitter;
    }
    .whatsapp-container:hover {
        background-color: $whatsapp;
    }
</style>
