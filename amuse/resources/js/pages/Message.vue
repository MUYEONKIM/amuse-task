<template>
    <pageNavbar />
    <div class="w-full bg-[#F2F4F8] flex justify-center">
        <div
            class="w-[1223px] mt-[56px] mb-[200px] rounded-[24px] bg-white flex justify-center"
        >
            <div class="w-[1031px] flex flex-col">
                <p
                    class="mt-[53px] font-PretendBold text-[38px] w-full text-center"
                >
                    메시지 전송
                </p>
                <div class="flex mt-[36px] w-[1031px] justify-between">
                    <button
                        class="w-[333px] h-[66px] font-PretendMedium rounded-[8px] text-white bg-[#4F44F0]"
                    >
                        문자 메시지
                    </button>
                    <button
                        class="w-[333px] h-[66px] font-PretendMedium rounded-[8px] text-[#555555] bg-[#F5F6FA] focus:text-white focus:bg-[#4F44F0]"
                    >
                        알림톡 (카카오)
                    </button>
                    <button
                        class="w-[333px] h-[66px] font-PretendMedium rounded-[8px] text-[#555555] bg-[#F5F6FA] focus:text-white focus:bg-[#4F44F0]"
                    >
                        친구톡 (카카오)
                    </button>
                </div>
                <div class="mt-[32px] text-[16px] text-[#525252] w-full">
                    <p>
                        • 간편하게 한 화면에서 단문, 장문 포토메세지를 발송할 수
                        있습니다.
                    </p>
                    <p>
                        • 90byte 초과 시 장문문자로 자동 전환되며, 최대
                        2,000byte까지 작성이 가능합니다.
                    </p>
                </div>
                <hr
                    class="mt-[32px] border-1 border-[#707070] opacity-30 w-full"
                />
                <div class="flex mt-[32px] w-full justify-between">
                    <div class="w-[562px]">
                        <p class="font-PretendSemiBold text-[22px]">수신번호</p>
                        <div class="mt-[16px] w-full flex justify-between">
                            <input
                                class="w-[439px] h-[61px] bg-[#F4F5F6] pl-[20px]"
                                placeholder="휴대폰번호 (숫자만 입력)"
                            />
                            <button
                                class="bg-[#4F44F0] w-[114px] h-[61px] rounded-[8px] flex text-[20px] text-white items-center pl-[17px]"
                            >
                                <img src="../assets/icon/plus.png" />
                                <span> 추가 </span>
                            </button>
                        </div>
                        <div
                            class="mt-[14px] h-[238px] flex justify-center items-center border-[1px] border-[#CECECE] rounded-[8px]"
                        >
                            <div
                                class="w-[522px] h-[198px] flex flex-col justify-between"
                            >
                                <p class="text-[#7B7B7B]">
                                    번호를 입력하거나 후 엔터 혹은 추가하기를
                                    클릭해 주세요.<br />최대 1만 건까지 붙여넣기
                                    가능합니다.
                                </p>
                                <div class="flex justify-between">
                                    <p class="font-PretendSemiBold text-[18px]">
                                        총 0명
                                    </p>
                                    <p
                                        class="font-PretendMedium text-[18px] text-[#6A6A6A] underline"
                                    >
                                        모두 삭제
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full justify-between mt-[14px]">
                            <button
                                class="w-[182px] h-[61px] rounded-[8px] border-[1px] border-[#CECECE] text-[#7B7B7B] text-[16px] flex justify-center items-center"
                            >
                                <img src="../assets/icon/person.png" />주소록
                                불러오기
                            </button>
                            <button
                                class="w-[182px] h-[61px] rounded-[8px] border-[1px] border-[#CECECE] text-[#7B7B7B] text-[16px] flex justify-center items-center"
                            >
                                <img src="../assets/icon/note.png" />파일
                                불러오기
                            </button>
                            <button
                                class="w-[182px] h-[61px] rounded-[8px] border-[1px] border-[#CECECE] text-[#7B7B7B] text-[16px] flex justify-center items-center"
                            >
                                <img src="../assets/icon/time.png" />최근 전송
                                내역
                            </button>
                        </div>
                        <hr
                            class="w-full mt-[32px] border-[1px] border-[#707070] opacity-30"
                        />
                        <p class="mt-[32px] font-PretendSemiBold text-[22px]">
                            발신번호
                        </p>
                        <div
                            class="w-full h-[61px] bg-[#F4F5F6] mt-[16px] flex items-center justify-center"
                        >
                            <div
                                class="flex justify-between w-[524px] h-[21px] items-center"
                            >
                                <p class="text-[#7B7B7B] text-[18px]">
                                    전송할 발신번호 선택
                                </p>
                                <div
                                    class="w-[10px] h-[10px] border-t-[2px] border-black border-r-[2px] rotate-[135deg]"
                                ></div>
                            </div>
                        </div>
                        <hr
                            class="w-full border-[1px] border-[#707070] opacity-30 mt-[32px] mb-[32px]"
                        />
                        <p class="font-PretendSemiBold text-[22px]">
                            메시지 입력
                        </p>
                        <div
                            class="bg-[#F6F6F6] mt-[16px] border-[1px] border-[#E1E3E5] w-[561px] flex flex-col items-center rounded-[8px]"
                        >
                            <div class="w-[513px] mt-[24px] pb-[24px]">
                                <input
                                    v-model="title"
                                    class="w-full h-[61px] border-[1px] border-[#CECECE] pl-[20px] rounded-[8px] text-[18px]"
                                    placeholder="제목을 입력해주세요. (단문 SMS는 제외, 최대 30byte) "
                                />
                                <div
                                    class="flex justify-between w-full mt-[17px]"
                                >
                                    <button
                                        class="text-[16px] text-white text-center bg-[#5E2BFF] w-[101px] h-[35px] rounded-[24px]"
                                    >
                                        단문 SMS
                                    </button>
                                    <div class="flex items-center">
                                        <p
                                            class="font-PretendMedium text-[16px] text-[#8D8D8D]"
                                        >
                                            <span
                                                class="text-[#5E2BFF] text-[16px] font-PretendSemiBold"
                                                >0</span
                                            >
                                            / 90bytes
                                        </p>
                                        <img
                                            src="../assets/icon/refresh.png"
                                            class="ml-[11px]"
                                        />
                                    </div>
                                </div>
                                <div class="relative h-[295px] pb-[4px]">
                                    <textarea
                                        v-model="content"
                                        class="w-full h-[295px] border-[1px] border-[#CECECE] mt-[16px] pt-[20px] pl-[20px] text-[18px] rounded-[8px] resize-none"
                                        placeholder="내용을 입력해 주세요. 90byte 초과 시 장문 문자로,&#13;&#10;이미지 추가 시 포토 문자로 자동 전환 됩니다."
                                    ></textarea>
                                    <div
                                        class="absolute bottom-0 right-[16.5px] flex w-[345px] justify-between"
                                    >
                                        <button
                                            class="w-[107px] h-[43px] text-[#646464] rounded-[22px] bg-[#F5F5F5] text-[16px]"
                                        >
                                            치환코드
                                        </button>
                                        <button
                                            class="w-[107px] h-[43px] text-[#646464] rounded-[22px] bg-[#F5F5F5] text-[16px]"
                                        >
                                            템플릿
                                        </button>
                                        <button
                                            class="w-[107px] h-[43px] text-[#646464] rounded-[22px] bg-[#F5F5F5] text-[16px]"
                                        >
                                            문자도구
                                        </button>
                                    </div>
                                </div>
                                <hr
                                    class="w-full border-[1px] border-[#707070] opacity-30 mt-[32px] mb-[32px]"
                                />
                                <div class="flex justify-between w-full">
                                    <p class="font-PretendSemiBold text-[18px]">
                                        광고성 문자(080 수신거부번호 포함)
                                    </p>
                                    <img src="../assets/icon/button.png" />
                                </div>
                                <hr
                                    class="w-full border-[1px] border-[#707070] opacity-30 mt-[32px] mb-[32px]"
                                />
                                <p
                                    class="mt-[16px] font-PretendSemiBold text-[18px]"
                                >
                                    이미지 추가
                                </p>
                                <img
                                    src="../assets/icon/grayplus.png"
                                    class="mt-[16px] mb-[16px]"
                                />
                                <div class="text-[#797979] text-[16px]">
                                    <p>
                                        • 이미지는 최대 3장까지 첨부 가능합니다.
                                    </p>
                                    <p>
                                        • 이미지 파일 형식은 JPG, PNG, GIF만
                                        가능합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sticky top-0 w-[401px] h-[775px]">
                        <div
                            class="border-[5px] border-[#4D4D4D] w-full h-full bg-[#EAF8FF] rounded-[22px] relative"
                        >
                            <div
                                class="absolute top-[39px] left-[34.39px] w-[16px] h-[16px] border-t-[4px] border-black border-r-[4px] rotate-[225deg]"
                            ></div>
                        </div>
                    </div>
                </div>
                <hr
                    class="w-full border-[1px] border-[#707070] opacity-30 mt-[32px] mb-[32px]"
                />
                <div class="flex flex-col">
                    <p class="mt-[32px] font-PretendSemiBold text-[22px]">
                        발송 설정
                    </p>
                    <div class="flex mt-[16px]">
                        <button
                            class="w-[274px] h-[66px] rounded-[8px] text-[22px] bg-[white] border-[2px] border-[#4F44F0] text-[#4F44F0] text-center"
                        >
                            <div class="flex items-center justify-center">
                                <img src="../assets/icon/bluecheck.png" />
                                <p>즉시 발송</p>
                            </div>
                        </button>
                        <button
                            class="w-[274px] h-[66px] rounded-[8px] text-[22px] bg-[#F2F5F9] focus:bg-[white] focus:border-[2px] focus:border-[#4F44F0] focus:text-[#4F44F0] text-[#747B84] text-center ml-[15px]"
                        >
                            <div class="flex items-center justify-center">
                                <img src="../assets/icon/graycheck.png" />
                                <p>예약 발송</p>
                            </div>
                        </button>
                    </div>
                </div>
                <hr
                    class="w-full border-[1px] border-[#707070] opacity-30 mt-[32px] mb-[40px]"
                />
                <button
                    @click="messageSubmit"
                    class="w-full h-[66px] bg-[#4F44F0] text-center font-PretendMedium text-[22px] rounded-[8px] text-white mb-[72px]"
                >
                    발송하기
                </button>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import pageNavbar from "../layout/pageNavbar.vue";

export default {
    components: {
        pageNavbar,
    },
    data() {
        return {
            isCheck: false,
            title: null,
            content: null,
        };
    },
    methods: {
        isChecked() {
            this.isCheck = !this.isCheck;
            console.log(this.isCheck);
        },
        messageSubmit: async function () {
            let msessageData = {};
            msessageData.title = this.title;
            msessageData.content = this.content;

            const result = await axios.post(
                "http://localhost:8000/api/message",
                JSON.stringify(msessageData),
                {
                    headers: {
                        "Content-Type": `application/json`,
                    },
                }
            );
            if (result.data.status) {
                alert(result.data.message);
                return;
            }
            alert(result.data.message);
        },
    },
};
</script>
