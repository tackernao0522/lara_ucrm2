<script setup>
defineProps({ // idの受け取り
    id: String,
    blog: Object, // 一件のみ取得の場合はObjectにする
})
</script>

<template>
    {{ id }}
    <br>
    {{ blog.title }}
</template>