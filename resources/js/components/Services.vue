<template>
    <div class="d-flex justify-content-center container-fluid flex-wrap relative">
        <div class="cont-logo col-xs-12 col-sm-12 col-md-4 col-lg-4  d-flex flex-column justify-content-center">
            <div class="content d-flex flex-column align-items-center">
                <p class="text-black text-900 f-50">SERVICIOS</p>
                <div class="logo" >
                    <svg class="pointer" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 189.4 215.3" style="enable-background:new 0 0 189.4 215.3;" xml:space="preserve">
                    <svg:style type="text/css">
                      .transparent{fill:transparent;}
                      .st1{fill:#EAEAEA;}
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
                    <p  class="text-center text-900 mt-2">CLICK</p>
                </div>
            </div>
        </div>
        <!-- DESCTRIPTION CONTAINER (Main description and hidden description) -->
        <div class="cont-description d-flex col-sm-12 col-md-5 col-lg-4">
            <!-- Main Description -->
            <div id="description" class="description gradient col-sm-8 col-md-12 col-lg-12 px-5" :class="{ yellow: color === 'yellow', red: color === 'red', blue: color === 'blue' }">
                <!-- Tittle -->
                <h3 v-if="color == 'blue' " class="mt-5 text-light text-900">DESARROLLO</h3>
                <h3 v-if="color == 'yellow' " class="mt-5 text-light text-900">MARKETING</h3>
                <h3 v-if="color == 'red' " class="mt-5 text-light text-900">DISEÑO</h3>
                <!-- Parraf -->
                <p v-if="color == 'blue' " class="text-light mt-4 mb-0" style="height: 75%;">Today, companies need technology services tools to reach their customers. Sell their products, manage projects and otimize your business processes.<br>Our team offers comprehensive solutions and digital innovation of any type of proposal with a combination of extensive knowledge and experience in the sector. Where we design and develop customized managment aplications based on the need, interests, comercial activities, human resources, process control and development of custom software. We carry out technological projects adapted to each company or business idea. We analyze each project idea in detail and provide the best solution based on the objetives and needs of our clients.</p>
                <p v-if="color == 'yellow' " class="text-light mt-4 mb-0" style="height: 75%;"> Currently, the importantce that we give to digital marketing is such that it has become one of the most important departments within the company to analyze the behavior of markets and consumers. With this tool we study your competition understand and analyze your business in order to define the characteristics that make it different, loyalty of current customers, increase in sales with less investment, define your target audience and optimize brand recognition and company reputation to spot opportunities. For this we offer you a digital Marketing service where you can find advice and guidance according to your need when you need it.</p>
                <p v-if="color == 'red' " class="text-light mt-4 mb-0" style="height: 75%;">Graphic design is a fundamental tool to be able to create, comunicated and capture your messages or ideas. It starts from the logo to your business stationery, trough it's advertising, business cards, web pages, and social networks. <br> Thats is why we have a design team to give a correct identity image to your brand, capturing your vision trough the eyes and expressing your ideas trough the image, color, shape, typography and technical techniques know as theory. At design 3Dmensional we offer the best advice and cration of an attractive brand image that stands out for consumers.</p>
                <!-- Button to show hidden description -->
                <div class="pointer d-flex flex-column align-items-end" @click="showhide()">
                    <p class="text-light text-900 m-0">MORE</p>
                    <div class="more"></div>
                </div>

            </div>
            <!-- Hidden Description -->
            <div class="application gradient hidden blue col-sm-6 col-md-9 col-lg-10 d-flex flex-column align-items-end pt-4 pr-2" id="showed" >
                <!-- Hidden Description Limiter -->
                <div v-if=" color == 'blue' " class="d-flex flex-column align-items-start col-sm-7 col-md-7 text-light">
                    <p>Desarrollo Web.</p>
                    <p>Apps.</p>
                    <p>Softwares.</p>
                    <p>Multiplataformas.</p>
                    <p>Sistemas de administración.</p>
                    <p>Mantenimiento de plataformas.</p>
                    <p>Desarrollo e implemetación de base de datos.</p>
                    <p>Administración de servidores.</p>
                    <p>eComerce</p>
                    <p>Sistema de educación online.</p>
                </div>
                <div v-if=" color == 'yellow' " class="d-flex flex-column align-items-start col-sm-7 col-md-7 text-light">
                    <p>SEO / SEM.</p>
                    <p>Posicionamiento en buscadores.</p>
                    <p>Marketing online.</p>
                    <p>RRSS.</p>
                    <p>Community Manager.</p>
                    <p>Publicidad ADS</p>
                    <p>Email marketing.</p>
                </div>
                <div v-if=" color == 'red' " class="d-flex flex-column align-items-start col-sm-7 col-md-7 text-light">
                    <p>Diseño de marca.</p>
                    <p>Branding.</p>
                    <p>Packing.</p>
                    <p>RRSS.</p>
                    <p>Flyers y Anuncios.</p>
                    <p>Gigantografía.</p>
                    <p>Imprenta.</p>
                    <p>Diseño 3D.</p>
                    <p>Diseño Web.</p>
                    <p>Diseño de aplicaciones móviles UI/UX.</p>
                    <p>Motion graphics.</p>
                    <p>Diseño editorial.</p>
                </div>
            </div>
        </div>
        <div class="cont-figure col-md-3 col-lg-4 d-flex flex-column justify-content-center">
            <div class="content d-flex flex-column align-items-center">
                <img v-if="color =='blue' " src="/images/svgs/square.svg" alt="">
                <img v-if="color =='yellow' " src="/images/bars.png" alt="">
                <img v-if="color =='red' " src="/images/bars.png" alt="">
            </div>
        </div>
    </div>
</template>
<script>
export default {
  data: () => ({
    show: false,
    color: 'blue',
    count:1
  }),
  methods: {
    showhide() {
      // element = elemento que es mostrado u ocultado cuando la fucion es ejecutada
      // show = varible de control que permite saber si se oculta o se muestra element
      var element = document.getElementById('showed');
      this.show = !this.show;
      if (this.show) {
        element.classList.add('show');
        element.classList.remove('hidden')
      }
      if (!this.show) {
        element.classList.add('hidden');
        element.classList.remove('show');
      }
    },
    changeColor(count, position, positionn1, positionn2,color) {
      // count = variable que indica cual fue el svg que se hizo click (1= top, 2 = left, right = 3)
      // active = svg al que se hizo click
      // position = id del active
      // nactive1 = primer svg al que no se hizo click
      // positionn1 = id del primer svg que no se hizo click
      // nactive2 = segundo svg al que no se hizo click
      // positionn2 = id del segundo svg que no se hizo click
      // color = color del active
      // ncolor = color de nactive1 y nactive2
      var ncolor = '#EAEAEA';
      var description = document.getElementById('description');
      var element = document.getElementById('showed');
      var active = document.getElementById(position);
      var nactive1 = document.getElementById(positionn1);
      var nactive2 = document.getElementById(positionn2);
      var x= 0;
      if (position == 'top') {
        for (const item of active.childNodes[0].childNodes) {
          if (item.nodeName !== '#text') {
            item.style.fill = color;
          }
        }
        for (const iterator of nactive1.childNodes[2].childNodes) {
          if (iterator.nodeName !== '#text') {
            iterator.style.fill = ncolor;
          }
        }
        for (const iterator of nactive2.childNodes[2].childNodes) {
          if (iterator.nodeName !== '#text') {
            iterator.style.fill = ncolor;
          }
        }
      }
      else {
        for (const item of active.childNodes[2].childNodes) {
          if (item.nodeName !== '#text') {
            item.style.fill = color;
          }
        }
        if (positionn1 == 'top') { 
          for (const iterator of nactive1.childNodes[0].childNodes) {
            if (iterator.nodeName !== '#text') {
              iterator.style.fill = ncolor;
            }
          }
          for (const iterator of nactive2.childNodes[2].childNodes) {
            if (iterator.nodeName !== '#text') {
              iterator.style.fill = ncolor;
            }
          }
        }
        else {
          for (const iterator of nactive1.childNodes[2].childNodes) {
            if (iterator.nodeName !== '#text') {
              iterator.style.fill = ncolor;
            }
          }
          for (const iterator of nactive2.childNodes[0].childNodes) {
            if (iterator.nodeName !== '#text') {
              iterator.style.fill = ncolor;
            }
          }
        }
      }
      if (count === 1) {
        this.color = 'blue';
        description.classList.remove('yellow');
        element.classList.remove('yellow');
        description.classList.remove('red');
        element.classList.remove('red');
        description.classList.add('blue');
        element.classList.add('blue');
      }
      if (count === 2) {
        this.color = 'yellow';
        description.classList.remove('red');
        element.classList.remove('red');
        description.classList.remove('blue');
        element.classList.remove('blue');
        description.classList.add('yellow');
        element.classList.add('yellow');
      }
      if (count === 3) {
        this.color = 'red';
        description.classList.remove('blue');
        element.classList.remove('blue');
        description.classList.remove('yellow');
        element.classList.remove('yellow');
        description.classList.add('red');
        element.classList.add('red');
      }
    }
  },
  mounted () {
  }
}
</script>
<style lang="scss">

$blue-gradient: linear-gradient(to right, #124074,#0C2B4E);
$yellow-gradient: linear-gradient(to right, #F7B32C,#D19725);
$red-gradient: linear-gradient(to right, #9E0031,#780025);

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
    .cont-logo, .cont-figure{
        height:100vh;
        z-index: 1;
        .head{
            height:50px;
            margin-top: 20px;
            img{
                width: auto;
                height:100%;
            }
        }
        .content{
            height: auto;
            width: 100%;
            svg{
                height:13em;
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
    .cont-description{
            // 124074
            // 0C2B4E
        height:95vh;
        z-index: 2;
        position: relative;
        transition: all 0.5s;

        .description{
            border-radius: 0px 0px 15px 15px;
            z-index: 2;
            width: 100%;
        }
        .application{
            position:absolute;
            border-radius: 0px 0px 15px 15px;
            height:93%;
            transition: all 0.5s;
            p{
                margin-bottom: 0.5rem;
            }
        }
    }
    #right:hover{
        .paths{
            path{
                fill:#9E0031;
            }
        }
    }
    #top:hover{
        .paths{
            path{
                fill:#124074;
            }
        }
    }
    #left:hover{
        .paths{
            path{
                fill:#F7B32C;
            }
        }
    }
    svg .paths path{
        transition: 0.3s all ease;
    }
    .more{
        height: 8px;
        width: 22px;
        background:white;
        border-radius: 0px 3px 3px 0px;
    }
    .relative{
        position: relative;
    }
    .gradient{
        transition: .5s ease all;

        &.blue{
            background: $blue-gradient;
            transition: .5s ease all;
        }

        &.yellow{
            background: $yellow-gradient;
            transition: .5s ease all;
        }

        &.red{
            background: $red-gradient;
            transition: .5s ease all;
        }
    }
    @keyframes change {
        from{
            background: linear-gradient(90deg, #f90 0%, #444 0) 50%/ 5em;
        }
        to {
            background: linear-gradient(90deg, #f90 100%, #444 0);
        }
    }

</style>
