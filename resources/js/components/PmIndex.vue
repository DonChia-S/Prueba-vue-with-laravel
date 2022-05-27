<template>
<main>
        <pm-header></pm-header>
        <section id="skills" class="pt-2 pb-2">
            <h1 class="text-center pt-3 pb-3">Habilidades</h1>
             <div class="container">
                <div class="row">
                    <pm-skills class="col-12 col-md" 
                        :Cardtitle="'HTML5'" 
                        :CardIcon="'icon-html'"
                        :CardValue="95">
                    </pm-skills>
                    <pm-skills class="col-12 col-md" :Cardtitle="'CSS'" 
                        :CardIcon="'icon-css'"
                        :CardValue="95">
                    </pm-skills>
                    <pm-skills class="col-12 col-md" :Cardtitle="'JAVASCRIPT'" 
                        :CardIcon="'icon-js'"
                        :CardValue="85">
                    </pm-skills>
                </div>
                <div class="row">
                    <pm-skills class="col-12 col-md  " :Cardtitle="'VUE JS'" 
                        :CardIcon="'icon-vue'"
                        :CardValue="80">
                    </pm-skills>
                    <pm-skills class="col-12 col-md" :Cardtitle="'REACT JS'" 
                        :CardIcon="'icon-react'"
                        :CardValue="80">
                    </pm-skills>
                    <pm-skills class="col-12 col-md" :Cardtitle="'SASS'" 
                        :CardIcon="'icon-sass'"
                        :CardValue="75">
                    </pm-skills>
                </div>
            </div>
        </section>
        <section id="hobbies" class="pt-2 pb-2">
             <h1 class="text-center pt-3 pb-3 text-uppercase">hobbies</h1>
             <div class="container">
                 <div class="row">
                     <pm-hobbies class="col pb-5"></pm-hobbies>
                 </div>
             </div>
        </section>
        <pm-contact></pm-contact>
</main>
</template>

<script>
import PmContact from './PmContact.vue';
import PmHeader from './PmHeader.vue';
import PmHobbies from './PmHobbies.vue';
import PmSkills from './PmSkills.vue';
export default {
    name: 'PmIndex',
    components: { PmContact, PmHeader, PmSkills, PmHobbies, PmHobbies },
}
</script>

<style lang="scss" scoped>
    #skills{
        background-color: rgb(219, 219, 219);
        height: auto;
        max-height: auto;
    }

    #hobbies{
        background-color: rgb(230, 98, 57);
        height: auto;
        max-height: auto;
    }

    #skills h1{
        color: #E66239;
        font-size: 50px;
        font-weight: 900;
    }

    #hobbies h1{
        color: rgb(0, 0, 0);
        font-size: 50px;
        font-weight: 900;
    }
</style>
        PmHabitos