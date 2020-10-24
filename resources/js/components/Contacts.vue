<template>
    <div class="d-flex justify-content-between container-fluid flex-wrap all relative">
        <div class="header mb-5"></div>
        <div class="container ko mt-4 d-flex flex-column justify-content-between relative">
            <h2 class="pl-5 ml-5 mb-4 text-black text-900">CONTACTS</h2>
            <div class="mt-4 d-flex flex-row">
                <p class="w-50 text-black">EMAIL</p>
                <p class="text-black">PHONE</p>
            </div>
            <div class="mt-1 d-flex flex-row">
                <p class="w-50 text-black text-900">Contacto@3dmensional_agency</p>
                <p class="text-black text-900">+584241131116</p>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-end h-100">
                <div id="instagram" class="rrss" @mouseenter="hoverin('ig')" @mouseleave="hoverout('ig','#EE4B7A')">
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center">
                        <svg id="instagram_i" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60.1 60.1" style="enable-background:new 0 0 60.1 60.1;" xml:space="preserve">
                        <svg:style type="text/css">
                            .ig{fill:#EE4B7A;}
                        </svg:style>
                        <g id="instagram-c">
                            <path id="Path_928" class="ig" d="M42.2,0H17.9C8,0,0,8,0,17.9c0,0,0,0,0,0v24.3c0,9.9,8,17.9,17.9,17.9c0,0,0,0,0,0h24.3
                                c9.9,0,17.9-8,17.9-17.9c0,0,0,0,0,0V17.9C60.1,8,52.1,0,42.2,0C42.2,0,42.2,0,42.2,0z M54.1,42.1c0,6.5-5.3,11.8-11.8,11.8H18
                                c-6.5,0-11.8-5.3-11.8-11.8V17.8C6.2,11.3,11.5,6,18,6h24.3c6.5,0,11.8,5.3,11.8,11.8V42.1z"/>
                            <path id="Path_929" class="ig" d="M30.1,14.5c-8.6,0-15.5,6.9-15.5,15.5s6.9,15.5,15.5,15.5S45.6,38.6,45.6,30l0,0l0,0
                                c0-8.5-6.9-15.5-15.4-15.5C30.2,14.5,30.1,14.5,30.1,14.5z M30.1,39.5c-5.2,0-9.5-4.3-9.5-9.5s4.3-9.5,9.5-9.5s9.5,4.3,9.5,9.5v0
                                l0,0C39.6,35.2,35.3,39.5,30.1,39.5z"/>
                            <circle id="Ellipse_33" class="ig" cx="45.7" cy="14.6" r="3.7"/>
                        </g>
                        </svg>
                        <p class="text-light">3DMENSIONAL</p>
                    </div>
                </div>
                <div id="facebook" class="rrss ">
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center" @mouseover="hoverin('face')" @mouseleave="hoverout('face','#0071BC')">
                        <svg id="facebook_i" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 27.6 60" style="enable-background:new 0 0 27.6 60;" xml:space="preserve">
                        <svg:style type="text/css">
                            .face{fill:#0071BC;}
                        </svg:style>
                        <g id="face-c">
                            <path id="path" class="face" d="M26.6,29.9h-8.2V60H5.9V29.9H0V19.3h5.9v-6.8C5.9,7.6,8.2,0,18.4,0h9.2v10.3h-6.7
                                c-1.1,0-2.6,0.5-2.6,2.9v6.2h9.3L26.6,29.9z"/>
                        </g>
                        </svg>
                        <p class="text-light">3DMENSIONAL</p>
                    </div>
                </div>
                <div id="twitter" class="rrss d-flex flex-column justify-content-around align-items-center">
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center" @mouseover="hoverin('twit')" @mouseleave="hoverout('twit','#34CCFE')">
                        <svg id="twitter_i" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 73.6 60.1" style="enable-background:new 0 0 73.6 60.1;" xml:space="preserve">
                        <svg:style type="text/css">
                            .twit{fill:#34CCFE;}
                        </svg:style>
                        <g id="twitter-c">
                            <path id="Path_927" class="twit" d="M73.6,7.1c-2.8,1.2-5.7,2-8.7,2.4c3.2-1.9,5.5-4.9,6.7-8.4c-3,1.8-6.2,3-9.6,3.7
                                c-5.7-6.1-15.3-6.4-21.4-0.7c-3.9,3.7-5.6,9.2-4.4,14.5C24,18,12.7,12.2,5,2.8C1,9.7,3,18.6,9.7,23c-2.4-0.1-4.8-0.7-6.9-1.9v0.2
                                c0,7.2,5.1,13.4,12.2,14.9c-2.2,0.6-4.5,0.7-6.8,0.3c2,6.2,7.7,10.4,14.2,10.5C16,52,8,54.2,0,53.3c6.9,4.5,15,6.8,23.2,6.8
                                C51.1,60.1,66.3,37,66.3,17v-2C69.1,12.7,71.6,10.1,73.6,7.1L73.6,7.1z"/>
                        </g>
                        </svg>
                        <p class="text-light">3DMENSIONAL</p>
                    </div>
                </div>
                <div id="whatsapp" class="rrss d-flex flex-column justify-content-around align-items-center">
                    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center" @mouseover="hoverin('wha')" @mouseleave="hoverout('wha','#5EFA75')">
                        <svg id="twitter_i" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 59.5 60" style="enable-background:new 0 0 59.5 60;" xml:space="preserve">
                        <svg:style type="text/css">
                            .wha{fill:#5EFA75;}
                        </svg:style>
                        <g id="whatsapp-c">
                            <path id="Path_941" class="wha" d="M44,35.9c-0.7-0.4-4.3-2.3-5-2.6s-1.2-0.4-1.7,0.3c-0.8,1-1.6,1.9-2.5,2.8
                                c-0.4,0.4-1.1,0.5-1.6,0.1c-2.2-1-4.1-2.3-5.9-3.9c-1.6-1.6-2.9-3.4-4-5.3c-0.3-0.4-0.2-1.1,0.2-1.4c0.1,0,0.1-0.1,0.2-0.1
                                c0.4-0.4,0.8-0.8,1.2-1.3c0.3-0.4,0.6-0.8,0.8-1.2c0.2-0.4,0.2-0.9,0-1.3c-0.2-0.4-1.5-4.1-2.1-5.6s-1.2-1.3-1.6-1.3
                                S21.1,15,20.6,15c-0.8,0-1.5,0.3-2,0.9c-1.8,1.5-2.8,3.8-2.8,6.1c-0.1,3.7,2.4,7.3,2.8,7.8s4.9,8.5,12.3,11.7s7.5,2.3,8.9,2.2
                                s4.5-1.6,5.2-3.4c0.5-1.1,0.7-2.3,0.6-3.5C45.1,36.4,44.6,36.1,44,35.9z M30.3,53.6c-4.8,0-9.4-1.4-13.4-4l-9.4,3l3-9
                                C2.6,32.7,5.1,17.5,16,9.6s26.1-5.4,34,5.5c7.9,10.9,5.4,26.1-5.5,34C40.3,52,35.4,53.6,30.3,53.6z M30.3,0
                                C14.2,0,1.1,13.1,1.1,29.2c0,5.3,1.5,10.5,4.2,15.1L0,60l16.2-5.2c14,8,31.9,3.2,39.9-10.9s3.2-31.9-10.9-39.9
                                c-0.3-0.2-0.5-0.3-0.8-0.5C40.1,1.3,35.2,0,30.3,0z"/>
                        </g>
                        </svg>
                        <p class="text-light">3DMENSIONAL</p>
                    </div>
                </div>
            </div>
            <watermark-component class="water-1"></watermark-component>
        </div>
        <watermark-component class="water-2"></watermark-component>
    </div>
</template>
<style lang="scss">

    $facebook: #0071BC;
    $instagram: #EE4B7A;
    $twitter: #34CCFE;
    $whatsapp: #5EFA75;
    .header{
        height:50px;
        width: 100%;
        margin-top: 20px;
    }
    .relative{
        position: relative;
    }
    .absolute{
        position: absolute;
    }
    .ko{
        height: calc((100% - 70px) - (4.5rem));
        .water-1{
            right: 90px;
            top: 100px;
        }
    }
    .all{
        height: 100vh;
        .water-2{
            right: -240px;
            bottom: 50px;
        }
    }
    p{
        margin: 0;
    }
    .rrss{
        height: 320px;
        width: 25%;
        background: #2A2D34;
        border-radius: 10px 10px 0px 0px;
        transition: all 0.2s;
        .d-flex{
            transition: all 0.2s;
            svg{
                height: 60px;
            }
        }
        z-index: 2;
        transform-origin: bottom;
    }
    .rrss:hover{
        transform: scale(1,1.2);
    }
    .rrss:hover .d-flex{
        transform: scale(1,calc(1/1.2));
    }
    #instagram:hover{
        background-color: $instagram;
    }
    #facebook:hover{
        background-color: $facebook;
    }
    #twitter:hover{
        background-color: $twitter;
    }
    #whatsapp:hover{
        background-color: $whatsapp;
    }
</style>
<script>
export default {
  data: () => ({
  }),
  methods: {
    hoverin(clases) {
      var element = document.getElementsByClassName(clases);
      for (const int of element) {
        int.style.fill = 'white';
      }
    },
    hoverout(clases,color) {
      var element = document.getElementsByClassName(clases);
      for (const int of element) {
        int.style.fill = color;
      }
      console.log(element);
    }
  }
}
</script>