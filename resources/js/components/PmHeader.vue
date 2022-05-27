<template>
<main>
    <nav class="bg-dark">
        <div class="container-fluid p-3">
            <h3 class="text-center">
                <img :src="'../images/logo.png'" alt="logo" height="50" width="50" />
                Schia Page
            </h3>
        </div>
    </nav>
    <div class="container">
        <div class="row d-flex align-items-center">
            <img class="d-none d-lg-block col-lg-6 p-5" :src="'../images/img_1.png'"/>
            <div class="col text-center pt-5 pb-5 col-lg-6 text-lg-start">
                <p class="text-uppercase"><b>Desarrollador<br>Front-end jr.</b></p>
                <p class="fs-3">y Productor Multimedia</p>
            </div>
        </div>
    </div>
</main>
</template>

<script>
export default {
    name: 'PmHeader',
}
</script>

<style lang="scss" scoped>

    nav h3 {
        text-align: center !important;
        text-decoration: none !important;
        color: #ffff;
    }

    .container p:first-child{
        color:#E66239;
        font-size: 10vh;
        line-height: 1.0;
    }

    .container p:last-child{
        color:#afafaf;
        font-size: 7vh;
        margin-top: -25px;
    }

    @media only screen and (max-width: 576px){
        .container p:first-child{
            color:#E66239;
            font-size: 7vh;
            line-height: 1.0;
        }
        .container p:last-child{
            color:#afafaf;
            font-size: 5vh;
            margin-top: -25px;
        }
    }

</style>