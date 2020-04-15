<template>
  <div class="event-card" :class="{ active: active }" @click="eventSelected">
    <div class="event-card-head">
      <div class="text-wrap">
        <b-badge class="custom-badge">{{ event.total }}</b-badge>
        <div class="font-weight-bold text-truncate">{{ event.exception_name }}</div>
        <div class="d-flex justify-content-between">
          <div>
            <span>{{ event.host }}</span>
          </div>
          <div>
            <span class="font-weight-bold">{{ event.reported_at }}</span>
            <avatar></avatar>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    active: {
      default: false,
      type: Boolean
    },
    event: {
      type: Object
    }
  },
  methods: {
    eventSelected() {
      this.$emit('selected', this.event);
    }
  }
};
</script>

<style scoped>
.event-card {
  margin-bottom: 10px;
  padding: 7px;
  cursor: pointer;
  border: 1px solid #66666654;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.event-card-head {
  padding: 0px;
  margin: 0px;
}

.active {
  background: #7dd45054;
}

.custom-badge {
  float: right;
  margin-top: -14px;
  margin-right: -12px;
}
</style>
