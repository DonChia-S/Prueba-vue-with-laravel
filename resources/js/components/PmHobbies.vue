<template>
<main>
    <div class="row text-center">
        <a class="col-12 col-md btn btn-dark m-1 fs-7 fs-md-5" 
        data-bs-toggle="collapse" href="#collapseExample1" 
        role="button" aria-expanded="false" aria-controls="collapseExample1">
            <span><img :src="'../images/icon-games.png'" width="50" height="50" /></span>
            videojuegos
        </a>
        <a class="col-12 col-md btn btn-dark m-1 fs-7 fs-md-5" 
        data-bs-toggle="collapse" href="#collapseExample2" 
        role="button" aria-expanded="false" aria-controls="collapseExample2">
            <span><img :src="'../images/icon-developer.png'" width="50" height="50" /></span>
            Desarrollo Web
        </a>
        <a class="col-12 col-md btn btn-dark m-1 fs-7 fs-md-5" 
        data-bs-toggle="collapse" href="#collapseExample3" 
        role="button" aria-expanded="false" aria-controls="collapseExample3">
            <span><img :src="'../images/icon-book.png'" width="50" height="50" /></span>
            Lectura
        </a>
        <a class="col-12 col-md btn btn-dark m-1 fs-7 fs-md-5" 
        data-bs-toggle="collapse" href="#collapseExample4" 
        role="button" aria-expanded="false" aria-controls="collapseExample4">
            <span><img :src="'../images/icon-music.png'" width="50" height="50" /></span>
            Escuchar Musica
        </a>
    </div>
    <div class="row">
        <div class="col-12 col-lg pt-1 pb-1">
            <div  class="collapse multi-collapse" id="collapseExample1">
                <div class="card card-body">
                    <informacion :info="`Proin laoreet, nisi quis luctus aliquam, 
                    velit ligula sagittis risus, ut efficitur dui lacus eu sapien. 
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae`">
                    </informacion>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg pt-1 pb-1">
            <div  class="collapse multi-collapse" id="collapseExample2">
                <div class="card card-body">
                    <informacion :info="`Proin laoreet, nisi quis luctus aliquam, 
                    velit ligula sagittis risus, ut efficitur dui lacus eu sapien. 
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae
                    `"></informacion>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg pt-1 pb-1">
            <div  class="collapse multi-collapse" id="collapseExample3">
                <div class="card card-body">
                    <informacion :info="`Proin laoreet, nisi quis luctus aliquam, 
                    velit ligula sagittis risus, ut efficitur dui lacus eu sapien. 
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae
                    `"></informacion>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg pt-1 pb-1">
            <div  class="collapse multi-collapse" id="collapseExample4">
                <div class="card card-body">
                    <informacion :info="`Proin laoreet, nisi quis luctus aliquam, 
                    velit ligula sagittis risus, ut efficitur dui lacus eu sapien. 
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae
                    `"></informacion>
                </div>
            </div>
        </div>
    </div>

</main>
</template>

<script>
import Informacion from './HobbiesInfo.vue';
export default {
    components: {Informacion},

}
</script>
<style lang="scss" scoped>
@media only screen and (max-width: 576px){
    
    a {
        margin-left: 2% !important;
        width: 95% !important;
        height: 25% !important;
    }
}
</style>

