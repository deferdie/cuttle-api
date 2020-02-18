<template>
    <div>
        <event-card
            v-for="event in events"
            :event="event"
            :key="`event_${event.id}`"
            @selected="eventSelected"
            :active="selectedEvent && selectedEvent.id === event.id"
        ></event-card>
    </div>
</template>

<script>
export default {
    props: {
        events: {
            type: Array,
            default: () => []
        }
    },
    data: () => {
        return {
            selectedEvent: null
        };
    },
    methods: {
        eventSelected(event) {
            this.selectedEvent = event;
            this.$emit("selected", event);
        }
    }
};
</script>
