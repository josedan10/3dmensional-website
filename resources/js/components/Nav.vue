<template>
    <div class="menu">
        <nav class="navbar">
            <div class="head">
                <img src="/images/svgs/3dmensional-logo.svg" alt="">
            </div>

            <ul class="menu-wrapper">
                <li class="menu-item"><a @click="setActiveLink" class="menu-link active" href="#inicio">INICIO</a></li>
                <li class="menu-item"><a @click="setActiveLink" class="menu-link" href="#nosotros">NOSOTROS</a></li>
                <li class="menu-item"><a @click="setActiveLink" class="menu-link" href="#proyectos">PROYECTOS</a></li>
                <li class="menu-item"><a @click="setActiveLink" class="menu-link" href="#servicios">SERVICIOS</a></li>
                <li class="menu-item"><a @click="setActiveLink" class="menu-link" href="#contacto">CONTACTO</a></li>
            </ul>
        </nav>
        <p class=" text-900 language">EN</p>
    </div>
</template>
<script>
export default {
    data: () => ({}),
    methods: {
        setActiveLink (e) {
            document.querySelector('.menu-link.active').classList.toggle('active')
            e.target.classList.toggle('active')
        }
    }
}
</script>
<style lang="scss">
    .navbar{
        position: fixed;
        z-index: 300;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.75rem 2.25rem;
        background: rgba(255, 255, 255, 0.9);

        .menu-wrapper {
            display: flex;
            list-style: none;

            .menu-item {
                padding: 1rem 2rem;

                a {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: #8e8f93;
                    font-weight: bold;
                    position: relative;

                    &:hover {
                        text-decoration: none;

                        &::after {
                            width: 100%;
                            transition: width .2s ease;
                        }
                    }

                    &::after {
                        content: "";
                        position: absolute;
                        bottom: -5px;
                        height: 4px;
                        background: #8e8f93;
                        width: 0;
                        transition: width .2s ease;
                    }

                    &.active {
                        color:#2a2d34;

                        &::after {
                            background: #2a2d34;
                            width: 100%;
                        }
                    }

                }
            }

        }
    }

    .bars{
        top: 0;
        right: 0;
        height: 40px;
    }
    .language{
        bottom: 25px;
        left: 2.25rem;
        position: fixed;
        cursor: pointer;
        z-index: 100;
    }
    .head{
        height:50px;
        top: 0;
        left: 0;
        z-index: 10;

        img{
            width: auto;
            height:100%;
        }
    }
</style>