<template>
    <div class="h-[973px] w-full bg-[#F2F4F8] flex justify-center">
        <div class="w-[560px] flex flex-col items-center">
            <Logo class="w-[219px] h-[68px] mt-[173px]" />
            <div class="w-full text-[22px] mt-[69px] relative">
                <input
                    placeholder="아이디를 입력해주세요"
                    v-model="userId"
                    class="mt-[14px] w-full h-[61px] pl-[53px] pt-5 pb-5 text-[18px]"
                />
                <div
                    class="absolute inset-y-0 left-0 pt-[15px] pl-[20px] flex items-center pointer-events-none"
                >
                    <id />
                </div>
            </div>
            <div class="w-full text-[22px] mt-[24px] relative">
                <input
                    placeholder="비밀번호(영문, 숫자, 특수문자 포함 8~30자)"
                    type="password"
                    v-model="userPassword"
                    class="mt-[14px] w-full h-[61px] pl-[53px] pt-5 pb-5 text-[18px]"
                />
                <div
                    class="absolute inset-y-0 left-0 pt-[15px] pl-[20px] flex items-center pointer-events-none"
                >
                    <pw />
                </div>
            </div>
            <div
                class="w-full flex justify-between items-center text-[18px] mt-[58px]"
            >
                <div class="flex items-center" @click="isChecked">
                    <noCheck v-if="!isCheck" />
                    <check v-if="isCheck" />
                    <p class="ml-[12px]">아이디 저장</p>
                </div>
                <div>
                    <p>아이디 찾기 | 비밀번호 찾기</p>
                </div>
            </div>
            <button
                class="w-full h-[66px] mt-[64px] bg-[#4F44F0] text-white text-center text-[22px] rounded-[8px]"
                @click="loginSubmit"
            >
                로그인
            </button>
            <div class="flex mt-[40px]">
                <p class="font-PretendMedium text-[18px]">계정이 없으신가요?</p>
                <router-link
                    to="/register"
                    class="ml-[8px] text-[#5146F0] font-PretendMedium text-[18px] border-b-[1px] border-[#5146F0] leading-0"
                    >회원가입하기</router-link
                >
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import { check, noCheck, id, logo, pw } from "../assets";

export default {
    data() {
        return {
            isCheck: false,
            userId: null,
            userPassword: null,
        };
    },
    methods: {
        isChecked() {
            this.isCheck = !this.isCheck;
        },
        loginSubmit: async function () {
            let loginData = {};
            loginData.email = this.userId;
            loginData.password = this.userPassword;

            const result = await axios.post(
                "http://localhost:8000/api/login",
                JSON.stringify(loginData),
                {
                    headers: {
                        "Content-Type": `application/json`,
                    },
                }
            );
            if (result.data.status) {
                alert(result.data.message);
                this.$router.push("/");
                return;
            }
            alert(result.data.message);
        },
    },
    components: {
        logo,
        check,
        noCheck,
        id,
        pw,
    },
};
</script>
