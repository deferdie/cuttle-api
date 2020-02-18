<template>
    <p>{{ event.message }}</p>
</template>

<script>
export default {
    props: {
        event: {
            type: Object
        }
    }
};
</script>
