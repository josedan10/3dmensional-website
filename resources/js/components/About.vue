<template>
    <div class="d-flex justify-content-between container-fluid all flex-wrap relative">
        <absolute-component></absolute-component>
        <div class="header"></div>
        <div class="container ko mt-5 mb-4 d-flex flex-column relative">
            <div class="d-flex flex-row justify-content-between container">
                <div class="w-50">
                    <h2 class="text-center w-100 text-black text-900">ABOUT US</h2>
                </div>
                <div class="w-50">
                    <p class="parraf text-black">NUESTRO ENTORNO DE TRABAJO LO HEMOS DIVIDIDO EN TRES DIMENSIONES PRINCIPALES</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between container mt-3">
                <div class="w-50">
                    <p class="parraf text-black mx-3">EN 3DMENSIONAL COMO ANGENCIA DIGITAL SABEMOS LO COMPLICADO QUE PUEDE SER MATERIALIZAR UN PENSAMIENTO, PERO CON LA DIRECCIÓN CORRECTA ES POSIBLE HACERLO REALIDAD. CADA PROYECTO EN EL QUE PODEMOS TRABAJAR ES UNA OPORTUNIDAD PARA HACER ALGO DIFERENTE. CREEMOS QUE CADA IDEA ES IMPORTANTE, ES POR ESO QUE NUESTRO PROPÓSITO ES BRINDARLE UNA ATENCIÓN COMPLETAMENTE PERSONALIZADA QUE LO GUÍE EN EL DESARROLLO QUE PROYECTA A CORTO, MEDIANO Y LARGO PLAZO.</p>
                </div>
                <div class="w-50 d-flex flex-column justify-content-end">
                    <div class="w-100 mt-2">
                        <img src="/images/marketing.png" alt="">
                    </div>
                    <div class="w-100 mt-2">
                        <img src="/images/development.png" alt="">
                    </div>
                    <div class="w-100 mt-2 mb-3">
                        <img src="/images/design.png" alt="">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between container mt-3 ml-5">
                <div class="w-100 ml-5">
                    <p class="parraf text-black ml-5 mr-4 pr-3">EN CADA UNO DE ESTOS SERVICIOS CONTAMOS CON UN EQUIPO CAPACITADO Y DEDICADO, CUYO OBJETIVO ES OFRECERLE EL MEJOR ASESORAMIENTO Y ATENCIÓN PARA QUE TU PROYECTO Y SUEÑOS SEAN REALIDAD. BUSCAMOS ENFOCARNOS EN TODO LO QUE ES VERDADERO, TODO LO QUE ES HONORABLE, TODO LO QUE ES PURO, TODO LO HERMOSO Y TODO LO ADMIRABLE PARA PLASMARLO Y PODER TRANSMITIR Y CREAR COSAS EXCELENTES. NO VEMOS UN PROYECTO COMO UN TRABAJO SINO COMO UNA OPORTUNIDAD PARA CREAR ARTE CON NUESTROS TALENTOS, PORQUE NOS APASIONA LO QUE HACEMOS.</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between container mt-4 ml-5">
                <div class="w-100 ml-5 ml-5 mr-4 pr-3">
                    <div class="w-100">
                            <div class="d-inline-flex flex-column text-center">
                                <div class="mt-2 mx-4 text-center">
                                    <img class="selected" src="/images/picture-1.png" alt="">
                                </div>
                                <p class="text-black text-900 name">EDGARDO LÓPEZ</p>
                                <p class="parraf text-900">CEO/CMO - DIRECTOR DE MARKETING</p>
                            </div>
                            <div class="d-inline-flex flex-column text-center">
                                <div class="mt-2 mx-4 text-center">
                                    <img src="/images/picture-2.png" alt="">
                                </div>
                                <p class="text-black text-900 name">RAFAEL CALLES</p>
                                <p class="parraf text-900">DIRECTOR CREATIVO</p>
                            </div>
                            <div class="d-inline-flex flex-column text-center">
                                <div class="mt-2 mx-4 text-center">
                                    <img src="/images/picture-3.png" alt="">
                                </div>
                                <p class="text-black text-900 name">JOSÉ QUINTERO</p>
                                <p class="parraf text-900">DIRECTOR DE DESARROLLO</p>
                            </div>
                            <div class="d-inline-flex flex-column text-center">
                                <div class="mt-2 mx-4 text-center">
                                    <img src="/images/picture-4.png" alt="">
                                </div>
                                <p class="text-black text-900 name">OSBEL TORRES</p>
                                <p class="parraf text-900">DIRECTOR AUDIOVISUAL</p>
                            </div>
                    </div>
                    <!-- <div class=" ml-5 mr-4 pr-3">EN CADA UNO DE ESTOS SERVICIOS CONTAMOS CON UN EQUIPO CAPACITADO Y DEDICADO, CUYO OBJETIVO ES OFRECERLE EL MEJOR ASESORAMIENTO Y ATENCIÓN PARA QUE TU PROYECTO Y SUEÑOS SEAN REALIDAD. BUSCAMOS ENFOCARNOS EN TODO LO QUE ES VERDADERO, TODO LO QUE ES HONORABLE, TODO LO QUE ES PURO, TODO LO HERMOSO Y TODO LO ADMIRABLE PARA PLASMARLO Y PODER TRANSMITIR Y CREAR COSAS EXCELENTES. NO VEMOS UN PROYECTO COMO UN TRABAJO SINO COMO UNA OPORTUNIDAD PARA CREAR ARTE CON NUESTROS TALENTOS, PORQUE NOS APASIONA LO QUE HACEMOS.</div> -->
                </div>
            </div>
            <watermark-component class="water-3"></watermark-component>
        </div>
    </div>
</template>
<style lang="scss">
    .parraf{
        font-size: 0.7em;
    }
    .justify-content-end{
        img{
            height: 26px;
            width: auto;
        }
        .name{
            font-size: 1.2em;
        }
    }
    .selected{
        border: 5px solid black;
        border-radius: 50%;
    }
    .water-3{
        left: -180px;
        bottom: 30px;
    }
</style>