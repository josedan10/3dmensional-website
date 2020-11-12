<template>
    <section
      id="servicios"
      class="services-container"
      data-aos="fade-up"
      data-aos-offset="200"
      data-aos-delay="20"
      data-aos-duration="500"
      data-aos-easing="ease-in-out"
      data-aos-once="false"
      data-aos-anchor-placement="top-center"
    >
      <div class="wrapper">
        <h2
          class="section-title mb-3"
        >SERVICIOS</h2>
        <div class="page-description mt-2 mb-5" v-html="description"></div>

        <div class="content col-xs-12 col-12 d-flex justify-content-center">
            <div class="cont-logo d-flex flex-column align-items-center">
                <div class="logo">
                    <svg class="pointer" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 189.4 215.3" style="enable-background:new 0 0 189.4 215.3;" xml:space="preserve">
                    <svg:style type="text/css">
                      .transparent{fill:transparent;}
                      .st1{fill:#eaeaea}
                      .st2{fill:#124074;}
                    </svg:style>
                    <g id="logo-c">
                        <g id="right" @click="changeColor(3,'right','top','left','#9E0031')">
                            <polygon class="transparent" points="189.4,51.4 189.4,162.4 187.3,163.7 97.9,215.3 94.7,215.3 94.7,106.1 187.2,52.7"/>
                            <g class="paths">
                                <path id="Path_792" class="st1" d="M148.2,144.9L96.1,175v-25.3l52.7-30.4c1.6-0.9,3.6-0.4,4.5,1.2c0.3,0.5,0.4,1.1,0.4,1.6v13.3
                                    C153.7,139.3,151.6,142.9,148.2,144.9z"/>
                                <path id="Path_793" class="st1" d="M188.6,55.1l-92.5,53.4v25.3l66.5-38.4c1.6-0.9,3.6-0.4,4.5,1.2c0.3,0.5,0.4,1.1,0.4,1.6v45.3
                                    c0,3.9-2.1,7.5-5.5,9.5l-66,38.1v24.3c1.4-0.2,2.8-0.6,4-1.4h0.1l83.9-48.4l0,0c3.4-2,5.4-5.6,5.4-9.5V59.3
                                    C189.4,57.8,189.1,56.4,188.6,55.1z"/>
                            </g>
                        </g>
                        <g id="left" @click="changeColor(2,'left','right','top','#F7B32C')">
                            <polygon class="transparent" points="0,51.4 0,162.4 2.2,163.7 91.5,215.3 94.7,215.3 94.7,106.1 2.2,52.7"/>
                            <g class="paths">
                                <path id="Path_794" class="st1" d="M0.9,55.1C0.3,56.4,0,57.8,0,59.3v14.2C0,77.4,2.1,81,5.5,83l87.9,50.7v-25.3L0.9,55.1z"/>
                                <path id="Path_795" class="st1" d="M0,101.5v13.3c0,3.9,2.1,7.5,5.5,9.5L93.3,175v-25.3l-88.4-51c-1.6-0.9-3.6-0.4-4.5,1.2
                                    C0.2,100.4,0,101,0,101.5z"/>
                                <path id="Path_796" class="st1" d="M0,142.8V156c0,3.9,2.1,7.5,5.4,9.5l0,0l83.8,48.4h0.1c1.2,0.7,2.6,1.2,4,1.4V191L4.9,139.9
                                    c-1.6-0.9-3.6-0.4-4.5,1.2C0.2,141.6,0,142.2,0,142.8z"/>
                            </g>
                        </g>
                        <g id="top" @click="changeColor(1,'top','left','right','#124074')">
                            <g class="paths">
                                <path id="Path_797" class="st2" d="M184,49.8L100.2,1.5c-3.4-2-7.6-2-10.9,0L5.5,49.8c-1.3,0.7-2.4,1.7-3.3,2.9l92.5,53.4
                                    l92.5-53.4C186.3,51.5,185.2,50.6,184,49.8z"/>
                            </g>
                        </g>
                    </g>
                    </svg>
                </div>
            </div>
            <div
              class="info-card"
              :class="classList"
            >
              <div class="area-title">{{ areas[selectedIndex] }}</div>
              <div class="description" v-html="areasContent.filter(area => area.name === areas[selectedIndex])[0].content"></div>
            </div>
        </div>
      </div>
    </section>
</template>
<script>
export default {
  data: () => ({
    show: false,
    color: 'blue',
    count: 1,
    selectedIndex: 0,
    classList: ['enter', 'development'],
    areas: ['desarrollo', 'marketing', 'diseño'],
    description: '<p>Somos una <b>Agencia Digital</b> con el propósito de ofrecer soluciones innovadoras y creativas para impulsar, diseñar y construir tus sueños. Ofrecemos <b>servicios B2B, B2C</b> para proyectos, marca personal Startups, PyMEs, empresas nacionales y corporativas globales de cualquier sector.</p><p>En <b>3Dmensional</b> ponemos a tu disposición todos nuestros servicios y brindamos el mejor asesoramiento según tus necesidades.</p>',
    areasContent: [
      {
        name: 'desarrollo',
        content: '<p>Cada día la <b>presencia online</b> es imprescindible para cualquier tipo de proyecto o negocio, <b>el mundo digital evoluciona constantemente</b> y es usado como una herramienta para tener mayor alcance y visibilidad. </p><p>Las empresas necesitan herramientas tecnológicas para llegar a sus clientes, vender sus productos, gestionar proyectos y optimizar tiempo y disminuir los gastos. </p><p>En <b>3Dmensional desarrollamos y diseñamos software</b> para que puedas tener a la mano las mejores herramientas que permitan tu crecimiento de una manera más rápida.</p>'
      },
      {
        name: 'marketing',
        content: '<p>El <b>Marketing Digital</b> es una de las herramientas de estrategias fundamentales si quieres <b>aumentar tu presencia y visibilidad en el mundo digital</b>.</p><p>Esto se logra mediante la aplicación de estrategias que permitan dar a conocer tus productos o servicios mediante canales digitales y así ganar posicionamiento, reputación de marca, captación y fidelización de clientes, y aumento de número de clientes con <b>estrategias y embudos de ventas</B>.</p><p>En <b>3Dmensional</b> nuestro objetivo es que seas un referente en tu mercado, dejando huella en el producto o servicio que ofreces, mediante estrategias previamente estudiadas y planificadas acordes a tu marca que te diferencien de la competencia y posicione dentro del mercado Digital.</p>'
      },
      {
        name: 'diseño',
        content: '<p>El <b>Diseño</b> es una de las herramientas fundamentales para <b>crear y representar gráficamente esa idea o mensaje que deseas comunicar</b></p><p>Actualmente todo se proyecta y representanta visualmente. En función de los elementos gráficos de un mensaje, lo primero que el público capta es clave para despertar interés.</p><p>En <b>3Dmensional</b> te ayudamos a crear y diseñar de la mano de nuestro staff creativo y audiovisual, para dar esa imagen visual atractiva que <b>impulse tu marca y destaque entre la competencia</B>.</p>'
      }
    ]
  }),
  methods: {
    changeColor (count, position, positionn1, positionn2, color) {
      // count = variable que indica cual fue el svg que se hizo click (1= top, 2 = left, right = 3)
      // active = svg al que se hizo click
      // position = id del active
      // nactive1 = primer svg al que no se hizo click
      // positionn1 = id del primer svg que no se hizo click
      // nactive2 = segundo svg al que no se hizo click
      // positionn2 = id del segundo svg que no se hizo click
      // color = color del active
      // ncolor = color de nactive1 y nactive2
      var ncolor = '#eaeaea'
      var active = document.getElementById(position)
      var nactive1 = document.getElementById(positionn1)
      var nactive2 = document.getElementById(positionn2)

      if (position === 'top') {
        for (const item of active.childNodes[0].childNodes) {
          if (item.nodeName !== '#text') {
            item.style.fill = color
          }
        }
        for (const iterator of nactive1.childNodes[2].childNodes) {
          if (iterator.nodeName !== '#text') {
            iterator.style.fill = ncolor
          }
        }
        for (const iterator of nactive2.childNodes[2].childNodes) {
          if (iterator.nodeName !== '#text') {
            iterator.style.fill = ncolor
          }
        }
      } else {
        for (const item of active.childNodes[2].childNodes) {
          if (item.nodeName !== '#text') {
            item.style.fill = color
          }
        }
        if (positionn1 === 'top') {
          for (const iterator of nactive1.childNodes[0].childNodes) {
            if (iterator.nodeName !== '#text') {
              iterator.style.fill = ncolor
            }
          }
          for (const iterator of nactive2.childNodes[2].childNodes) {
            if (iterator.nodeName !== '#text') {
              iterator.style.fill = ncolor
            }
          }
        } else {
          for (const iterator of nactive1.childNodes[2].childNodes) {
            if (iterator.nodeName !== '#text') {
              iterator.style.fill = ncolor
            }
          }
          for (const iterator of nactive2.childNodes[0].childNodes) {
            if (iterator.nodeName !== '#text') {
              iterator.style.fill = ncolor
            }
          }
        }
      }

      if (count === 1) {
        this.color = 'blue'
        this.selectedIndex = 0

        // Change to execute exit animations
        this.classList = ['exit']

        // Enter animation
        setTimeout((function () {
          this.classList = ['enter', 'development']
        }).bind(this), 300)
      } else if (count === 2) {
        this.color = 'yellow'
        this.selectedIndex = 1

        // Change to execute exit animations
        this.classList = ['exit']

        // Enter animation
        setTimeout((function () {
          this.classList = ['enter', 'marketing']
        }).bind(this), 300)
      } else {
        this.color = 'red'
        this.selectedIndex = 2

        // Change to execute exit animations
        this.classList = ['exit']

        // Enter animation
        setTimeout((function () {
          this.classList = ['enter', 'design']
        }).bind(this), 300)
      }
    }
  },
  mounted () {
  }
}
</script>
<style lang="scss">
@import '../../sass/media-queries.scss';

$blue-gradient: linear-gradient(to right, #124074,#0C2B4E);
$yellow-gradient: linear-gradient(to right, #F7B32C,#D19725);
$red-gradient: linear-gradient(to right, #9E0031,#780025);

$developmentColor: #124074;
$marketingColor: #F7B32C;
$designColor: #9E0031;

// Var Gradient

    :root{
        --gradient: linear-gradient(
            to right,
            #124074,
            #0C2B4E,
            #F7B32C,
            #D19725,
            #9E0031,
            #780025
        )
    }

// Helper Class

// Custom Styles

.services-container {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;

  .wrapper {
    max-width: 1200px;
    position: relative;
    z-index: 10;

    .content {
      position: relative;
      z-index: 2;

      @include lt-md {
        flex-direction: column;

        .cont-logo {
          max-width: 200px;
          margin: 0 auto;
        }
      }
    }
  }

  .page-description {
    font-size: 1.125rem;

    p {
      margin-bottom: 1rem;
    }
  }

  .objetivo-bg {
    position: absolute;
    width: 400px;
    z-index: 1;
  }
}

.logo {
  width: 100%;
}
    .cont-logo, .cont-figure {
      min-width: 300px;
      margin-right: 100px;
      z-index: 1;

        .head {
            height:50px;
            margin-top: 20px;

            img{
                width: auto;
                height:100%;
            }
        }

        .content {
          height: auto;
          width: 100%;

          svg {
              height: 13em;
          }
        }

        .foot{
            height: 50px;
            width: 100%;
            margin-bottom: 20px;
            position: relative;

            img{
                height: 2em;
                width: auto;
                padding: 0px 25px;
            }
        }
    }

    .hidden{
        transform: translateX(0%);
    }
    .show{
        transform: translateX(100%);
    }
    .pointer{
        cursor: pointer;
    }
    #right:hover{
        .paths{
            path{
                fill: $designColor;
            }
        }
    }
    #top:hover{
        .paths{
            path{
                fill: $developmentColor;
            }
        }
    }
    #left:hover{
        .paths{
            path{
                fill: $marketingColor;
            }
        }
    }
    svg .paths path{
        transition: 0.3s all ease;
    }
    .relative{
        position: relative;
    }
    @keyframes change {
        from{
            background: linear-gradient(90deg, #f90 0%, #444 0) 50%/ 5em;
        }
        to {
            background: linear-gradient(90deg, #f90 100%, #444 0);
        }
    }

    @keyframes fadeAnimation {
      from {
        opacity: 0%;
      } to {
        opacity: 100%;
      }
    }

    //  Content card
    .info-card {
      // box-shadow: 0 10px 10px rgb(42, 45, 52, 0.3);
      // height: 300px;
      // overflow-y: auto;
      // padding: 2rem;
      border-radius: 1rem;
      width: 70%;
      max-width: 700px;
      position: relative;
      z-index: 2;

      .area-title {
        font-weight: bold;
        font-size: 2.25rem;
        text-transform: uppercase;
        position: relative;
        display: inline-block;

        &::after {
          content: "";
          position: absolute;
          bottom: 0;
          right: 0;
          height: 5px;
          width: 50px;
        }
      }

      .description {
        margin-top: 30px;
        font-size: 1.125rem;

          p {
            margin-bottom: 1rem;
          }
      }

      &.development {
        .area-title {
          color: $developmentColor;

          &::after {
            background-color: $developmentColor;
          }
        }
      }

      &.design {
        .area-title {
          color: $designColor;

          &::after {
            background-color: $designColor;
          }
        }
      }

      &.marketing {
        .area-title {
          color: $marketingColor;

          &::after {
            background-color: $marketingColor;
          }
        }
      }

      &.enter {
        animation: fadeAnimation .5s ease forwards;
      }

      &.exit {
        animation: fadeAnimation .3s ease forwards reverse;
      }

      @include lt-md {
        margin-top: 40px;
        width: 100%;
        max-width: 100%;
      }
    }

</style>
