import { createRouter, createWebHistory } from 'vue-router'

// 연결할 각 컴포넌트 import (src/views폴더 아래 컴포넌트들 생성해둠)
import mainPage from './pages/Main.vue'
import loginPage from './pages/Login.vue'
import registerPage from './pages/Register.vue'
import messagePage from './pages/Message.vue'
import creditPage from './pages/Credit.vue'

// 라우터 설계
const routes = [
  { path: '/', component: mainPage },
  { path: '/login', component: loginPage },
  { path: '/register', component: registerPage },
  { path: '/message', component: messagePage },
  { path: '/credit', component: creditPage },
]

// 라우터 생성
const router = createRouter({
  history: createWebHistory(),
  routes
});

// 라우터 추출 (main.js에서 import)
export { router }