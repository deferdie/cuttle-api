<template>
    <div class="event-card" :class="{ active: active }">
        <div class="event-card-head d-flex justify-content-between">
            <span>
                syntax error, unexpected end of file
            </span>

            <avatar></avatar>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        active: {
            default: false,
            type: Boolean
        }
    }
};
</script>

<style>
.event-card {
    padding: 7px;
    cursor: pointer;
    border: 1px solid #66666654;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.event-card-head {
    font-weight: bold;
    padding: 0px;
    margin: 0px;
}

.active {
    background: #7dd45054;
}
</style>
