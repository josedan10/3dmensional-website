<template>
    <div class="d-flex justify-content-between container-fluid all flex-wrap relative">
        <div class="header"></div>
        <div class="container ko mt-5 mb-4 d-flex flex-column relative">
            <div class="d-flex flex-row justify-content-between container">
                <div class="w-50">
                    <h2 class="text-center w-100 text-black text-900">ABOUT US</h2>
                </div>
                <div class="w-50">
                    <p class="parraf text-black">Nuestro entorno de trabajo lo hemos dividido en tres dimensiones principales:</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between container mt-3">
                <div class="w-50">
                    <p class="parraf text-black mx-3">En 3DMENSIONAL como agencia digital sabemos lo complicado que puede ser materializar un pensamiento, pero con la dirección correcta es posible hacerlo realidad. Cada proyecto en el que podemos trabajar es una oportunidad para hacer algo diferente. Creemos que cada idea es importante, es por eso que nuestro propósito es brindarle una atención completamente personalizada que lo guíe en el desarrollo que proyecta a corto, mediano y largo plazo.</p>
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
                    <p class="parraf text-black ml-5 mr-4 pr-3">En cada uno de estos servicios contamos con un equipo capacitado y dedicado, cuyo objetivo es ofrecerle el mejor asesoramiento y atención para que tu proyecto y sueños sean realidad. buscamos enfocarnos en todo lo que es verdadero, todo lo que es honorable, todo lo que es puro, todo lo hermoso y todo lo admirable para plasmarlo y poder transmitir y crear cosas excelentes. No vemos un proyecto como un trabajo sino como una oportunidad para crear arte con nuestros talentos, porque nos apasiona lo que hacemos.</p>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between container mt-4 ml-5">
                <div class="w-100 ml-5 ml-5 mr-4 pr-3">
                    <div class="w-100">
                            <div class="d-inline-flex flex-column text-center">
                                <div class="mt-2 mx-4 text-center relative">
                                    <img class="profile-picture" src="/images/picture-1.png" alt="">
                                </div>
                                <p class="text-black text-900 name">EDGARDO LÓPEZ</p>
                                <p class="parraf text-900">CEO/CMO - Directo de Marketing</p>
                            </div>
                            <div class="d-inline-flex flex-column text-center">
                                <div class="mt-2 mx-4 text-center relative">
                                    <img class="profile-picture" src="/images/picture-2.png" alt="">
                                </div>
                                <p class="text-black text-900 name">RAFAEL CALLES</p>
                                <p class="parraf text-900">Director Creativo</p>
                            </div>
                            <div class="d-inline-flex flex-column text-center">
                                <div class="mt-2 mx-4 text-center relative">
                                    <img class="profile-picture" src="/images/jose-profile.jpg" alt="">
                                </div>
                                <p class="text-black text-900 name">JOSÉ QUINTERO</p>
                                <p class="parraf text-900">Director de Desarrollo</p>
                            </div>
                            <div class="d-inline-flex flex-column text-center">
                                <div class="mt-2 mx-4 text-center relative">
                                    <img class="profile-picture" src="/images/picture-4.png" alt="">
                                </div>
                                <p class="text-black text-900 name">OSBEL TORRES</p>
                                <p class="parraf text-900">Director Audiovisual</p>
                            </div>
                    </div>
                    <!-- <div class=" ml-5 mr-4 pr-3">EN CADA UNO DE ESTOS SERVICIOS CONTAMOS CON UN EQUIPO CAPACITADO Y DEDICADO, CUYO OBJETIVO ES OFRECERLE EL MEJOR ASESORAMIENTO Y ATENCIÓN PARA QUE TU PROYECTO Y SUEÑOS SEAN REALIDAD. BUSCAMOS ENFOCARNOS EN TODO LO QUE ES VERDADERO, TODO LO QUE ES HONORABLE, TODO LO QUE ES PURO, TODO LO HERMOSO Y TODO LO ADMIRABLE PARA PLASMARLO Y PODER TRANSMITIR Y CREAR COSAS EXCELENTES. NO VEMOS UN PROYECTO COMO UN TRABAJO SINO COMO UNA OPORTUNIDAD PARA CREAR ARTE CON NUESTROS TALENTOS, PORQUE NOS APASIONA LO QUE HACEMOS.</div> -->
                </div>
            </div>
            <watermark-component class="water-3"></watermark-component>
        </div>
    </div>
</template>
<style scoped lang="scss">
    .profile-picture {
        
    }

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

    .d-inline-flex{
        div{
            width: 160px;
        }

        img {
            width: 100%;
            transition: all 0.2s ease-in-out;
            border-radius: 50%;
        }
    }
    .water-3{
        left: -180px;
        bottom: 30px;
    }
</style>