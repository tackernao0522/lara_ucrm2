<script setup>
import { router } from '@inertiajs/vue3';

defineProps({ // idの受け取り
    id: String,
    blog: Object, // 一件のみ取得の場合はObjectにする
})

const deleteConfirm = id => {
    // console.log(id)
    router.delete(`/inertia/${id}`, {
        onBefore: () => confirm('本当に削除しますか？')
    })
}
</script>

<template>
    {{ id }}
    <br>
    {{ blog.title }}
    <br>
    <button @click="deleteConfirm(blog.id)">削除</button>
</template>