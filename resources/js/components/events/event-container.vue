<template>
  <div v-if="event.id">
    <div class="paper-1 p-1">
      <p class="font-weight-bold m-0">{{ event.exception_name }}</p>
      <p>{{ event.message }}</p>
    </div>
    <div class="paper-1">
      <div>
        <b-card no-body>
          <b-tabs pills card>
            <b-tab title="General details" active>
              <b-row>
                <b-col class="col-2 font-weight-bold">Host</b-col>
                <b-col>{{ event.host }}</b-col>
                <div class="w-100"></div>
                <b-col class="col-2 font-weight-bold">URI</b-col>
                <b-col>{{ event.uri }}</b-col>
                <div class="w-100"></div>
                <b-col class="col-2 font-weight-bold">Full link</b-col>
                <b-col>{{ `${event.host}${event.uri}` }}</b-col>
                <div class="w-100"></div>
                <b-col class="col-2 font-weight-bold">Report time</b-col>
                <b-col>{{ event.reported_at }}</b-col>
                <div class="w-100"></div>
                <b-col class="col-2 font-weight-bold">Method</b-col>
                <b-col>{{ event.method }}</b-col>
                <div class="w-100"></div>
                <b-col class="col-2 font-weight-bold">HTTP status</b-col>
                <b-col>{{ event.http_status }}</b-col>
              </b-row>
            </b-tab>
            <b-tab title="Stack trace">
              {{ event.stack_trace }}
            </b-tab>
            <b-tab title="Environment">
              asdasd
            </b-tab>
          </b-tabs>
        </b-card>
      </div>
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
