<template>
    <div
        class="flex items-center h-20 text-[20px] font-PretendSemiBold"
        :class="{
            'bg-black': color === 'main',
            'bg-white': color === 'notMain',
            'text-[#D9D9D9]': fontColor === 'main',
            'text-black': fontColor === 'notMain',
        }"
    >
        <logoIcon
            @click="goHome"
            class="ml-[13.02vw] cursor-pointer"
            v-if="$route.path === '/'"
            :logoColor="`#EDEDED`"
            :ftdotColor="`#EDEDED`"
            :sqaureColor="`#BCBCBC`"
            :messageColor="`#E8E8E8`"
            :dotColor="`#F9FBFF`"
        />
        <logoIcon @click="goHome" class="ml-[13.02vw] cursor-pointer" v-else />
        <router-link class="ml-[265.65px]" to="/message">메시지</router-link>
        <router-link class="ml-[136.9px]" to="/credit">크레딧</router-link>
    </div>
</template>
<script>
import logoIcon from "../assets/svg/logo.vue";

export default {
    methods: {
        goHome() {
            this.$router.push("/");
        },
    },
    components: {
        logoIcon,
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
