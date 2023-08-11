<template>
    <div class="scoped-changelog">
        <Head title="Changelog"/>

        <Heading class="mb-6">{{title}}</Heading>

        <Card class="text-md py-8 px-3" v-html="changelog">

        </Card>
    </div>
</template>

<script setup>
import {onMounted, ref, defineProps} from "vue";
const props = defineProps({
  title: String,
  error_msg: String
})
const changelog = ref('')

onMounted(() => {
    Nova
        .request()
        .get('/nova-vendor/changelog/')
        .then((result) => {
            changelog.value = result.data
        })
        .catch((error) => {
            changelog.value = "<h1> " + props.error_msg + "</h1>"
        })
})

</script>
<style>
h1,h2,h3,h4 {
  color: rgba(var(--colors-primary-500));
}
</style>
