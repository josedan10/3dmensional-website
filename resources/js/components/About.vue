<template>
    <div class="d-flex justify-content-between container-fluid all flex-wrap relative">
        <div class="header"></div>
        <div class="container about-container mt-5 mb-4 d-flex flex-column relative">
            <div class="d-flex flex-row justify-content-between container">
                <div class="w-50">
                    <h2 class="text-center w-100 text-black text-900 mb-3">SOBRE NOSOTROS</h2>
                </div>
            </div>

            <div class="content">
                <p class="parraf text-black">En <strong>3Dmensional</strong> como agencia digital sabemos lo complicado que puede ser materializar un pensamiento, pero con la dirección correcta es posible hacerlo realidad.</p>
                <p class="parraf text-black">Cada proyecto en el que podemos trabajar es una oportunidad para hacer algo diferente. Creemos que cada idea es importante, es por eso que nuestro propósito es brindarle una atención completamente personalizada que lo guíe en el desarrollo que proyecta a corto, mediano y largo plazo.</p>
                <p class="parraf text-black">Nuestro entorno de trabajo lo hemos dividido en tres dimensiones principales:</p>

                <img src="/images/svgs/3Dmensional-dimensions.svg" alt="3Dmensional services, marketing, desarrollo, diseño. Agencia de marketing profesional" />

                <p class="parraf text-black">En cada uno de estos servicios contamos con un equipo capacitado y dedicado, cuyo objetivo es ofrecerle el mejor asesoramiento y atención para que tu proyecto y sueños sean realidad. buscamos enfocarnos en todo lo que es verdadero, todo lo que es honorable, todo lo que es puro, todo lo hermoso y todo lo admirable para plasmarlo y poder transmitir y crear cosas excelentes.</p>
                <p class="parraf text-black">No vemos un proyecto como un trabajo sino como una oportunidad para crear arte con nuestros talentos, porque nos apasiona lo que hacemos.</p>
            </div>

            <div class="pictures-container d-flex flex-row justify-content-between container mt-4">
                <div class="d-inline-flex picture-card flex-column text-center">
                    <div class="mt-2 mx-4 text-center relative">
                        <img class="profile-picture" src="/images/picture-1.png" alt="">
                    </div>
                    <p class="text-black text-900 name">EDGARDO LÓPEZ</p>
                    <p class="parraf">Director de Marketing</p>
                </div>
                <div class="d-inline-flex picture-card flex-column text-center">
                    <div class="mt-2 mx-4 text-center relative">
                        <img class="profile-picture" src="/images/jose-profile.jpg" alt="">
                    </div>
                    <p class="text-black text-900 name">JOSÉ QUINTERO</p>
                    <p class="parraf">Director de Desarrollo</p>
                </div>
                <div class="d-inline-flex picture-card flex-column text-center">
                    <div class="mt-2 mx-4 text-center relative">
                        <img class="profile-picture" src="/images/picture-2.png" alt="">
                    </div>
                    <p class="text-black text-900 name">RAFAEL CALLES</p>
                    <p class="parraf">Director Creativo</p>
                </div>
                <div class="d-inline-flex picture-card flex-column text-center">
                    <div class="mt-2 mx-4 text-center relative">
                        <img class="profile-picture" src="/images/picture-4.png" alt="">
                    </div>
                    <p class="text-black text-900 name">OSBEL TORRES</p>
                    <p class="parraf">Director Audiovisual</p>
                </div>
            </div>
            <watermark-component class="water-3"></watermark-component>
        </div>
    </div>
</template>
<style scoped lang="scss">
    .about-container {
        max-width: 1200px;

        .content {
            margin-bottom: 2rem;
            column-count: 2;
            column-gap: 2rem;
            line-height: 1.9rem;

            img {
                margin-bottom: 2rem;
            }
        }
    }

    .pictures-container {
        flex-wrap: wrap;
    }

    .picture-card {
        border-radius: 10px;
        padding: 2rem;
        background: #fff;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3);
        min-width: 200px;
        margin-bottom: 20px;

        .name {
            margin-top: 1rem;
        }

        .parraf {
            font-size: 0.75rem;
            margin-bottom: 1rem;
            font-weight: 500;
        }
    }

    .parraf {
        font-size: 1.125rem;
        margin-bottom: 1rem;
        font-weight: 300;
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
        z-index: -1 !important;
    }
</style>