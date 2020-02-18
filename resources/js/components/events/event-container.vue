<template>
    <div>
        <div class="paper-1 p-1">
            <p class="font-weight-bold m-0">{{ event.exception_name }}</p>
            <p>{{ event.message }}</p>
        </div>
    </div>
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
