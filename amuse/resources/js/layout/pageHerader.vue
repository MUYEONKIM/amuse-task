<template>
    <div
        class="flex items-center h-20 font-[20px]"
        :class="{
            'bg-black': color === 'main',
            'bg-white': color === 'notMain',
            'text-[#D9D9D9]': fontColor === 'main',
            'text-black': fontColor === 'notMain',
        }"
    >
        <Logo @click="goHome" class="ml-[13.02vw] cursor-pointer" />
        <router-link class="ml-[265.65px]" to="/message">메시지</router-link>
        <router-link class="ml-[136.9px]" to="/credit">크레딧</router-link>
    </div>
</template>
<script>
import logoIcon from "../assets/logo.vue";

export default {
    methods: {
        goHome() {
            this.$router.push("/");
        },
    },
    components: {
        Logo: logoIcon,
    },
    props: {
        color: {
            type: String,
        },
        fontColor: {
            type: String,
        },
    },
};
</script>
