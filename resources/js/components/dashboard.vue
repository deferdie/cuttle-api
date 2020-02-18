<template>
    <div class="row">
        <events-list
            :events="events"
            @selected="selectedEvent"
            class="col-4"
        ></events-list>
        <event-container :event="event" class="col-8 pl-0"></event-container>
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
