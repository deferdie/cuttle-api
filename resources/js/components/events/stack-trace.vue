<template>
  <div>
    <table class="table table-responsive">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">File</th>
          <th scope="col">Line number</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in stack" v-bind:key="index">
          <th scope="row">{{index}}</th>
          <td>{{item.file}}</td>
          <td>{{item.line}}</td>
          <td>@mdo</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ['stack']
};
</script>