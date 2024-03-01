<template>
    <div class="h-auto font-PretendRegular">
        <pageHeader
            :color="headerColor"
            :fontColor="fontColor"
            class="relative z-50"
        />
        <pageNavbar />
        <router-view></router-view>
        <pageFooter v-if="footerVisible" />
    </div>
</template>
<script>
import pageHeader from "./layout/pageHeader.vue";
import pageFooter from "./layout/pageFooter.vue";
import pageNavbar from "./layout/pageNavbar.vue";

export default {
    name: "app",
    components: {
        pageHeader,
        pageFooter,
        pageNavbar,
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
