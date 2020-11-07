<template>
    <div
      id="servicios"
      class="services-container d-flex justify-content-center container-fluid flex-wrap relative"
      data-aos="fade-up"
      data-aos-offset="200"
      data-aos-delay="20"
      data-aos-duration="500"
      data-aos-easing="ease-in-out"
      data-aos-once="false"
      data-aos-anchor-placement="top-center"
    >
        <div class="content col-xs-12 col-12 d-flex justify-content-center align-items-center">
            <div class="cont-logo d-flex flex-column align-items-center">
                <p
                  class="section-title mb-3"
                >SERVICIOS</p>
                <div class="logo" >
                    <svg class="pointer" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 189.4 215.3" style="enable-background:new 0 0 189.4 215.3;" xml:space="preserve">
                    <svg:style type="text/css">
                      .transparent{fill:transparent;}
                      .st1{fill:#2a2d34}
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
              :class="{ development: selectedIndex === 0, marketing: selectedIndex === 1, design: selectedIndex === 2}"
            >
                <div class="area-title">{{ areas[selectedIndex] }}</div>
                <div class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor cupiditate id, neque earum dolores, sunt mollitia consequuntur reiciendis vero excepturi sequi commodi distinctio ipsum provident nulla obcaecati magni sint doloribus.</div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
  data: () => ({
    show: false,
    color: 'blue',
    count: 1,
    selectedIndex: 0,
    areas: ['Desarrollo', 'Marketing', 'Diseño']
  }),
  methods: {
    showhide () {
      // element = elemento que es mostrado u ocultado cuando la fucion es ejecutada
      // show = varible de control que permite saber si se oculta o se muestra element
      var element = document.getElementById('showed')
      this.show = !this.show
      if (this.show) {
        element.classList.add('show')
        element.classList.remove('hidden')
      }
      if (!this.show) {
        element.classList.add('hidden')
        element.classList.remove('show')
      }
    },
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
      var ncolor = '#2a2d34'
      var description = document.getElementById('description')
      var element = document.getElementById('showed')
      var active = document.getElementById(position)
      var nactive1 = document.getElementById(positionn1)
      var nactive2 = document.getElementById(positionn2)
      var x = 0
      if (position == 'top') {
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
        if (positionn1 == 'top') {
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
        description.classList.remove('yellow')
        element.classList.remove('yellow')
        description.classList.remove('red')
        element.classList.remove('red')
        description.classList.add('blue')
        element.classList.add('blue')
      }
      if (count === 2) {
        this.color = 'yellow'
        this.selectedIndex = 1
        description.classList.remove('red')
        element.classList.remove('red')
        description.classList.remove('blue')
        element.classList.remove('blue')
        description.classList.add('yellow')
        element.classList.add('yellow')
      }
      if (count === 3) {
        this.color = 'red'
        this.selectedIndex = 2
        description.classList.remove('blue')
        element.classList.remove('blue')
        description.classList.remove('yellow')
        element.classList.remove('yellow')
        description.classList.add('red')
        element.classList.add('red')
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
  padding: 3rem;
  min-height: 100vh;
}

.logo {
  width: 100%;
}
    .cont-logo, .cont-figure{
      min-width: 300px;
      margin-right: 100px;
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

    //  Content card
    .info-card {
      border-radius: 1rem;
      box-shadow: 0 10px 10px rgb(42, 45, 52, 0.3);
      min-height: 300px;
      width: 70%;
      max-width: 700px;
      padding: 2rem;

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
    }

</style>
