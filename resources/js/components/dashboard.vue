<template>
    <div>
        <events-list :events="events" @selected="selectedEvent"></events-list>
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
    },
    methods: {
        selectedEvent(event) {
            this.event = event;
        }
    }
};
</script>
