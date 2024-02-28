<template>
    <div class="h-auto">
        <pageHeader :color="headerColor" :fontColor="fontColor" />
        <router-view></router-view>
    </div>
    <pageFooter v-if="footerVisible" />
</template>
<script>
import pageHeader from "./layout/pageHerader.vue";
import pageFooter from "./layout/pageFooter.vue";

export default {
    name: "app",
    components: {
        pageHeader,
        pageFooter,
    },
    data() {
        return {
            hiddenPage: ["/login", "/register"],
        };
    },
    computed: {
        headerColor() {
            return this.$route.path === "/" ? "main" : "notMain";
        },
        fontColor() {
            return this.$route.path === "/" ? "main" : "notMain";
        },
        footerVisible() {
            return !this.hiddenPage.includes(this.$route.path);
        },
    },
};
</script>
