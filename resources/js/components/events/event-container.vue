<template>
  <div v-if="event.id">
    <div class="paper-1 p-1">
      <p class="font-weight-bold m-0">{{ event.exception_name }}</p>
      <p class="mb-0">{{ event.message }}</p>
      <div>
        <b-badge variant="dark">{{ event.application.name }}</b-badge>
      </div>
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
              <stack-trace :stack="JSON.parse(event.stack_trace)"></stack-trace>
            </b-tab>
            <b-tab title="Environment">
              <b-row>
                <b-col class="col-2 font-weight-bold">Laravel config cached</b-col>
                <b-col>{{ event.laravel_config_cached ? 'Yes' : 'No' }}</b-col>
                <div class="w-100"></div>

                <b-col class="col-2 font-weight-bold">Laravel version</b-col>
                <b-col>{{ event.laravel_version }}</b-col>
                <div class="w-100"></div>

                <b-col class="col-2 font-weight-bold">PHP version</b-col>
                <b-col>{{ event.php_version }}</b-col>
                <div class="w-100"></div>

                <b-col class="col-2 font-weight-bold">Laravel env</b-col>
                <b-col>{{ event.environment }}</b-col>
                <div class="w-100"></div>

                <b-col class="col-2 font-weight-bold">Git hash</b-col>
                <b-col>{{ event.git_hash }}</b-col>
                <div class="w-100"></div>

                <b-col class="col-2 font-weight-bold">Git branch</b-col>
                <b-col>{{ event.git_branch }}</b-col>
                <div class="w-100"></div>
              </b-row>
            </b-tab>
            <b-tab title="Headers">
              <b-row>
                <b-col v-if="event.headers">
                  <table class="table table-dark table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col" colspan="6" class="min">Name</th>
                        <th scope="col">Value</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="header in Object.keys(parseHeaders(event.headers))">
                        <td scope="row" colspan="6" class="min">
                          <b>{{header}}</b>
                        </td>
                        <td>{{parseHeaders(event.headers)[header]}}</td>
                      </tr>
                    </tbody>
                  </table>
                </b-col>
              </b-row>
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
  },

  methods: {
    parseHeaders(headers) {
      if (headers) {
        return JSON.parse(headers);
      }
    }
  }
};
</script>


<style>
td.min {
  width: 1%;
  white-space: nowrap;
}
</style>