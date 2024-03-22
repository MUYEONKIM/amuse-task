<template>
    <div class="h-[1414px] w-full bg-[#F2F4F8] flex justify-center">
        <div class="w-[560px] flex flex-col items-center">
            <Logo class="w-[219px] h-[68px] mt-[173px]" />
            <div class="w-full text-[22px] mt-[100px]">
                <p class="font-PretendSemiBold">이름</p>
                <input
                    v-model="userName"
                    required
                    placeholder="이름을 입력해 주세요"
                    class="mt-[14px] w-full h-[61px] pl-5 pt-5 pb-5 text-[18px]"
                />
            </div>
            <div class="w-full text-[22px] mt-[64px]">
                <p class="font-PretendSemiBold">아이디</p>
                <input
                    v-model="userId"
                    required
                    placeholder="8자 이상, 영문 혹은 영문과 숫자조합"
                    class="mt-[14px] w-full h-[61px] pl-5 pt-5 pb-5 text-[18px]"
                />
            </div>
            <div class="w-full text-[22px] mt-[64px]">
                <p class="font-PretendSemiBold">비밀번호</p>
                <input
                    type="password"
                    v-model="userPassword"
                    required
                    placeholder="비밀번호를 입력해주세요"
                    class="mt-[14px] w-full h-[61px] pl-5 pt-5 pb-5 text-[18px]"
                />
            </div>
            <div class="w-full text-[22px] mt-[64px]">
                <p class="font-PretendSemiBold">비밀번호 확인</p>
                <input
                    type="password"
                    required
                    v-model="confirmPassword"
                    placeholder="비밀번호를 입력해주세요"
                    class="mt-[14px] w-full h-[61px] pl-5 pt-5 pb-5 text-[18px]"
                />
            </div>
            <div class="font-PretendSemiBold w-full text-[22px] mt-[58px]">
                <hr class="mb-[40px] border-[1.3px]" />
                <div class="flex items-center" @click="isChecked">
                    <noCheck v-if="!isCheck" />
                    <check v-if="isCheck" />
                    <p class="ml-[12px]">모든 약관에 동의합니다.</p>
                </div>
                <hr class="mt-[40px] border-[1.3px]" />
            </div>
            <button
                class="w-full h-[66px] mt-[64px] bg-[#4F44F0] text-white text-center text-[22px] rounded-[8px]"
                @click="registerSubmit"
            >
                가입하기
            </button>
        </div>
    </div>
</template>
<script>
import Logo from "../assets/svg/logo.vue";
import check from "../assets/svg/check.vue";
import noCheck from "../assets/svg/noCheck.vue";
import axios from "axios";

export default {
    data() {
        return {
            isCheck: false,
            userId: null,
            userPassword: null,
            confirmPassword: null,
        };
    },
    methods: {
        isChecked() {
            this.isCheck = !this.isCheck;
        },
        registerSubmit: async function () {
            j;
            if (this.userPassword !== this.confirmPassword) {
                alert("입력하신 비밀번호가 다릅니다");
                return;
            }
            if (!this.isCheck) {
                alert("약관에 동의해주셔야 가입이 완료됩니다.");
                return;
            }
            let RegisterData = {};
            RegisterData.name = this.userName;
            RegisterData.email = this.userId;
            RegisterData.password = this.userPassword;

            const result = await axios.post(
                "http://localhost:8000/api/register",
                JSON.stringify(RegisterData),
                {
                    headers: {
                        "Content-Type": `application/json`,
                    },
                }
            );
            if (result.data.status) {
                alert(result.data.message);
                this.$router.push("/login");
                return;
            }
            alert(result.data.message);
        },
    },
    components: {
        Logo,
        check,
        noCheck,
    },
};
</script>
