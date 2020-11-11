<template>
    <div id="contacto" class="d-flex justify-content-between container-fluid flex-wrap contact-container">
        <div class="header mb-5"></div>
        <div class="container socials-container mt-4 d-flex flex-column justify-content-between">
            <h1 class="section-title mb-4">CONTACTO</h1>
            <div class="mt-4 d-flex flex-row">
                <p class="w-50"><b>CORREO</b></p>
                <p class=""><b>TELÉFONO</b></p>
            </div>
            <div class="contact-info mt-1 d-flex flex-row mb-5">
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
                        <a :href="social.url" target="_blank">
                            <svg-vue class="icon" :icon="social.name"></svg-vue>
                            <p class="text-light">{{ social.username.toUpperCase() }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
  data: () => ({
    socialNetworks: [
      {
        name: 'facebook',
        username: '3Dmensional',
        url: 'https://www.facebook.com/3Dmensional/'
      },
      {
        name: 'instagram',
        username: '3dmensional_',
        url: 'https://instagram.com/3dmensional_'
      },
      {
        name: 'telegram',
        username: 'contacto3Dmensional',
        url: 'https://t.me/contacto3Dmensional'
      },
      {
        name: 'whatsapp',
        username: '3Dmensional',
        url: 'https://wa.me/message/6SQUS6YQ2QVZO1'
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
    $telegram: #1fa5fd;
    $whatsapp: #5EFA75;
    .header {
        height:50px;
        width: 100%;
        margin-top: 20px;
    }

    .contact-info {
        font-size: 1.25rem;
    }

    .contact-container {
        position: relative;
        min-height: 100vh;

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
        z-index: 2;
        transform-origin: bottom;

        .d-flex {
            transition: all 0.2s ease;
        }

        a {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .icon {
            height: 60px;
            margin-bottom: 2rem;
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
    .telegram-container:hover {
        background-color: $telegram;
    }
    .whatsapp-container:hover {
        background-color: $whatsapp;
    }
</style>
