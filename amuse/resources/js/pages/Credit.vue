<template>
    <pageNavbar />
    <div class="w-full h-[903px] bg-[#F2F4F8] flex justify-center">
        <div class="w-[1460px] flex flex-col items-center">
            <p class="mt-[109px] font-PretendBold text-[38px]">크레딧 구매</p>
            <p class="mt-[18px] text-[19px]">
                메시지 전송을 위해 사용할 크레딧 상품을 선택해 주세요
            </p>
            <div class="w-full flex justify-between mt-[53px]">
                <creditContent />
                <creditContent
                    :mainprice="`10,000`"
                    :totalmessage="`76,667`"
                    :subprice="`110,000`"
                    :basecredit="`100,000`"
                    :addcredit="`10,000`"
                />
                <creditContent />
                <creditContent
                    :mainprice="`10,000`"
                    :subprice="`110,000`"
                    :basecredit="`100,000`"
                    :addcredit="`10,000`"
                />
            </div>
        </div>
    </div>
</template>
<script>
import creditContent from "../components/creditContent.vue";
import pageNavbar from "../layout/pageNavbar2.vue";

export default {
    components: {
        creditContent,
        pageNavbar,
    },
};
</script>
