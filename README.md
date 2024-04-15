# amuse task
laravel 9.x.x
https://laravel.kr/docs/9.x/installation

Backend - laravel, lara, php, mySQL

Frontend - Vue.js(ver.3.x.x), TailwindCSS

## 배포( 정적 파일로 front 파일만 vecel을 통해 배포 하였음 )
### https://task-deploy-omega.vercel.app/

## Libary ver

    "devDependencies": {
        "@popperjs/core": "^2.11.6",
        "@vitejs/plugin-vue": "^4.5.0",
        "autoprefixer": "^10.4.17",
        "axios": "^0.25",
        "bootstrap": "^5.2.3",
        "laravel-mix": "^6.0.6",
        "lodash": "^4.17.19",
        "postcss": "^8.4.35",
        "sass": "^1.56.1",
        "tailwindcss": "^3.4.1",
        "vue": "^3.4.20"
    },
    "dependencies": {
        "browser-sync": "^2.26.5",
        "browser-sync-webpack-plugin": "^2.0.1",
        "vue-loader": "^17.4.2",
        "vue-router": "^4.0.13"
    }

## 실행방법
>
1. cd ./amuse
>
2. npm install
>
3. php artisan migrate
>
4. php artisan serve
>
5. npm run watch

## 📙 **개발 내용 요약**

- 기업과제를 진행하며 XD로 디자인 시안을 받아 구현한 웹 페이지 입니다.
- Laravel의 custom인증을 통해 로그인 및 회원가입 기능을 구현하였습니다.
- 메시지를 입력 후 발송 버튼을 누르면 db에 저장되도록 하였습니다.

### 🔧 SUMMARY

**새로운 프레임 워크 및 언어 사용**

- Frontend는 Vue.js 프레임워크를와 Tailwind CSS를 사용하여 작성하였으며, Backend는 PHP, Laravel과 MySQL을 이용하여 진행하였습니다.
- 기존 React만 진행해보았던 것과는 달리 처음으로 Vue.js를 이용하며 다른 프레임워크를 사용해보며 각각의 장.단점과 특징을 알게 되었습니다. 특히 React의 단방향 이동통신과 다른 양방향 이동 통신이 가능하다는 점과 한 파일 안에 html, css, js 를 분리해 종합해놓았다는 점이 매우 신기했습니다.

**새로운 CSS 프레임워크 및 반응형 - TailWind CSS**

- 또한 자주 애용하던 Styled-Component 대신 Tailwind CSS를 처음으로 다루어 보았습니다. 기존의 Styled-Component는 각각의 태그들을 Component화 하여 구분이 쉽고, Styled-Component들을 따로 관리해주어 유지보수에서 쉬웠다는 장점이 있었다면, Tailwind CSS는 태그안의 class로 모든 css 속성을 관리해주어야 하여 가독성과 유지보수 측면에서 어렵겠다는 생각을 하였습니다.
- 하지만 css 속성 이름들을 알기 쉽게 직관화가 되어 있으며, 조금만 익숙해지면 빠르게 배우고 익숙해질 수 있는 러닝 커브가 낮다는 장점이 있었습니다. 또한 커스텀 타입을 쉽게 지정하여 쉽게 속성을 지정해줄 수 있는 부분이 좋았습니다.
- 처음으로 반응형 css를 직접 프로젝트에 도입해보았습니다. 매 번 시간을 핑계로 진행하지 못했던 반응형이었던 만큼 아쉬움이 크게 남았었습니다. 때문에 이번 프로젝트에서는 간단하게라도 반응형을 도입해보고자 하여 간단하게 width:1920px 과 width: 1500px를 기준으로 도입하였습니다.

**처음 접해보는 Backend 프레임워크 및 언어 - Laravel, php**

- Backend의 기능을 간단히 구현하며 과제 내용으로 처음으로 접하는 php와 Laravel 프레임 워크를 이용하여 로그인, 회원가입, message DB에 저장하기 기능을 구현하여야 했습니다. 처음에는 낯선 프레임 워크 이고, php 언어도 처음 다루어 보았기에 어려움을 많이 겪었습니다. 허나 공식 DOCS와 여러 강의들을 참고하며 진행하였습니다.
- 하지만 이전 프로젝트에서 직접 Node.js를 사용하며 Controller와 Rotuer을 만들고, DB를 만들어 보았던 것이 큰 도움이 되었습니다. 비록 passport라이브러리를 이용하여 인증까지는 못하였지만 Laravel mix에서 기본으로 제공해주는 Controller들을 이용하며 진행하였습니다.

**Reminding**

- 이번 프로젝트에서는 익숙해진 언어 및 프레임워크가 아닌 새로운 프레임워크 및 언어를 써보았다는 것이 가장 큰 경험으로 다가왔습니다. 회사에서 프로젝트를 진행하거나 다른 팀원들과 프로젝트를 진행한다 하더라도 매 번 같은 언어로 작업하기에는 곤란한 상황이 있을 겁니다.
- 각 팀원들이 쓰는 언어가 다르거나, 업무에서 요구하는 언어가 다른 경우 이번 프로젝트를 진행했던 경험을 바탕으로 더욱 빠르게 적응하고 배울 수 있을 것 같습니다.
