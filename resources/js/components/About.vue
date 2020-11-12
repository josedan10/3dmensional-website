<template>
    <section
        id="nosotros"
        class="d-flex justify-content-between container-fluid all flex-wrap relative"
        data-aos="fade-up"
        data-aos-offset="200"
        data-aos-delay="20"
        data-aos-duration="500"
        data-aos-easing="ease-in-out"
        data-aos-once="false"
        data-aos-anchor-placement="top-center"
    >
        <div class="container about-container mt-5 mb-4 d-flex flex-column relative">
            <div class="d-flex flex-row justify-content-between">
                <div class="w-50">
                    <h2 class="section-title mb-3">SOBRE NOSOTROS</h2>
                </div>
            </div>

            <div class="content">
                <p class="parraf ">En <strong>3Dmensional</strong> como <b>agencia digital</b> sabemos lo complicado que puede ser materializar un pensamiento, pero con la dirección correcta es posible hacerlo realidad.</p>
                <p class="parraf ">Cada proyecto en el que podemos trabajar es una oportunidad para hacer algo diferente. Creemos que <b>cada idea es importante</b>, es por eso que nuestro propósito es brindarle una <b>atención completamente personalizada</b> que lo guíe en el desarrollo que proyecta a corto, mediano y largo plazo.</p>
                <p class="parraf ">Nuestro entorno de trabajo lo hemos dividido en tres dimensiones principales:</p>

                <img src="/images/svgs/3Dmensional-dimensions.svg" alt="3Dmensional services, marketing, desarrollo, diseño. Agencia de marketing digital" title="3Dmensional services"/>

                <p class="parraf ">En cada uno de estos servicios <b>contamos con un equipo capacitado y dedicado</b>, cuyo objetivo es ofrecerle el mejor asesoramiento y atención para que su proyecto pueda llevarse acabo. <b>Siempre damos una milla extra</b> a fin de poder incluso superar las expectativas de nuestros clientes.</p>
                <p class="parraf ">No vemos un proyecto como un trabajo sino como una oportunidad para <b>crear arte con nuestros talentos, porque nos apasiona lo que hacemos</b>.</p>
                <h4 class="mb-3">Siempre buscamos diferenciarnos a través de: </h4>

                <p class="parraf">
                    <ul>
                        <li data-content="1">Importancia en los detalles.⁣⁣</li>
                        <li data-content="2">Soluciones personalizadas.</li>
                        <li data-content="3">Planificación de estrategias.⁣⁣</li>
                        <li data-content="4">Enfoques por objetivos.</li>
                        <li data-content="5">Un crecimiento independiente.</li>
                    </ul>
                </p>

            </div>

            <div class="pictures-container d-flex flex-row justify-content-between container mt-4">
                <div class="d-inline-flex picture-card flex-column text-center"
                    data-aos="fade-up"
                    data-aos-delay="150"
                    data-aos-offset="-100"
                    data-aos-duration="500"
                    data-aos-easing="ease-in-out"
                    data-aos-once="false"
                    data-aos-anchor-placement="top-center"
                >
                    <div class="mt-2 mx-4 text-center relative">
                        <b-img-lazy blank="true" blankColor="#eaeaea" class="profile-picture" src="/images/edgardo-profile.jpg" title="Director de Marketing" alt="3Dmensional Director de Marketing, Edgardo López"></b-img-lazy>
                    </div>
                    <p class="name">EDGARDO LÓPEZ</p>
                    <p class="parraf">Director de Marketing</p>
                </div>
                <div class="d-inline-flex picture-card flex-column text-center"
                    data-aos="fade-up"
                    data-aos-delay="300"
                    data-aos-offset="-100"
                    data-aos-duration="500"
                    data-aos-easing="ease-in-out"
                    data-aos-once="false"
                    data-aos-anchor-placement="top-center"
                >
                    <div class="mt-2 mx-4 text-center relative">
                        <b-img-lazy blank="true" blankColor="#eaeaea" class="profile-picture" src="/images/jose-profile.jpg" title="Director de Desarrollo" alt="3Dmensional Director de Desarrollo, José Quintero (josedan10)"></b-img-lazy>
                    </div>
                    <p class="name">JOSÉ QUINTERO</p>
                    <p class="parraf">Director de Desarrollo</p>
                </div>
                <div class="d-inline-flex picture-card flex-column text-center"
                    data-aos="fade-up"
                    data-aos-delay="450"
                    data-aos-offset="-100"
                    data-aos-duration="500"
                    data-aos-easing="ease-in-out"
                    data-aos-once="false"
                    data-aos-anchor-placement="top-center"
                >
                    <div class="mt-2 mx-4 text-center relative">
                        <b-img-lazy blank="true" blankColor="#eaeaea" class="profile-picture" src="/images/picture-2.png" title="Director Creativo" alt="3Dmensional Director de Marketing, Rafael Calles"></b-img-lazy>
                    </div>
                    <p class="name">RAFAEL CALLES</p>
                    <p class="parraf">Director Creativo</p>
                </div>
                <div class="d-inline-flex picture-card flex-column text-center"
                    data-aos="fade-up"
                    data-aos-delay="600"
                    data-aos-offset="-100"
                    data-aos-duration="500"
                    data-aos-easing="ease-in-out"
                    data-aos-once="false"
                    data-aos-anchor-placement="top-center"
                >
                    <div class="mt-2 mx-4 text-center relative">
                        <b-img-lazy blank="true" blankColor="#eaeaea" class="profile-picture" src="/images/picture-4.png" title="Director Audiovisual" alt="3Dmensional Director de Marketing, Samuel Torres"></b-img-lazy>
                    </div>
                    <p class="name">SAMUEL TORRES</p>
                    <p class="parraf">Director Audiovisual</p>
                </div>
            </div>
        </div>
    </section>
</template>
<style scoped lang="scss">
    .about-container {
        max-width: 1200px;
        min-height: 100vh;

        .content {
            margin-bottom: 2rem;
            column-count: 2;
            column-gap: 2rem;
            line-height: 1.9rem;

            img {
                margin-bottom: 2rem;
            }

            ul {
                list-style: none;
                padding-left: 2rem;
                font-size: 1.125rem;

                li {
                    position: relative;
                    margin-bottom: 1rem;

                    &::after {
                        position: absolute;
                        content: "";
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        background-color: #2a2d34;
                        height: 7px;
                        width: 7px;
                        color: #fff;
                        left: -15px;
                        top: 12px;
                    }
                }
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
        box-shadow: 0 10px 10px rgba(42, 45, 52, 0.3);
        min-width: 200px;
        margin-bottom: 20px;

        .name {
            margin-top: 1rem;
            font-weight: bold;
        }

        .parraf {
            font-size: 1.125rem;
            margin-bottom: 1rem;
            font-weight: 500;
        }
    }

    .parraf {
        font-size: 1.125rem;
        margin-bottom: 1rem;
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