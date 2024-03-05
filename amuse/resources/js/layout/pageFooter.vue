<template>
    <div class="h-[313px] bg-[#222222]">
        <div>
            <div class="flex flex-row text-[#D6D6D6] pt-[56px] ml-[320px]">
                <Logo />
                <logoIcon
                    @click="goHome"
                    class="cursor-pointer"
                    :logoColor="`#EDEDED`"
                    :ftdotColor="`#EDEDED`"
                    :sqaureColor="`#BCBCBC`"
                    :messageColor="`#E8E8E8`"
                    :dotColor="`#F9FBFF`"
                />
                <button class="h-[44px] ml-[483px]">메시지</button>
                <button class="h-[44px] ml-[80px]">크레딧</button>
            </div>
            <hr class="mt-[23px] border-[#3a3a3a]" />
            <div class="ml-[320px] mt-[44px]">
                <p class="text-[#D6D6D6]">
                    문의 사항이 있으신가요? 텔레그램을 통해 고객센터로 문의
                    해보세요.
                </p>
                <p class="text-[#F0F0F0] pt-[16px]">Telegram : @shdevelope</p>
            </div>
        </div>
    </div>
</template>
<script>
import logoIcon from "../assets/svg/logo.vue";

export default {
    components: {
        logoIcon,
    },
};
</script>
