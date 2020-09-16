<template>
    <div class="d-flex justify-content-center container-fluid flex-wrap relative">
        <absolute-component></absolute-component>
        <div class="cont-logo col-xs-12 col-sm-12 col-md-4 col-lg-4  d-flex flex-column justify-content-center">
            <div class="content d-flex flex-column align-items-center">
                <p class="text-black text-900 f-50">SERVICES</p>
                <div class="logo" >
                    <img @click="changeColor()" class="pointer" src="/images/svgs/logo-top.svg" alt="">
                    <p  class="text-center text-900 mt-2">CLICK</p>
                </div>
            </div>
        </div>
        <!-- DESCTRIPTION CONTAINER (Main description and hidden description) -->
        <div class="cont-description d-flex col-sm-12 col-md-5 col-lg-4">
            <!-- Main Description -->
            <div id="description" class="description gradient col-sm-8 col-md-12 col-lg-12 px-5" :class="{ yellow: color === 'yellow', red: color === 'red', blue: color === 'blue' }">
                <!-- Tittle -->
                <h3 v-if="color == 'blue' " class="mt-5 text-light text-900">DEVELOPMENT</h3>
                <h3 v-if="color == 'yellow' " class="mt-5 text-light text-900">MARKETING</h3>
                <h3 v-if="color == 'red' " class="mt-5 text-light text-900">DESIGN</h3>
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
            <!-- <div class="foot d-flex flex-row justify-content-end">
                <a href=""><img src="/images/svgs/instagram.svg" alt=""></a>
                <a href=""><img src="/images/svgs/facebook.svg" alt=""></a>
                <a href=""><img src="/images/svgs/twitter.svg" alt=""></a>
            </div> -->
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
        showhide(){
            var element = document.getElementById("showed");
            this.show = !this.show;
            if (this.show){
                element.classList.add("show");
                element.classList.remove("hidden")
            }
            if (!this.show){
                element.classList.add("hidden");
                element.classList.remove("show");
            }
            // console.log(this.show);
        },
        changeColor(){
            this.count++;
            var description = document.getElementById("description");
            var element = document.getElementById("showed")

            if (this.count > 3){
                this.count = 1;
            }
            if (this.count == 1){
                this.color = 'blue';
                description.classList.remove("red");
                element.classList.remove("red");
                description.classList.add("blue");
                element.classList.add("blue");
            }
            if (this.count == 2){
                this.color = 'yellow';
                description.classList.remove("blue");
                element.classList.remove("blue");
                description.classList.add("yellow");
                element.classList.add("yellow");
            }
            if (this.count == 3){
                this.color = 'red';
                description.classList.remove("yellow");
                element.classList.remove("yellow");
                description.classList.add("red");
                element.classList.add("red");
            }
            // console.log(this.count);
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
            img{
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
        // background-image: var(--gradient);
        // background-size:470%;
        // transition: background- 0.7s ease;
        // transition: background-position 0.5s ease;
        // background:linear-gradient(to right, #124074,#0C2B4E) 50%/ 5em;
        // animation: blinds 2s infinite;
        // -webkit-animation: blinds 2s infinite;
        transition: .5s ease all;

        &.blue{
            background: $blue-gradient;
            transition: .5s ease all;
            // background: -webkit-linear-gradient(#124074,#0C2B4E);
            // background: -moz-linear-gradient(#124074,#0C2B4E);
            // background: -o-linear-gradient(#124074,#0C2B4E);
            // background-position: let;
        }

        &.yellow{
            background: $yellow-gradient;
            transition: .5s ease all;
            // background: -webkit-linear-gradient(#F7B32C,#D19725);
            // background: -moz-linear-gradient(#F7B32C,#D19725);
            // background: -o-linear-gradient(#F7B32C,#D19725);
            // background-position: center;
        }
        
        &.red{
            background: $red-gradient;
            transition: .5s ease all;
            // background: -webkit-linear-gradient(#9E0031,#780025);
            // background: -moz-linear-gradient(#9E0031,#780025);
            // background: -o-linear-gradient(#9E0031,#780025);
            // background-position: right;
        }
    }
    // @keyframes blinds {
    //     0%{
    //         background-image:linear-gradient(to right, #124074,#0C2B4E);
    //     }
    //     100% {
    //         background-image: linear-gradient(to right, #F7B32C, #D19725);
    //     }
    // }
    @keyframes change {
        from{
            background: linear-gradient(90deg, #f90 0%, #444 0) 50%/ 5em;
        }
        to {
            background: linear-gradient(90deg, #f90 100%, #444 0);
        }
    }

</style>