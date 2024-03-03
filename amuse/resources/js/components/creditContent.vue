<template>
    <div
        class="flex items-center justify-center w-[347px] h-[459px] rounded-[8px] bg-[#FFFFFF] shadow-[#00000008_0px_15px_10px]"
    >
        <div class="w-[283px] h-[379px]">
            <p class="font-PretendBold text-[30px]">{{ mainprice }} 원</p>
            <p class="mt-[16px] text-[#7B7B7B] text-[18px]">
                총 {{ totalmessage }}건 발송가능합니다<br />1건당 15원에
                결제가능합니다
            </p>
            <div class="mt-[36px] flex justify-between">
                <p class="font-PretendSemiBold text-[24px]">
                    {{ subprice }} 크레딧
                </p>
                <div
                    class="w-[70px] h-[33px] rounded-[17px] bg-[#E0EDFF] flex items-center justify-center"
                >
                    <p class="font-PretendSemiBold text-[16px] text-[#2116BF]">
                        +10%
                    </p>
                </div>
            </div>
            <div
                class="mt-[21px] w-full h-[88px] rounded-[8px] bg-[#F4F5F6] flex items-center justify-center"
            >
                <div
                    class="w-[251px] h-[57px] flex flex-col items-center justify-between"
                >
                    <div class="w-full h-[19px] flex justify-between">
                        <p class="text-[#6E6E6E] text-[16px]">기본 크레딧</p>
                        <p class="text-[18px]">{{ basecredit }}</p>
                    </div>
                    <div class="w-full h-[19px] flex justify-between">
                        <p class="text-[#6E6E6E] text-[16px]">추가 크레딧</p>
                        <p class="text-[18px]">+ {{ addcredit }}</p>
                    </div>
                </div>
            </div>
            <button
                class="mt-[40px] w-full h-[61px] rounded-[8px] bg-[#5146F0] text-[20px] text-[#ffffff]"
            >
                구매하기
            </button>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        mainprice: {
            type: String,
            default: "30,000",
        },
        totalmessage: {
            type: String,
            default: "66,667",
        },
        subprice: {
            type: String,
            default: "330,000",
        },
        basecredit: {
            type: String,
            default: "300,000",
        },
        addcredit: {
            type: String,
            default: "30,000",
        },
    },
};
</script>
