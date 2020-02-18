<template>
  <div>
    <events-list :events="events"></events-list>
    <event-container :event="event"></event-container>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data: () => {
    return {
      events: [],
      event: {}
    };
  }
};
</script>
