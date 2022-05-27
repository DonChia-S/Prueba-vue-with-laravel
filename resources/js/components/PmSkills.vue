<template>
<main>
    <div class="card ms-1 mt-2 mb-2">
        <span class="text-center pt-1 mt-2">
            <img :src="`../images/${CardIcon}.png`" width="35%" alt="...">
        </span>
        <div class="card-body">
            <h4 class="card-title">{{Cardtitle}}</h4>
            <div class="progress">
                <div class="bg progress-bar 
                progress-bar-striped 
                progress-bar-animated" 
                role="progressbar" 
                :aria-valuenow="CardValue" 
                aria-valuemin="0" 
                aria-valuemax="100" 
                :style="`width: ${CardValue}%`">{{CardValue}}%</div>
            </div>
            <p class="card-text mt-2 mb-2">Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Nulla elementum 
                eget nisl hendrerit iaculis. Nam laoreet malesuada 
                eros at efficitur. Mauris sed augue pretium, 
                efficitur nunc quis, tempor turpis. 
            </p>
        </div>
    </div>
</main>
  
</template>

<script>
export default {
    name: 'PmSkills',
    props: {
        Cardtitle: String,
        CardIcon: String,
        CardValue: Number,
        cardText: String,
        title: String,
    },
}
</script>

<style lang="scss" scoped>
    .bg{
        background-color: #E66239;
    }

    h4{
        color: #E66239;
        font-weight: 700;
    }
</style>