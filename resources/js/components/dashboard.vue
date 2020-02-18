<template>
    <div>
        <events-list :events="events"></events-list>
        <event-container :event="event"></event-container>
    </div>
</template>

<script>
export default {
    mounted() {
        axios.get("/api/exceptions").then(resp => {
            this.events = resp.data;
        });
    },
    data: () => {
        return {
            events: [],
            event: {}
        };
    }
};
</script>
